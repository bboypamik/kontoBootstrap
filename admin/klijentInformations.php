
<?php

$id = $_GET["id"];
$sql = "SELECT * FROM klijenti WHERE id = '" . $id . "'";
$statement = $conn->prepare($sql);
$statement->execute();

if ($statement->errorCode() == 0) {
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $klijent = $statement->fetch();
} else {
    $errors = $statement->errorInfo();
    echo $errors[2] ;
}




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