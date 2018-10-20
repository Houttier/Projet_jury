<?php


?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./CSS/miroirmiroir.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Montserrat" rel="stylesheet">
    <title>Miroir Miroir</title>
  </head>
    
<body>
    
    <?php include('PHP/header.php'); ?>

    <?php include('PHP/footer.php'); ?>
    
    <?php if(isset($contenu)): ?>
        
        <?php include(DIR_PAGES.$contenu); ?>
        
    <?php endif; ?>
 
    
</body>
</html>