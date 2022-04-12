<?php 

$topo = [
    'Japan' => 'Tokyo',
    'UK' => 'London',
    'Egypt' => 'Cairo',
    'Mexico' =>  'Mexico City',
    'USA'  => 'Washington D.C.',
    'India' => 'New Delhi',
    'Zuid-Korea' => 'Seoul',
    'China' => 'Peking',
    'Nigeria' => 'Abuja',
    'Argentina' => 'Buenos Aires',
];

$resultgoed = [];

foreach ($topo as $country => $city) {
    echo "Wat is de hoofdstad van $country?" . PHP_EOL;
    $input = readline();
    if ($input != ($city)) {
        echo "Helaas, $input is niet de hoofdstad van $country" . PHP_EOL;
        echo "Het correcte anwoord is $city" . PHP_EOL;
    } else {
        echo "Correct $city is de hoofdstad van $country" . PHP_EOL;
        array_push($resultgoed, "1");
    }
};

 echo "Je hebt " . count($resultgoed) . " van de 10 goed. "; 

?>