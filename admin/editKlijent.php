<?php if (isset($_POST["submit"])) :?>

<?php


$imeFirme = $_POST["ime_firme"];
$vlasnik = $_POST["vlasnik"];
$adresa = $_POST["adresa"];
$telefon = $_POST["telefon"];
$placanje = $_POST["placanje"];
$maticniBroj = $_POST["maticni_broj"];
$pib = $_POST["pib"];

   $sql = "UPDATE news SET ime_firme = '$imeFirme', vlasnik = '$vlasnik', adresa = '$adresa', telefon = '$telefon', placanje = '$placanje', maticni_broj = 'maticni_broj', pib = '$pib' WHERE id =$id";

    ?>

<?php else: ?>

<?php

$id = $_GET["id"];
$sql = "SELECT * FROM klijenti WHERE id = '" . $id . "'";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$klijent = $statement->fetch();



?>
<div class="container">

    <form method="post">
        <label class="mt-5" for="ime-firme">Ime firme</label>
        <input type="text" name="ime-firme" value="<?php echo $klijent["ime_firme"]?>" class="form-control mb-2 forma mb-5">
        <label for="vlasnik">Vlasnik</label>
        <input type="text" name="vlasnik" value="<?php echo $klijent["vlasnik"]?>" class="form-control mb-2 forma mb-5">
        <label for="adresa">Adresa</label>
        <input type="text" name="adresa" value="<?php echo $klijent["adresa"]?>" class="form-control mb-2 forma mb-5">
        <label for="telefon">Telefon</label>
        <input type="number" name="telefon" value="<?php echo $klijent["telefon"]?>" class="form-control mb-2 forma mb-5">
        <label for="cena-usluga">Cena usluga</label>
        <input type="number" name="cena-usluga" value="<?php echo $klijent["placanje"]?>" class="form-control mb-2 forma mb-5">
        <label for="pib">Pib</label>
        <input type="number" name="pib" value="<?php echo $klijent["pib"]?>" class="form-control mb-2 forma mb-5">
        <label for="maticni-broj">Matični broj</label>
        <input type="number" name="maticni-broj" value="<?php echo $klijent["maticni_broj"]?>" class="form-control mb-2 forma mb-5">
        <input type="submit" name="submit" value="Kreiraj" class="form-control mb-4 btn-primary forma mb-5">
    </form>

</div>

<?php endif; ?>

