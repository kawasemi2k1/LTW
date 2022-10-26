<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form example</title>
</head>
<body>

    <?php
    $sent = isset($_GET['sent']) && $_GET['sent'] = 1;

    if($sent){
        if($_GET['name'] == '')
            $errors[] = 'Invalid name';
        if($_GET['address'] == '')
            $errors[] = 'Invalid adress';
        if(count($errors) > 0){
            foreach($errors as $e)
                echo "<li>$e</li>";
            echo '</ul';
        } else {
            echo '<p>Name: '.$_GET['name'].'</p>';

            echo '<p>Address: '.$_GET['address'].'</p>';
        }

    }

    if(!$sent || count($errors) > 0){
    ?>
    <form action = "process.php" method ="GET">

        <p>
            Name:
            <input type = "text" name = "name" value = "<?=@ $_GET['name'] ??''?>">
        </p>
        <p>
            Address:
            <input type = "text" name = "address" value="<?=$_GET['password']??''?>">
        </p>
        <button type = "submit">Gửi</button>
    </form>
</body>
</html>
<?php }?>