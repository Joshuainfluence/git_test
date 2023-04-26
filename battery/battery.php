<?php

$battery = rand(1, 80);
$color = "";
if ($battery < 50) {
    $color = "red";
} else {
    $color = "green";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap5.min.css">
</head>

<body>
    <style>
        .thead {
            width: 60%;
            height: 200px;
            border: 1px solid gray;
        }

        .counters {
            width: <?= $battery . "%" ?>;
            height: 200px;
            background-color: <?= $color ?>;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card d-flex justify-content-center">
                    <div class="thead">
                        <div class="counters"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>