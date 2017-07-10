<?php
session_start();
$formulaire = '<form action="#" method="post">
<p>
<label>Entrez un nombre de 0 à 100 :</label> <input name="nombre" type="text"/>
<input type="submit" value ="Essayer"/>
</p>
</form>';
 
$nombreentre = $_POST['nombre'];
 
if (empty($_SESSION['nb_mystere']))
{
    $_SESSION['nb_mystere'] = mt_rand(0, 100);
}
     

    if ($_SESSION['nb_mystere'] > $nombreentre)
    {
        echo 'nombre donné trop petit';
        echo $formulaire;
    }
    elseif ($nombreentre > $_SESSION['nb_mystere'])
    {

        echo 'nombre donné trop grand';
        echo $formulaire;
    }
    else
    {
        session_destroy();
        echo 'Bravo, vous avez trouvé le nombre mystère !<br />';
    }
?>