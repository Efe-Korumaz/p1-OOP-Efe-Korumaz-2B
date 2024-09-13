<?php
// Associatieve array met drie huisdieren
$pets = [
    [
        'species' => 'Hond',
        'name' => 'Rex',
        'age' => 5
    ],
    [
        'species' => 'Kat',
        'name' => 'Whiskers',
        'age' => 3
    ],
    [
        'species' => 'Vogel',
        'name' => 'Tweety',
        'age' => 2
    ]
];

// Print de naam en soort van het derde huisdier
echo "Naam van het derde huisdier: " . $pets[2]['name'] . "<br>";
echo "Soort van het derde huisdier: " . $pets[2]['species'] . "<br>";

// Verhoog de leeftijd van het tweede huisdier met 1 jaar
$pets[1]['age'] += 1;

// Voeg een vierde huisdier toe
$pets[] = [
    'species' => 'Kat',
    'name' => 'Simba',
    'age' => 2
];

// Optioneel: print alle huisdieren
foreach ($pets as $index => $pet) {
    echo "<strong>Huisdier " . ($index + 1) . ":</strong><br>";
    echo "Soort: " . $pet['species'] . "<br>";
    echo "Naam: " . $pet['name'] . "<br>";
    echo "Leeftijd: " . $pet['age'] . "<br><br>";
}
?>
