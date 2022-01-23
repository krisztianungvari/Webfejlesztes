<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Főoldal</title>
</head>
<body>
    <div id="content">
        <nav>  
            <ul> 
                <li> <a href="index.php?menu=fooldal">Főoldal</a> </li> 
                <li> <a href="index.php?menu=tortenet">Történet</a> </li> 
            </ul>
        </nav>
<?php
$menu = filter_input(INPUT_GET,"menu",FILTER_SANITIZE_STRING)?:'fooldal'; 
if($menu == "fooldal"){
include 'fooldal.php';
}
else{
    include 'tortenete.html';
}
?>

</div>
</body>
</html>