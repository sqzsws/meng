<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <?php foreach ($static as $key => $value): ?>
        <?php echo $value ?>
    <?php endforeach ?>
    <link rel="stylesheet" type="text/css" href="<?php echo STATIC_PATH."admin/css/common.css" ?>">
    <script type="text/javascript" src="<?php echo STATIC_PATH."admin/js/jquery2.1.4.js" ?>"></script>
</head>
<body>