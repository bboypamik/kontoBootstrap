



<?php

$id = $_GET["id"];
$sql = "SELECT * FROM news WHERE id = '" . $id . "'";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$vest = $statement->fetch();

?>

<div class="container">
<h1 class="p-3"><?php echo $vest["heading"] ?> </h1>
<img class="pb-5" src="<?php echo $vest["picture"] ?>" alt="picture">

<p><?php echo $vest["text"]?></p>
</div>

<img src="" alt="">