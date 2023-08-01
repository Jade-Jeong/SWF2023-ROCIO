<?php
    header("Content-Type:application/json");
    session_start();
include 'db_connect.php';

        // if(!isset($_POST['is_ajax'])) exit;
        if(!isset($_POST['user_email'])) exit;
        if(!isset($_POST['user_pw'])) exit;
        $is_ajax=$_POST['is_ajax'];

        $user_email = $_POST['user_email'];
        $user_pw = $_POST['user_pw'];



        $pwd = md5($user_pw);

        date_default_timezone_set("Asia/Seoul");
        $set_date=date("Y.m.d H:i:s", time());
        $set_day=date("m.d", time());
        $set_time=date("H:i:s", time());
        $tag_finish_date=date("Y.m.d H:i", time());


            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }


    $stmt = $pdo->prepare("SELECT * FROM member WHERE email=:email and pw =:pw");
    $stmt->bindparam(':email', $user_email);
    $stmt->bindparam(':pw', $pwd);
    $stmt->execute();


    $arr = $stmt->fetch();



//     $query = "SELECT
//     A.*
//     FROM
//     member A
//     WHERE
//     A.email = '$user_email'
//     and A.pw = '$pwd'
//     LIMIT 1";
//
// ;


$login_type = 0;

// $result=mysql_query($query) or die (mysql_error()); // 쿼리문을 실행 결과
//
//    if(mysql_num_rows($result)){
//         $arr = mysql_fetch_array($result);
//
//
//         // $sql2 = "INSERT INTO attendance_log(user_idx,user_email,chk_day,chk_time,set_date,ip_address,memo)
//         // VALUES('$arr[idx]','$arr[email]','{$set_day}','{$set_time}','{$set_date}','{$ip}','{$memo}'); ";
//         // $result2 = mysql_query($sql2, $dbcon);
//
//
//         }


if($arr[pw] != $pwd) exit;


        $_SESSION['email']= $arr[email];
        $_SESSION['user_idx']= $arr[idx];
        $_SESSION['user_code']= $arr[user_code];
        $_SESSION['user_account']= $arr[account];
        $_SESSION['user_approve_flag']= $arr[approve_flag];
        $_SESSION['user_offer_flag']= $arr[offer_flag];



        $o = array();

        $t = new stdClass();
        $t->result = "success";
        $t->use_flag = $arr[use_flag];



        $o[] = $t;
        unset($t);


echo json_encode($o);
?>
