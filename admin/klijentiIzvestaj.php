<?php

echo '<table class="table table-striped">';

echo "<thead>
<tr>
<td>id</td>
<td>Firma</td>
<td>Dugovanje</td>
</tr>
</thead>
";


$klijenti = getAll('klijenti');

foreach ($klijenti as $klijent) {

    echo "<tr>";
    echo "<td>" . $klijent['id'] . "</td>";
    echo "<td> " . $klijent['ime_firme'] . "</td>";
    $meseci = getAll('placanje', null, null, 'klijent_id=' . $klijent['id']);

    $datum_kreiranja = $klijent['date_of_creation'];
    $datum_kreiranja = date("Y-m-d", strtotime($datum_kreiranja));

    $date = $meseci['month_year'];
    $month = substr($date, 0, 1);
    $year = substr($date, 2, 5);

    $novi_niz = array();
    foreach ($meseci as $mesec) {
        $novi_niz[$mesec['month_year']] = $mesec['din'];
    }
    $start = (new DateTime($datum_kreiranja))->modify('first day of this month');
    $end = (new DateTime(date('Y-m-d')))->modify('first day of next month');
    $interval = DateInterval::createFromDateString('1 month');
    $period = new DatePeriod($start, $interval, $end);

    $ukupan_dug = 0;
    foreach ($period as $dt) {
        $ukupan_dug = $ukupan_dug + ($novi_niz[$dt->format("Ym")] - $klijent["placanje"]);

    }
    echo "<td>" . $ukupan_dug . "</td>";
    echo "</tr>";
}


?>
</table>