<?php $today = date('d/m/Y'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex1</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="card col-sm-6 bg-light">
                    <div class="card-header font-weight-bold bg-info">Afficher la date du jour</div>
                    <div class="font bg-light">
                        <p><?= 'Aujourd\'hui nous sommes le : ' . $today . '.' ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
