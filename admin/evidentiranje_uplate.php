<?php if (isset($_POST["submit"])) : ?>

<?php

$iznos = $_POST['iznos'];
$id = $_GET['id'];
$date = $_POST['year'] . $_POST['month'];

$sql = "INSERT INTO placanje (din, klijent_id, month_year ) VALUES ('$iznos', '$id', '$date')";
$statement = $conn->prepare($sql);
$statement->execute();

    if ($statement->errorCode() == 0) {
        echo "New record created successfully";
        header('Location: index.php?stranica=klijentInformations&id='.$id);
    } else {
        $errors = $statement->errorInfo();
        echo $errors[2] ;
    }

    ?>





<?php else: ?>

<div class="row m-5">
    <div class="col-2">
        <form method="post">
            <select name="month">
                <option value="01"selected>Januar</option>
                <option value="02">Februar</option>
                <option value="03">Mart</option>
                <option value="04">April</option>
                <option value="05">Maj</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Avgust</option>
                <option value="09">Septembar</option>
                <option value="10">Oktobar</option>
                <option value="11">Novembar</option>
                <option value="12">Decembar</option>
            </select>
            <select name="year">
                <option value="2010"selected>2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>

            <br> <br>
            <label for="iznos">Iznos</label>
            <input type="number" name="iznos" class="form-control">
            <input type="submit" name="submit" value="Gotovo" class="form-control mb-4 btn-primary forma mb-5">

        </form>

    </div>
</div>

<?php endif; ?>