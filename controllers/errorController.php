<?php
    echo "<script>alert('".$_SESSION["error"]."')</script>";
    unset($_SESSION["error"]);
?>
