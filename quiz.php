<?php 

include 'capitali.php'



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="bg-dark"></body>
    <header>
        <nav class="bg-primary text-white p-4">
            <h1>Quiz</h1>
        </nav>
    </header>
    <main>
        <div id="app">
            <div class="container bg-warning my-5">
                <div class="row justify-content-center p-5">
                    <div class="m-5">
                        <p>Qual è la capitale di <?php echo 'Italia' ?> ?</p>
                    </div>
                    <div class="row">

                        <?php 
                            foreach ($capitali_random as $key => $value) {
                                echo    '<div class="w-50 my-2">
                                            <button class="btn btn-primary w-100">' .$value.'</button> 
                                        </div>';
                            } 
                        ?>
    
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="vue.js"></script>
</body>
</html>