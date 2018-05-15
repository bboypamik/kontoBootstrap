



<?php

$id = $_GET["id"];
$sql = "SELECT * FROM news WHERE id = '" . $id . "'";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$vest = $statement->fetchAll();

?>

<div class="container">
    <?php foreach ($vest as $stavka) : ?>
<h1 class="p-3"><?php echo $stavka["heading"] ?> </h1>
<img class="pb-5" src="<?php echo $stavka["picture"] ?>" alt="picture">

<p><?php echo $stavka["text"]?></p>

    <?php endforeach; ?>

</div>

<img src="" alt="">