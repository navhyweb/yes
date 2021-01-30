<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail form</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <form method="post">
        <input type="text" placeholder="Name" name="" id="name" required="">
        <input type="email"  placeholder="Email"name="" id="email" required="">
        <input type="asunto" placeholder="Asunto" name="" id="asunto" required="">
        <textarea placeholder="Mensaje" name="msj"></textarea>
        <input type="submit" name="enviar">
    </form>
<?php
include("correo.php");
?>

</body>
</html>