<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TP</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" media="screen" type="text/css" title="Mon style" href="assets/css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="card col-sm-8 offset-2 bg-light">
                <div class="card-header font-weight-bold text-center text-white bg-dark mb-2"><h3>Afficher une page de calendrier</h3></div>
                <div class="font bg-light">
                    <h1>Choisissez un mois et une année</h1>
                    <div class="choice text-center">
                        <form method="post" action="#">
                            <!--liste déroulante pour le choix des mois-->
                            <select name="month" id="month">
                                <!--génère la liste déroulante pour le choix des mois-->
                                <?php
                                $mont = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre');
                                for ($month = 1; $month <= 12; $month++) {
                                    ?>
                                    <option name=<?= $month ?>><?= $month ?></option>
                                <?php } ?>
                            </select>
                            <!--liste déroulante pour le choix des années-->
                            <select name="year" id="year">
                                <!--génère la liste déroulante pour le choix des années-->
                                <?php for ($year = 1960; $year <= 2200; $year++) { ?>
                                    <option name=<?= $year ?>><?= $year ?></option>
                                <?php } ?>
                            </select>
                            <button type="submit" name="submit" class="btn btn-success">Générer</button>
                        </form>
                        <!--On récupère les sélections précédentes pour les introduire dans le calendrier-->
                        <?php
                        $monthCollect = $_POST[$month];
                        $yearCollect = $_POST[$year];
                        ?>
                            <table class="calendar col-sm-8 offset-2 bg-light">
                                <!--Introduction du mois et de l'année ayant été sélectionné-->
                                <caption><?= $monthCollect . ' ' . $yearCollect ?></caption>
                                <div class='lineDay'>
                                    <thead>
                                        <!--On génère les jours de la semaine-->
                                        <tr>
                                            
                                        <?php
                                        $day = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
                                                for($i = 1; $i<=7; $i++){?>
                                                  <th><?= $day.$i ?></th>
                                             <?php   } ?>
                                        </tr>
                                    </thead>
                                </div>
                                <tbody>
                                <th>

                                </th>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
