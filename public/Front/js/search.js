/**
 * AJAX Search Functionality with jQuery
 */
$(document).ready(function() {
    const $searchForm = $('#search-form');
    const $searchInput = $('#search-input');
    const $searchResults = $('#search-results');
    let searchTimeout;

    if ($searchForm.length && $searchInput.length && $searchResults.length) {
        // Add event listener to the search input for real-time search
        $searchInput.on('input', function() {
            const query = $(this).val().trim();
            
            // Clear previous timeout
            clearTimeout(searchTimeout);
            
            // Hide results if query is empty
            if (query === '') {
                $searchResults.html('').hide();
                return;
            }
            
            // Set a small timeout to prevent too many requests while typing
            searchTimeout = setTimeout(function() {
                performSearch(query);
            }, 300);
        });
        
        // Prevent form submission
        $searchForm.on('submit', function(e) {
            e.preventDefault();
            const query = $searchInput.val().trim();
            if (query !== '') {
                performSearch(query);
            }
        });
        
        // Click outside to close results
        $(document).on('click', function(e) {
            if (!$searchForm.has(e.target).length) {
                $searchResults.hide();
            }
        });
    }
    
    function performSearch(query) {
        // Create AJAX request
        $.ajax({
            url: '/search',
            method: 'GET',
            data: { q: query },
            dataType: 'json',
            success: function(data) {
                // Clear previous results
                $searchResults.empty();
                
                if (data.results.length === 0) {
                    $searchResults.html('<div class="search-no-results">No results found</div>');
                } else {
                    // Create list of results
                    const $resultsList = $('<ul class="search-results-list"></ul>');
                    
                    $.each(data.results, function(index, result) {
                        const $listItem = $('<li class="search-result-item"></li>');
                        
                        // Format the display based on result type and available fields
                        let displayText = '';
                        let url = '#';
                        
                        if (result.type === 'user') {
                            if (result.firstName && result.lastName) {
                                displayText = result.firstName + ' ' + result.lastName + ' (' + result.email + ')';
                            } else if (result.name) {
                                displayText = result.name + ' (' + result.email + ')';
                            } else {
                                displayText = result.email;
                            }
                            url = '/user/' + result.id;
                        } else {
                            // Handle other result types here
                            displayText = result.email || result.name || 'Unknown result';
                            url = result.url || '#';
                        }
                        
                        // Add type icon based on result type
                        let typeIcon = '';
                        if (result.type === 'user') {
                            typeIcon = '<i class="far fa-user mr-2"></i> ';
                        }
                        
                        $listItem.html(
                            '<a href="' + url + '">' + 
                                '<div class="search-result-content">' +
                                    typeIcon +
                                    '<span class="search-result-text">' + displayText + '</span>' +
                                '</div>' +
                            '</a>'
                        );
                        
                        $resultsList.append($listItem);
                    });
                    
                    $searchResults.append($resultsList);
                }
                
                // Show results container
                $searchResults.show();
            },
            error: function(error) {
                console.error('Search error:', error);
                $searchResults.html('<div class="search-error">An error occurred</div>').show();
            }
        });
    }
}); 