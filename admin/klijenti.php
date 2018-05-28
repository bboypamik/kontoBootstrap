<?php
$klijenti = getAll('klijenti');
?>



<div class="row">
    <div class="col-1 m-2">
<a class="form-control btn-primary forma" href="index.php?stranica=noviKlijent">Dodaj novog klijenta</a>
    </div>
    <div class="col-1 m-2">
        <a class="form-control btn-primary forma" href="index.php?stranica=klijentiIzvestaj">Izveštaj</a>
    </div>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <td>id</td>
        <td>Ime</td>



    </tr>
    </thead>
    <?php foreach ($klijenti as $klijent) : ?>

        <tbody>

        <td><?php echo $klijent["id"] ?></td>
        <td><a href="index.php?stranica=klijentInformations&id=<?php echo $klijent["id"] ?>"><?php echo $klijent["ime_firme"]?></a></td>
        <td><a href="index.php?stranica=editKlijent&id=<?php echo $klijent["id"] ?>"><i class="fas fa-pencil-alt"></i></a></td>
        <td><a onclick="myFunction()" href="#"><i class="fas fa-trash-alt"></i></a></td>

        </tbody>

    <?php endforeach; ?>
</table>

<script>
    function myFunction() {
        var conf = confirm("Da li želite da obrišete klijenta?");
        if(conf == true){
            window.location.replace('index.php?stranica=deleteKlijent&id=<?php echo $klijent["id"] ?>');
        }

    }
</script>