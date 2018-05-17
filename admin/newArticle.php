<?php if (isset($_POST["submit"])) :?>




    <?php
$heading = $_POST['heading'];
$text =    $_POST['text'];
$picture = $_POST["picture"];

    $sql = "INSERT INTO news (heading, picture, text,) VALUES ('$heading', '$picture', '$text')";

    if ($conn->query($sql)) {
        echo "New record created successfully";
        header('Location: index.php?stranica=listNews');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>


<?php else: ?>
    <div class="container">
        <h2 class="text-center pt-5">NAPIŠITE VEST</h2>

        <form method="post">
            <label for="naslov">NASLOV</label>
            <input type="text" name="heading" class="form-control mb-2 forma">

            <label for="picture">Upload Image</label>
            <input type="text" name="picture" class="form-control mb-2 forma">
            <label for="text">TEKST</label>
            <textarea cols="44" name="text" rows="10" class="form-control mb-2 forma"></textarea>
            <input type="submit"  name="submit" value="Kreiraj" class="form-control mb-4 btn-primary forma mb-5">
        </form>
    </div>
<?php endif; ?>


