
<?php

    $conn = mysqli_connect('localhost', 'root', '', 'pordwress');

    if(mysqli_connect_errno()){
        echo 'failed' . mysqli_connect_errno();
    }
    ?>