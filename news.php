
<?php

$sql = "SELECT * FROM news";

$statement = $conn->prepare($sql);

$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

$vesti = $statement->fetchAll();

function skracivanje($opis){
    return substr($opis,0,80 ).'...';

$id = $_GET["id"];
}


?>
<div class="row">
    <div class="col-2 offset-4 form-control mb-5 mt-5 btn-primary forma ">
        <a class="p-5 text-light " href="index.php?stranica=newArticle">  KREIRAJ VEST</a>
    </div>
</div>


<div class="container">
    <div class="row">
    <?php foreach ($vesti as $vest) : ?>
    <div class="col-7 pb-5">
    <h2 class="pb-3"><a href="index.php?stranica=singleNews&id=<?php echo $vest["id"] ?>"><?php echo $vest["heading"] ?></a></h2>
    <h5> <?php echo skracivanje($vest["text"]) ?> </h5>
    <p><?php echo $vest["autor"] ?> <?php echo $vest["datum"] ?> <?php echo $vest["vreme"] ?> </p>
    <img src="<?php echo $vest["picture"] ?>" alt="slika">
    </div>
    <?php endforeach; ?>
    </div>

</div>

<div class="row">
    <div class="col-2 offset-4 form-control mb-5 btn-primary forma ">
        <a class="p-5 text-light " href="index.php?stranica=newArticle">  KREIRAJ VEST</a>
    </div>
</div>
