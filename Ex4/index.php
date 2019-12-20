<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex4</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="row">
                <div class="card col-sm-8 bg-light offset-2">
                    <div class="card-header font-weight-bold bg-info"> Afficher le timestamp du jour et celui du  2 août 2016 à 15h</div>
                    <div class="font bg-light">
                        <p>Le timestamps du jour est : <?= time() ?></p>
                        <?php $time2 = mktime(15, 0, 0, 8, 2, 2016);?>
                        <p>Et celui du 2 août 2016 à 15h est : <?= $time2 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>