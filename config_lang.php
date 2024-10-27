
<?php

if(!empty($_POST['langage'])){
    $_SESSION['lang'] = $_POST['langage'];
	
}



if(empty($_SESSION['lang'])){
    $_SESSION['lang'] = "fr";
	
	
}else{
    switch($_POST['langage']){
        case "fr":
        $_POST['langage'] = "fr";
        break;
        case "en":
        $_POST['langage'] = "en";
        break;

        default :
        $_POST['langage'] = "fr"; //au cas ou quelqu'un rentre autre chose que fr/en ou it
        break;
    }
}
 
switch($_SESSION['lang']){
        case "fr":
        $fichier_langage = "lang/csc_fr.php";
        break;
        case "en":
        $fichier_langage = "lang/csc_en.php";
        break;
       
}
include($fichier_langage);


$_SESSION['pageactuelle'] = "index.php";


?>


