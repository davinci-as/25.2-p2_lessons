<?php
if(isset($_GET["message"])) {
    $message = $_GET["message"];
} 
if(isset($_GET["error"])) {
    $error = $_GET["error"];
} 

?>

<h1>Pagina de contacto</h1>

<form action="/25.2-p2_lessons/api/contacts/add" method="GET">
    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
    <textarea name="message" class="form-control" id="email" rows="3"></textarea>
    <input type="submit" value="ENVIAR DATOS">
    <?php if($message) {?>
        <p style="color: green"><?= $message ?></p>
    <?php }?>
    <?php if($error) {?>
        <p style="color: red"><?= $error ?></p>
    <?php }?>

</form>