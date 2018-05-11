
<?php
$vesti = array(
    array(
        "naslov" => "Zapad sprema sporazum: Kosovu UN, Srbiji EU?",
        "opis" => "Kako navode mediji, politički direktori za Zapadni Balkan pet zapadnih zemalja sastali su se na konsultacijama o finalnoj fazi dijaloga Beograda i Prištine koji bi trebalo da se održi narednih meseci i da se kruniše finalnim sporazumom između strana, za koji se očekuje da rezultira normalizacijom odnosa.

Do sada se mislilo da ova normalizacija ne podrazumeva priznanje Kosova od Srbije, već samo priznavanje realnosti, odnosno dozvoljavanje učlanjenja Kosova u UN, što bi Srbiji omogućilo članstvo u EU. 

Među zapadnim diplomatama, navode mediji, već postoji usaglašenost o onome šta bi se moglo smatrati vodećim načelima. Jedno od tih načela je da je „bolje da nema nikakvog sporazuma, nego lošeg sporazuma\" između strana. 

Loš sporazum bi bio podela Kosova i nečega poput Republike Srpske na Kosovu, pišu mediji, pozivajući se na neimenovane izvore. 

Zato se, osim u Briselu, razgovori se održavaju i u drugim centrima, poput Berlina, a navodi se i da je nemačka kancelarka Angela Merkel već bila pozvala u svoj kabinet srpskog predsednika Aleksandra Vučića dva puta, kao i da se u sredu sastala sa kosovskim predsednikom Hašimom Tačijem.",
        "autor" => "IZVOR: TANJUG",
        "datum" => "PETAK, 11.05.2018. ",
        "vreme" => "10:46",
        "slika" => "https://www.b92.net/news/pics/2018/02/26/8042964215a93ffed34785795336909_v4_big.jpg"
    ),
    array(
        "naslov" => "Novosti: Šta je Putin rekao Vučiću o NATO",
        "opis" => "Predsednik Rusije Vladimir Putin rekao je predsedniku Srbije Aleksandru Vučiću tokom susreta u Moskvi da su mnogi govorili da Vučić tajno uvodi Srbiju u NATO. To pišu \"Večernje novosti\" u izdanju za petak i dodaju da je Putin rekao još i da su kasnije ti isti koji su govorili o Vučiću učlanili svoje države u Alijansu, i da je jedino srpski predsednik održao reč i to nije uradio.

U tekstu se navodi da će lider Rusije nedvosmisleno podržati Srbiju i Vučića lično u diplomatskoj borbi za Kosovo i Metohiju ali i kod svih ostalih tema ključnih za bezbednost regiona. 

Kako navode \"Novosti\", sa ovom kapitalnom garancijom predsednik Srbije se vratio iz Moskve gde mu je ukazana velika čast i gostoprimstvo i dat jasan i odlučan signal: za Rusiju je naša zemlja ključna u ovom delu Evrope. 

O otvorenom odnosu dvojice državnika najbolje svedoči i iskreno priznanje koje je, tokom neformalnih razgovora, predsednik najveće države sveta izneo Vučiću u vezi sa NATO, piše list. 

Posle susreta u Kremlju jasno je da će Moskva aktivno paratiti rezultate razgovora Beograda i Prištine i uticaj različitih međunarodnih faktora na dijalog, u prvom redu sponzora nezavisnosti Kosova, navodi se u tekstu uz konstataciju da je bez saglasnosti Rusije i Srbije nemoguće doći do pravednog rešenja za Kosovo.",
        "autor" => "IZVOR: TANJUG",
        "datum" => "ČETVRTAK, 10.05.2018.",
        "vreme" => "23:09",
        "slika" => "https://www.b92.net/news/pics/2018/05/09/8842542295af3442a668e5326165540_v4_big.jpg"
    ),
    array(
        "naslov" => "Bane nije problem, Matija propušta SP, Kostarika odlučuje sudbinu",
        "opis" => "Sportski direktor fudbalske reprezentacije Srbije Goran Bunjevčević očekuje da meč sa Kostarikom na startu Mundijala odredi sudbinu naše reprezenacije u Rusiji. Srbija će osim sa Kostarikom igrati u grupi još sa Švajcarskom i Brazilom, ali će prvi meč sa timom iz Centralne amerike 17. juna značajno usmeriti tok turnira za \"Orlove\".

Iz tog razloga FSS je za pripremne mečeve pred Mundijal dogovorio test utakmice sa Čileom i Bolivijom. 

\"Koliko god se mi trudili da rasporedimo teret na sve tri utakmice taj meč sa Kostarikom će biti osnova celog SP. Pozitivan rezultat bi dao dodatni elan i motiv našim igračima za naredne utakmice. Zato smo se opredelili da rivali u te dve utakmice pred SP budu Južnoamerikanci. Mislim da imaju sličan stil kao Kostarika. Biće teško, obično su tvrde i čvrste utakmice sa Čileom i Bolivojom, koji se nisu kvalifikovali na SP, oni su često agresivni na takvim utakmicama, a dosta je bitno za naše igrače da se naviknu na stil južnoameričkih reprezentacija. Naravno i da ne potcene Kostariku koja je na prošlom SP ostvarila neverovatan rezultat (četvrtfinale u Brazilu 2014, prim. aut). Mislim da će ta utakmica odrediti sudbinu reprezentacije\", rekao je Bunjevčević za 02. ",
        "autor" => "IZVOR: B92",
        "datum" => "PETAK, 11.05.2018.",
        "vreme" => "11:25",
        "slika" => "https://www.b92.net/news/pics/2018/05/11/9678541015af56142c7cae355122674_w640.JPG"
    ),
);

function skracivanje($opis){
    return substr($opis,0,80 ).'...';
}


?>



<div class="container">
    <div class="row">
    <?php foreach ($vesti as $vest) : ?>
    <div class="col-7 pb-5">
    <h2 class="pb-3"><a href="index.php?stranica=singleNews&id=1"><?php echo $vest["naslov"] ?></a></h2>
    <h5> <?php echo skracivanje($vest["opis"]) ?> </h5>
    <p><?php echo $vest["autor"] ?> <?php echo $vest["datum"] ?> <?php echo $vest["vreme"] ?> </p>
    <img src="<?php echo $vest["slika"] ?>" alt="slika">
    </div>
    <?php endforeach; ?>
    </div>
</div>