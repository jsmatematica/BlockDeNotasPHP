<link rel="stylesheet" href="estilo.css">
<a href="borrarNotas.php">Borrar todas las notas</a>


<form action="back.php" method="POST">
<textarea name="nuevaNota" id="" cols="30" rows="10"></textarea>
<input type="submit" name="" id="" value="guardar">
</form>

<?php


if (isset($_COOKIE['notas'])) {
    $notas = array();
    foreach ($_COOKIE['notas'] as $name => $value) {

        $value = htmlspecialchars($value);
        ?>
<div class="nota"> <?php echo $name."<br>".$value ?></div><br>
        <?php
    }

}
?>