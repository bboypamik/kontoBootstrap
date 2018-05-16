<?php if (isset($_POST["submit"])) :?>
    <?php



    $id = $_POST["id"];
    $heading = $_POST['heading'];
    $text =    $_POST['text'];
    $picture = $_POST["picture"];

    //$sql = "INSERT INTO news (heading, picture, text,user_id) VALUES ('$heading', '$picture', '$text', 1)";
     $sql = "UPDATE news SET heading = '$heading', picture = '$picture', text = '$text' WHERE id =$id";


    if ($conn->query($sql)) {
        echo "New record created successfully";
        header('Location: index.php?stranica=listNews');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }




    ?>

<?php else: ?>

<?php

$id = $_GET["id"];
$sql = "SELECT * FROM news WHERE id = '" . $id . "'";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$vest = $statement->fetch();

?>


<div class="container">
    <h2 class="text-center pt-5">IZMENITE VEST</h2>
    <form method="post">
        <label for="naslov">NASLOV</label>
        <input type="text" name="heading" value="<?php echo $vest["heading"] ?>" class="form-control mb-2 forma">
        <input type="hidden" name="id" value="<?php echo $vest["id"] ?>">
        <label for="picture">Upload Image</label>
        <input type="text" name="picture" value="<?php echo $vest["picture"] ?>" class="form-control mb-2 forma">
        <label for="text">TEKST</label>
        <textarea cols="44" name="text" rows="10"   class="form-control mb-2 forma"><?php echo $vest["text"] ?></textarea>
        <input type="submit"  name="submit" value="IZMENI" class="form-control mb-4 btn-primary forma mb-5">
    </form>
</div>
<?php endif; ?>