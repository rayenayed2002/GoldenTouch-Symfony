<?php
header('Content-Type: application/json');

// Dummy chart names for demonstration. Replace with dynamic fetching if needed.
$charts = [
    // Dashboard cards - curated for event pack relevance
    ["name" => "Total Packs", "id" => "dashboardCardTotalPacks"],
    ["name" => "Pack le Plus Vendu", "id" => "dashboardCardMostSoldPack"],
    ["name" => "Prix Moyen des Packs", "id" => "dashboardCardAvgPrice"],
    // Chart sections - curated for event pack relevance
    ["name" => "Packs créés (par période)", "id" => "statPanelChart"],
    ["name" => "Ventes de Packs (tendance)", "id" => "statDetailsTrendChart"],
    ["name" => "Distribution saisonnière des ventes", "id" => "seasonalDistributionChart"],
    ["name" => "Performance par catégorie de pack", "id" => "categoryPerformanceChart"]
];
// Note: Removed unrelated user and conversion stats. Only event pack-centric stats remain.

$q = isset($_GET['q']) ? strtolower(trim($_GET['q'])) : '';
$results = [];
if ($q !== '') {
    foreach ($charts as $chart) {
        if (strpos(strtolower($chart['name']), $q) !== false) {
            $results[] = $chart;
        }
    }
} else {
    // If query is empty, return all items as suggestions
    $results = $charts;
}

echo json_encode(["results" => $results]);
