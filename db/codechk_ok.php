<?php
include 'db_connect.php';


        if(!isset($_POST['chkId'])) exit;


        $code_chk = $_POST['chkId'];




    $query = "SELECT * FROM member
    WHERE user_code = '$code_chk'  LIMIT 1;";

    $que = mysql_query($query);
    $arr = mysql_fetch_array($que);
    $row = mysql_num_rows($que);

    if($row == 0){
        echo "success";
    }

?>
