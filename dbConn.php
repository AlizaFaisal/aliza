<?php
$conn= mysqli_connect('localhost','root','', 'aliza');
if(mysqli_connect_errno()){
    echo 'Database connect failed'. mysqli_connect_error($conn);
}

?>