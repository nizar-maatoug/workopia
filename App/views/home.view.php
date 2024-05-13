
<?php
include('../App/views/partials/header.view.php');

include('../App/views/partials/menu.view.php');

?>

<h1>Home page</h1>

<?php foreach($jobs as $job): ?>
    <?php foreach($job as $key=>$value): ?>
        <?= $key.' : ' .$value.'<br/>' ?>
    <?php endforeach; ?>
<?php endforeach; ?>
    


<?php
include('../App/views/partials/footer.view.php');



?>


