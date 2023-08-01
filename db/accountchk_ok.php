<?php
header("Content-Type:application/json");
session_start();
include 'db_connect.php';



   if(!isset($_POST['chkAccount'])) exit;



   date_default_timezone_set("Asia/Seoul");
  $set_date=date("Y.m.d H:i:s", time());
  $set_day=date("m.d", time());
 $set_time=date("H:i:s", time());

        $account = $_POST['chkAccount'];
        $userIdx = $_SESSION['user_idx'];
        $user_code = $_POST['my_code'];



        $query = "SELECT * FROM member
        WHERE account = '$account'  LIMIT 1;";

        $que = mysql_query($query);
        $arr = mysql_fetch_array($que);
        $row = mysql_num_rows($que);

        if($row == 0){//있는 지갑이 아니면
          $sql2 = "INSERT INTO member(account,user_code,set_date)
          VALUES(?,?,?)";
          $st = $pdo->prepare($sql2);
          $st->bindparam(1, $account);
          $st->bindparam(2, $user_code);
          $st->bindparam(3, $set_date);


          $st->execute();
          $count = $st->rowCount();
          if($count>0){

            $query = "SELECT * FROM member
            WHERE account = '$account'  LIMIT 1;";

            $que = mysql_query($query);
            $arr = mysql_fetch_array($que);
            $row = mysql_num_rows($que);


            $t = new stdClass();
            $t->result = "success";
            $o[] = $t;
            unset($t);
                $_SESSION['user_idx'] = $arr[idx];
                  $_SESSION['user_account'] = $_POST['chkAccount'];

          }else{
            $_SESSION['user_account'] = "";
          // echo "fail ";
          }
        }else{
          $t = new stdClass();
          $t->result = "used";
          $o[] = $t;
          unset($t);

                $_SESSION['user_idx'] = $arr[idx];
                $_SESSION['user_account'] = $_POST['chkAccount'];
        }


  echo json_encode($o);

?>
