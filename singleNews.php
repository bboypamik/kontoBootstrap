



<?php
$vest = array(
     array(
        "naslov" => "Zapad sprema sporazum: Kosovu UN, Srbiji EU?",
        "opis" => "Beograd -- Zapadne zemlje - SAD, VB, Francuska, Nemačka i Italija, sastale su se u Vašingtonu da bi razmatrale razgovore Beograda i Prištine. Kako navode mediji, politički direktori za Zapadni Balkan pet zapadnih zemalja sastali su se na konsultacijama o finalnoj fazi dijaloga Beograda i Prištine koji bi trebalo da se održi narednih meseci i da se kruniše finalnim sporazumom između strana, za koji se očekuje da rezultira normalizacijom odnosa.

Do sada se mislilo da ova normalizacija ne podrazumeva priznanje Kosova od Srbije, već samo priznavanje realnosti, odnosno dozvoljavanje učlanjenja Kosova u UN, što bi Srbiji omogućilo članstvo u EU. 

Među zapadnim diplomatama, navode mediji, već postoji usaglašenost o onome šta bi se moglo smatrati vodećim načelima. Jedno od tih načela je da je „bolje da nema nikakvog sporazuma, nego lošeg sporazuma\" između strana. 

Loš sporazum bi bio podela Kosova i nečega poput Republike Srpske na Kosovu, pišu mediji, pozivajući se na neimenovane izvore. 

Zato se, osim u Briselu, razgovori se održavaju i u drugim centrima, poput Berlina, a navodi se i da je nemačka kancelarka Angela Merkel već bila pozvala u svoj kabinet srpskog predsednika Aleksandra Vučića dva puta, kao i da se u sredu sastala sa kosovskim predsednikom Hašimom Tačijem.",
        "autor" => "IZVOR: TANJUG",
        "datum" => "PETAK, 11.05.2018. ",
        "vreme" => "10:46",
        "slika" => "https://www.b92.net/news/pics/2018/02/26/8042964215a93ffed34785795336909_v4_big.jpg"
    )
);

?>

<div class="container">
    <?php foreach ($vest as $stavka) : ?>
<h1 class="p-3"><?php echo $stavka["naslov"] ?> </h1>
<img class="pb-5" src="https://www.b92.net/news/pics/2018/02/26/8042964215a93ffed34785795336909_v4_big.jpg" alt="picture">

<p><?php echo $stavka["opis"]?></p>

    <?php endforeach; ?>

</div>
