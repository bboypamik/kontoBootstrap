<?php

$vesti = getAll(news);

?>

<table class="table table-striped">
<thead>
    <tr>
        <td>id</td>
        <td>heading</td>
        <td>edit</td>
        <td>delete</td>
    </tr>
</thead>
    <?php foreach ($vesti as $vest) : ?>
    <tbody>

    <td><?php echo $vest["id"] ?></td>
    <td><a href="../index.php?stranica=singleNews&id=<?php echo $vest["id"] ?>"><?php echo $vest["heading"] ?></a></td>
    <td><a href="index.php?stranica=editNews&id=<?php echo $vest["id"] ?>"><i class="fas fa-pencil-alt"></i></a></td>
    <td><a onclick="myFunction()" href="#"><i class="fas fa-trash-alt"></i></a></td>



    </tbody>

<?php endforeach; ?>
</table>


<script>
    function myFunction() {
        var conf = confirm("Da li želite da obrišete vest?");
        if(conf == true){
            window.location.replace('index.php?stranica=deleteNews&id=<?php echo $vest["id"] ?>');
        }

    }
</script>