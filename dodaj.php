<?php 

require_once('./header.php');

?>


<form method="post" action="./insert.php">
    <input name="imie" required placeholder="Podaj imię">
    <input name="nazwisko" required placeholder="Podaj nazwisko">
    <input name="email" required placeholder="Podaj adres email">

    <button type="submit">Dodaj</button>
</form>