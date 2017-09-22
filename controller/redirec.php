
<?php

session_start();

if ($_SESSION['cargo'] == 1) {
    header('location: ../view/root/index.php');
} else if ($_SESSION['cargo'] == 2) {
    header('location: ../view/user1/index.php');
    
} else if ($_SESSION['cargo'] == 3) {
    echo 'view/user2/index.php';
    
} else if ($_SESSION['cargo'] == 4) {
    echo 'view/user3/index.php';
}
?>