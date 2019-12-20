<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex6</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="row">
                <div class="card col-sm-8 bg-light offset-2">
                    <div class="card-header font-weight-bold bg-info"> Afficher le nombre de jour entre aujourd'hui et le 16 mai 2016</div>
                    <div class="font bg-light">

                        <?php
                        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                        ?>
                        <p>Le nombre de jours au mois de février 2016 est de : <?= $number ?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>