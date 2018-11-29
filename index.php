<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Occurence</title>
    <!--===================================    Bootstrap  ===========================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Compteur d'occurence</h2>
            <hr>
                   <div class="row">
                       <div class="col-md-12">
                           <form id="Anagramme" method='post'>

                               <div class="form-group">
                                   <label for="propos_1">Saisir un texte</label>
                                   <textarea class="form-control" name="texte" id="texte" cols="30" rows="10"></textarea>
                                    <div id="propos_1_Error">

                                    </div>
                               </div>

                               <div class="form-group">
                                   <label for="propos_2">Recherchez une occurence</label>
                                   <input type="text" class="form-control" name="occurence" placeholder="Entrez un mot">
                                   <a href=""></a>
                                    <div id="propos_2_Error">

                                    </div>
                               </div>

                               <div class="text-center">
                                   <button type="submit" name="Submit" class="btn btn-success">Tester</button>
                               </div>
                           </form>
                       </div>
                   </div>
                </div>
        </div>
    </div>
</div>
<!--===================================    Bootstrap  ===========================================================-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--===================================    Mon Javascript  ===========================================================-->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php

if(isset($_POST['Submit']))
{
    mb_internal_encoding('UTF-8');

    if(!empty($_POST['texte']) && !empty($_POST['occurence']))
    {
        $resultat = mb_strtolower(mb_substr_count($_POST['texte'], $_POST['occurence']));
        echo ('le terme &nbsp;'.$_POST['occurence'].' &nbsp; présente &nbsp;'.$resultat.'&nbsp; occurence dans le texte saisie');
    }
    else
    {
        echo('Veuillez renseignez les champs vides');
    }
}