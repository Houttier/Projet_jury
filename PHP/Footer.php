<?php
define('DIR_PAGES', 'html/');
// envoi de variables dans l'URL

if($_GET) {   
    
    foreach($_GET as $index=>$value) {
        ${$index} = $value;        
    }
    
    switch($page) {
        case 'accueil':
            $contenu = 'index.html';
            break;
        case 'message':
            $contenu = 'message.html';
            break;
        case 'contact':
            $contenu = 'page_contact_miroir.html';
            break; 
        case 'page_non':
            $contenu = 'page_non.html';
            break;
         case 'question':
            $contenu = 'question.html';
            break; 
        default:
            $contenu = 'index.html';    
            
    } // fin switch   
   
} else {
     $contenu = 'index.html';    
} // fin if $_GET

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../CSS/miroirmiroir.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Montserrat" rel="stylesheet">
</head>
    
<body>
<footer>
    <a href="index.php?page=contact">CONTACT</a>
</footer>
    
   
    
</body>
</html>