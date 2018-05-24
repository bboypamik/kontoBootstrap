<?php
$klijent = getOne("klijenti", $_GET["id"]);

$datum_kreiranja = $klijent["date_of_creation"];
$datum_kreiranja = date("Y-m-d", strtotime($datum_kreiranja));

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
    <tr>
        <td>Datum kreiranja:</td>
        <td><?php echo $datum_kreiranja ?></td>
    </tr>
</table>

<?php


$id = $_GET["id"];

$meseci = getAll("placanje", null, null, 'klijent_id=' . $id);

$date = $meseci['month_year'];
$month = substr($date, 0, 1);
$year = substr($date, 2, 5);

foreach ($meseci as $mesec) {
    $novi_niz[$mesec['month_year']] = $mesec['din'];
}
//echo "<pre>";
//print_r($novi_niz);
//echo "</pre>";
$start = (new DateTime($datum_kreiranja))->modify('first day of this month');
$end = (new DateTime(date('Y-m-d')))->modify('first day of next month');
$interval = DateInterval::createFromDateString('1 month');
$period = new DatePeriod($start, $interval, $end);
$month_array = array(
    '01' => 'Januar',
    '02' => 'Februar',
    '03' => 'Mart',
    '04' => 'April',
    '05' => 'Maj',
    '06' => 'Jun',
    '07' => 'Jul',
    '08' => 'Avgust',
    '09' => 'Septembar',
    '10' => 'Oktobar',
    '11' => 'Novembar',
    '12' => 'Decembar'
);
?>
<h2 class="mt-5">Plaćanje</h2>
<table class="table table-striped">
    <thead>
    <tr>
        <td>Mesec</td>
        <td>Uplata</td>
        <td>Mesečno održavanje</td>
        <td>Dug</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($period as $dt): ?>
        <tr>
            <td><?php echo $month_array[$dt->format("m")]; ?></td>
            <td><?php echo $novi_niz[$dt->format("Ym")]; ?></td>
            <td><?php echo $klijent["placanje"] ?></td>
            <td><?php echo $novi_niz[$dt->format("Ym")] - $klijent["placanje"] ?></td>
        </tr>

    <?php

    $ukupan_dug = $ukupan_dug +($novi_niz[$dt->format("Ym")] - $klijent["placanje"]);
        ?>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
    <tr>
        <td></td>
        <td></td>
        <td>UKUPNO ZADUŽENJE</td>
        <td><?php echo $ukupan_dug ?></td>
    </tr>
    </tfoot>
</table>



