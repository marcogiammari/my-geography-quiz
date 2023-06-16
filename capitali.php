<?php

$capitali_random = [
    ['Italia' => 'Roma'],
    ['Francia' => 'Parigi'],
    ['Spagna' => 'Madrid'],
    ['Germania' => 'Berlino']
];

// for ($i=0; $i < 4; $i++) { 
//     $capitale_random = $capitali_database[rand(count($capitali_database))];
//     array_push($capitali_random, $capitale_random);
// }




if (!empty($_POST)) {
    if (isset($_POST['database'])) {
        echo 'FUNZIONA';
        $capitali_database = $_POST['database'];
    } else {
        echo 'NON FUNZIONA';
    }

}

echo json_encode($capitali_database);

?>
