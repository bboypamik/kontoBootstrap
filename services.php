<?php
$boxes = array(

    array(
        'title' => 'Finansijsko knjigovodstvo',
        'icon' => 'fas fa-chart-bar',
        'text' => 'Stalna i tekuća sredstva, troškovi, obračun plata, kapital, prihodi, obračun finansijskog rezultata.'
    ),
    array(
        'title' => 'Materijalno knjigovodstvo',
        'icon' => 'fab fa-wpforms',
        'text' => 'Ulaz-izlaz materijala, evidencija zaliha gotovih proizvoda, sitnog inventara, rezervnih dijelova.'
    ),
    array(
        'title' => 'PDV evidencije',
        'icon' => 'fab fa-trello',
        'text' => 'KUF, KIF i PDV prijave.'
    ),
    array(
        'title' => 'Blagajničko poslovanje',
        'icon' => 'fas fa-database',
        'text' => 'Naplata, isplata, blagajnički izvještaji.'
    ),
    array(
        'title' => 'Finansijski izvještaji',
        'icon' => 'fas fa-list-alt',
        'text' => 'Bilans stanja, bilans uspjeha, izvještaji o gotovinskim tokovima, izvještaji o promjenama u kapitalu i zabilješke uz finansijske izvještaje.'
    ),
    array(
        'title' => 'Knjigovodsveni konsulting',
        'icon' => 'fas fa-comment',
        'text' => 'Pružanje savjeta i pomoć klijentima u cilju postizanja što boljih rezultata.'
    ),
    array(
        'title' => 'Godišnje prijave za fizička lica',
        'icon' => 'fas fa-clipboard-list',
        'text' => 'Izrada obrasca GPD-1051 – Godišnja prijava poreza na dohodak.'
    ),
     array(
            'title' => 'odišnje prijave za obrtničke djelatnosti',
            'icon' => 'fas fa-file-alt',
            'text' => 'Izrada obrasca SPR-1053 – Specifikacija za utvrđivanje dohotka od samostalne djelatnosti.'
        )
);


?>


<div class="sivaboja">
    <div class="container pt-5 pb-5">
        <div class="row p-3">


            <?php foreach ($boxes as $box) : ?>
                <div class="col-6">
                    <div class="box p-4 mb-3">
                        <div class="row">
                            <div class="col-2 ">
                                <i class="<?php echo $box['icon'] ?>"></i>
                            </div>
                            <div class="col-10 ">
                                <h5><?php echo $box['title'] ?></h5>
                                <p><?php echo $box['text'] ?><</p>

                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>
