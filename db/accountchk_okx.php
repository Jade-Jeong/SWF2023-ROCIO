<?php
header("Content-Type:application/json");
session_start();
include 'db_connect.php';



   if(!isset($_POST['chkAccount'])) exit;



   date_default_timezone_set("Asia/Seoul");
  $set_date=date("Y.m.d H:i:s", time());
  $set_day=date("m.d", time());
 $set_time=date("H:i:s", time());

        $account1 = $_POST['chkAccount'];
        $user_code = $_POST['my_code'];


        $sql = "INSERT INTO member(account,user_code,set_date,use_flag)
        VALUES('$account1','$user_code','$set_date',1); ";
        $result = mysql_query($sql, $dbcon);

        $o = array();
             if($result){


              $t = new stdClass();
               $t->result = "success";
              $o[] = $t;
              unset($t);
             }else{

               $t = new stdClass();
               $t->result = "fail";

               $o[] = $t;
               unset($t);

             }



        // $_SESSION['user_account'] = $_POST['chkAccount'];

//         $query = "SELECT * FROM member
//         WHERE account = '$account1'  LIMIT 1;";
//
//         $que = mysql_query($query);
//         $arr = mysql_fetch_array($que);
//         $row = mysql_num_rows($que);
//
//         if($row == 0){//있는 지갑이 아니면
//
//
//
// //           $sql = "INSERT INTO member(account,user_code,set_date)
// //           VALUES(?,?,?)";
// //           $st = $pdo->prepare($sql);
// //           $st->bindparam(1, $account);
// //           $st->bindparam(2, $user_code);
// //           $st->bindparam(3, $set_date);
// //
// //           $st->execute();
// //
// //           $count = $st->rowCount();
// //
// //           if($count>0){
// //             $o = array();
// //             $t = new stdClass();
// //             $t->result = "success";
// //             $o[] = $t;
// //             unset($t);
// //
// //           }else{
// // $o = array();
// //             $t = new stdClass();
// //             $t->result = "fail";
// //             $o[] = $t;
// //             unset($t);
// //
// //           // echo "fail ";
// //           }
//
//
//             // echo "success";
//         }else{
//           $o = array();
//           $t = new stdClass();
//           $t->result = "used";
//           $o[] = $t;
//           unset($t);
//
//           $_SESSION['user_idx']= $arr[idx];
//           $_SESSION['user_code']= $arr[user_code];
//           $_SESSION['user_account']= $arr[account];
//
//
//
//         }


  echo json_encode($o);

?>
