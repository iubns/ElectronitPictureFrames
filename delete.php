<?php
    $fileName = $_POST['fileName'];
    echo unlink('./images/'.$fileName);
?>