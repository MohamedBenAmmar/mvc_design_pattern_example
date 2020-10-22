<?php
if (isset($_SESSION['user'])) {
    if (isset($_GET['children'])) {
        if ($_GET['children'] == '') {
            include 'views/indexView.php';
        }
    }
}
else {
    include 'views/login.php';
}
