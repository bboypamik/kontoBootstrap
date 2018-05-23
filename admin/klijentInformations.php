
<?php
$klijent = getOne("klijenti", $_GET["id"]);


?>


<table class="table table-striped">
    <tr>
<td>
    Ime firme
</td>
        <td> <?php echo $klijent["ime_firme"] ?> </td>
    </tr>
    <tr>
        <td>vlasnik</td>
        <td><?php echo $klijent["vlasnik"] ?></td>
    </tr>
    <tr>
        <td>adresa</td>
        <td><?php echo $klijent["adresa"] ?></td>
    </tr>
    <tr>
        <td>telefon</td>
        <td><?php echo $klijent["telefon"] ?></td>
    </tr>
    <tr>
        <td>placanje</td>
        <td><?php echo $klijent["placanje"] ?></td>
    </tr>
    <tr>
        <td>maticni broj</td>
        <td><?php echo $klijent["maticni_broj"] ?></td>
    </tr>
    <tr>
        <td>pib</td>
        <td><?php echo $klijent["pib"] ?></td>
    </tr>
</table>

<?php


$id = $_GET["id"];
//$sql = "SELECT * FROM placanje WHERE klijent_id = '" . $id . "'";
//
//$statement = $conn->prepare($sql);
//
//$statement->execute();
//
//$statement->setFetchMode(PDO::FETCH_ASSOC);
//
//$meseci = $statement->fetchAll();

$meseci = getAll("placanje",null,null, 'klijent_id='.$id);

?>

<h2 class="mt-5">Plaćanje</h2>

<table class="table table-striped">
    <?php foreach ($meseci as $mesec) : ?>
        <tr>
            <td><?php echo $mesec["mesec"] ?></td>
            <td><?php echo $mesec["din"] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
<div class="row">
    <div class="col-2">
<a class="form-control btn-primary forma mt-2 mb-2 text-center" href="index.php?stranica=evidentiranje_uplate&id=<?php echo $_GET['id'] ?>">Evidentiraj uplatu</a>
</div>
</div>