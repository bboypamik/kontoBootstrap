<?php
/**
 * Created by PhpStorm.
 * User: miroslav
 * Date: 16.5.18.
 * Time: 09.05
 */
if(!$_SESSION['is_logged']){
    die('Niste ulogovani');
}
?>
<div class="container">

    <h1 class="m-5">DOBRODOŠLI</h1>
    <div class="row">
        <div class="col-4">

            <a class="form-control mb-4 btn-primary forma mb-5 text-center" href="index.php?stranica=newArticle">KREIRAJ VEST</a>
        </div>
        <div class="col-4">
            <a class="form-control mb-4 btn-primary forma mb-5 text-center" href="index.php?stranica=listNews">PREGLEDAJ VESTI</a>
        </div>
        <div class="col-4">
            <a class="form-control mb-4 btn-primary forma mb-5 text-center" href="index.php?stranica=pitanja">PREGLEDAJ PITANJA</a>
        </div>
    </div>
</div>
