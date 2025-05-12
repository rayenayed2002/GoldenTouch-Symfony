// Toxicity Detection for Booking Notes
// Requires SweetAlert2

const HUGGINGFACE_API_TOKEN = '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'; // Or call your backend endpoint instead
const TOXICITY_API_URL = '/toxicity-detect'; // Use a backend proxy for security
const TOXICITY_THRESHOLD = 0.5;

function detectToxicity(text) {
    return fetch(TOXICITY_API_URL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: JSON.stringify({ text })
    })
    .then(res => res.json());
}

document.addEventListener('DOMContentLoaded', function() {
    const notesField = document.querySelector('textarea[name$="[message]"]');
    let lastToxic = false;
    let lastWarned = false;
    if (!notesField) return;

    notesField.addEventListener('input', function() {
        const value = notesField.value.trim();
        if (!value) return;
        detectToxicity(value).then(result => {
            // If backend failed or returned empty, show a warning
            if (
                (!result ||
                 ((Array.isArray(result.fr) && result.fr.length === 0) &&
                  (Array.isArray(result.en) && result.en.length === 0) &&
                  (result.translation === null)))
            ) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Détection indisponible',
                    text: "La détection de propos inappropriés n'est pas disponible actuellement. Votre message ne sera pas vérifié.",
                    confirmButtonText: 'OK',
                    customClass: { popup: 'toxicity-alert' }
                });
                lastToxic = false;
                lastWarned = false;
                notesField.classList.remove('is-invalid');
                return;
            }
            // Only check English toxicity
            const toxicLabelEn = (result.en || []).find(l => l.label === 'toxic');
            const isToxic = toxicLabelEn && toxicLabelEn.score > TOXICITY_THRESHOLD;
            if (isToxic) {
                lastToxic = true;
                if (!lastWarned) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Propos inappropriés',
                        text: "Le message contient des propos inappropriés (détecté via traduction anglaise). Veuillez reformuler avant de continuer.",
                        confirmButtonText: 'OK',
                        customClass: { popup: 'toxicity-alert' }
                    });
                    lastWarned = true;
                }
                notesField.classList.add('is-invalid');
            } else {
                lastToxic = false;
                lastWarned = false;
                notesField.classList.remove('is-invalid');
            }
        }).catch(err => {
            Swal.fire({
                icon: 'warning',
                title: 'Erreur de détection',
                text: "Impossible de vérifier la toxicité du message. Vérifiez votre connexion ou réessayez plus tard.",
                confirmButtonText: 'OK',
                customClass: { popup: 'toxicity-alert' }
            });
            lastToxic = false;
            lastWarned = false;
            notesField.classList.remove('is-invalid');
        });
    });

    // On submit, block if toxic
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            if (lastToxic) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Propos inappropriés',
                    text: 'Veuillez corriger le message avant de soumettre.',
                    confirmButtonText: 'OK',
                    customClass: { popup: 'toxicity-alert' }
                });
            }
        });
    }
});
