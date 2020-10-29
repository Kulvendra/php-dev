<?php   require_once('../private/initialize.php')    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>

    <?php

        // $id = $_GET['id'];
        // $id = isset($_GET['id'])? $_GET['id']:'1';
        $id = $_GET['id'] ?? '1';
        echo h($id);
        ?>
    
    
</body>
</html>