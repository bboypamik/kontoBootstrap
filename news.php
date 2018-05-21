<?php


$sql = "SELECT news.id, heading, picture, text, username FROM news INNER JOIN users ON users.id = news.user_id";
$statement = $conn->prepare($sql);
$statement->execute();

if ($statement->errorCode() == 0) {
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $vesti = $statement->fetchAll();
} else {
    $errors = $statement->errorInfo();
    echo $errors[2] ;
}


function skracivanje($opis)
{
    return substr($opis, 0, 80) . '...';
    $id = $_GET["id"];
}


?>


<div class="container">
    <div class="row">
        <?php foreach ($vesti as $vest) : ?>
            <div class="col-7 pb-5">
                <h2 class="pb-3"><a
                            href="index.php?stranica=singleNews&id=<?php echo $vest["id"] ?>"><?php echo $vest["heading"] ?></a>
                </h2>
                <h5> <?php echo skracivanje($vest["text"]) ?> </h5>
                <p><?php echo $vest["username"] ?><?php echo $vest["datum"] ?><?php echo $vest["vreme"] ?> </p>
                <img src="uploads/<?php echo $vest["picture"] ?>" alt="slika">
            </div>
        <?php endforeach; ?>
    </div>

</div>


