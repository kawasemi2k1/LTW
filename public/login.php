<?php
if(isset($_POST['username']))
    echo '<p>Username: '.$_POST['username'].'</p>';
else echo'<p>Error: Please enter your username</p';

if(isset($_POST['password']))
    echo '<p>Password: '.$_POST['password'].'</p>';
else echo'<p>Error: Please enter your password</p';

?>
