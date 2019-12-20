<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex7</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="row">
                <div class="card col-sm-8 bg-light offset-2">
                    <div class="card-header font-weight-bold bg-info"> Afficher la date du jour + 20 jours</div>
                    <div class="font bg-light">
                        <?php 
                        /*$date = date("d-m-Y"); //date du jour*/
                        $date = date('d-m-Y', strtotime('+ 20 day'));
                        ?>
                        <p>Aujourd'hui +20 jours, nous donne la date <?= $date ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>