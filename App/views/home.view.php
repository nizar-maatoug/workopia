<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h1>Home page</h1>

<?php foreach($jobs as $job): ?>
    <?php foreach($job as $key=>$value): ?>
        <?= $key.' : ' .$value.'<br/>' ?>
    <?php endforeach; ?>
<?php endforeach; ?>
    
</body>
</html>