<?php if (isset($_POST["submit"])) : ?>

<?php
$mesec = $_POST['mesec'];
$iznos = $_POST['iznos'];
$id = $_GET['id'];

$sql = "INSERT INTO placanje (mesec, din, klijent_id) VALUES ('$mesec','$iznos', '$id')";
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



?>

<?php else: ?>

<div class="row m-5">
    <div class="col-2">
        <form method="post">
            <label for="mesec">Za mesec</label>
            <input type="text" name="mesec" class="form-control">
            <label for="iznos">Iznos</label>
            <input type="number" name="iznos" class="form-control">
            <input type="submit" name="submit" value="Gotovo" class="form-control mb-4 btn-primary forma mb-5">

        </form>

    </div>
</div>

<?php endif; ?>