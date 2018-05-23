<?php

$vesti = getAll('news', 'users', 'users.id = news.user_id');


function skracivanje($opis)
{
    return substr($opis, 0, 80) . '...';
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


