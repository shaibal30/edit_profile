<?php
session_start();
?>
<?php
if(isset($_SESSION['user_id'])){

    echo $_SESSION['user_id'];
}
if(isset($_SESSION['user_name'])){

    echo $_SESSION['user_name'];
}
?>
