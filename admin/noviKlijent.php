<?php if (isset($_POST["submit"])) : ?>

    <?php
    $imeFirme = $_POST["ime-firme"];
    $vlasnik = $_POST["vlasnik"];
    $adresa = $_POST["adresa"];
    $telefon = $_POST["telefon"];
    $cenaUsluga = $_POST["cena-usluga"];
    $pib = $_POST["pib"];
    $maticniBroj = $_POST["maticni-broj"];

    $sql = "INSERT INTO klijenti (ime_firme, vlasnik, adresa, telefon, placanje, pib, maticni_broj) VALUES ('$imeFirme', '$vlasnik', '$adresa',' $telefon', '$cenaUsluga','$pib', '$maticniBroj')";
    $statement = $conn->prepare($sql);
    $statement->execute();

    if ($statement->errorCode() == 0) {
        echo "New record created successfully";
        header('Location: index.php?stranica=klijenti');
    } else {
        $errors = $statement->errorInfo();
        echo $errors[2] ;
    }

    ?>

<?php else: ?>
    <div class="container">

        <form method="post">
            <label class="mt-5" for="ime-firme">Ime firme</label>
            <input type="text" name="ime-firme" class="form-control mb-2 forma mb-5">
            <label for="vlasnik">Vlasnik</label>
            <input type="text" name="vlasnik" class="form-control mb-2 forma mb-5">
            <label for="adresa">Adresa</label>
            <input type="text" name="adresa" class="form-control mb-2 forma mb-5">
            <label for="telefon">Telefon</label>
            <input type="number" name="telefon" class="form-control mb-2 forma mb-5">
            <label for="cena-usluga">Cena usluga</label>
            <input type="number" name="cena-usluga" class="form-control mb-2 forma mb-5">
            <label for="pib">Pib</label>
            <input type="number" name="pib" class="form-control mb-2 forma mb-5">
            <label for="maticni-broj">Matični broj</label>
            <input type="number" name="maticni-broj" class="form-control mb-2 forma mb-5">
            <input type="submit" name="submit" value="Kreiraj" class="form-control mb-4 btn-primary forma mb-5">
        </form>

    </div>
<?php endif; ?>