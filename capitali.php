<?php

$opzioni = [];


if (isset($_POST['database'])) {
    $capitali_database = ($_POST['database']['data']);
    for ($i=0; $i < 4; $i++) { 
        $random_num = rand(0, count($capitali_database));
        $capitale_random = $capitali_database[$random_num];
        if ($capitale_random['capital']) {
            array_push($opzioni, $capitale_random);
        } else {
            $i--;
        }
    }
}

if (isset($_POST['next'])) {
    $opzioni = [];

    for ($i=0; $i < 4; $i++) { 
        $random_num = rand(0, count($capitali_database));
        $capitale_random = $capitali_database[$random_num];
        if ($capitale_random['capital']) {
            array_push($opzioni, $capitale_random);
        } else {
            $i--;
        }
    }
}



echo json_encode($opzioni);

?>
