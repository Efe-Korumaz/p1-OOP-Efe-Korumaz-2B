<?php
$books = [
    'book1' => [
        'title' => 'De Kleine Prins',
        'author' => 'Antoine de Saint-Exupéry',
        'pages' => 150
    ],
    'book2' => [
        'title' => 'De Alchemist',
        'author' => 'Paulo Coelho',
        'pages' => 208
    ],
    'book3' => [
        'title' => 'Het Gouden Ei',
        'author' => 'Tim Krabbé',
        'pages' => 100
    ]
];

echo "Titel van book2: " . $books['book2']['title'] . "<br>";
echo "Auteur van book2: " . $books['book2']['author'] . "<br>";

$books['book1']['pages'] = 350;

$books['book4'] = [
    'title' => 'De Ontdekking van de Hemel',
    'author' => 'Harry Mulisch',
    'pages' => 900
];

foreach ($books as $key => $book) {
    echo "<strong>$key:</strong><br>";
    echo "Titel: " . $book['title'] . "<br>";
    echo "Auteur: " . $book['author'] . "<br>";
    echo "Pagina's: " . $book['pages'] . "<br><br>";
}
?>
