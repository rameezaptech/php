<?php
session_start();

if(isset($_SESSION['useremail'])){
    session_unset();
    session_destroy();
    echo '<script>
    window.location.href="login.php";
    </script>';
}
?>
