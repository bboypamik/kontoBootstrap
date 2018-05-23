<?php
$id = $_GET['id'];

$pitanje = getOne(pitanja, $id);

?>
<div class="container">
<h2 class="text-center mb-5"><?php echo $pitanje['ime'] ?></h2>

    <p><?php echo $pitanje['pitanje'] ?></p>


</div>
