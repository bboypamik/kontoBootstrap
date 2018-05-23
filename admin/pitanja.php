<?php
$pitanja = getAll('pitanja');
?>

<table class="table table-striped">
    <thead>
    <tr>
        <td>ime</td>
        <td>naslov</td>

    </tr>
    </thead>
    <?php foreach ($pitanja as $pitanje) : ?>
        <tbody>

        <td><?php echo $pitanje["ime"] ?></td>
        <td><a href="index.php?stranica=pitanje&id=<?php echo $pitanje['id']?>"><?php echo $pitanje["naslov"] ?></a></td>
        <td><a onclick="myFunction()" href="#"><i class="fas fa-trash-alt"></i></a></td>





        </tbody>

    <?php endforeach; ?>
</table>

<script>
    function myFunction() {
        var conf = confirm("obrisi pitanje?");
        if(conf == true){
            window.location.replace('index.php?stranica=deletePitanje&id=<?php echo $pitanje["id"] ?>');
        }

    }
</script>