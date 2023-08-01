<?php
header("Content-Type:application/json");
session_start();
include 'db_connect.php';

//유효성 검사
if(!isset($_POST['user_account'])) exit;



$is_ajax=$_POST['is_ajax'];


if($is_ajax==1){
  $user_account= quote_smart($_POST['user_account']);
}else{
  exit;
}

                          date_default_timezone_set("Asia/Seoul");
                         $set_date=date("Y-m-d H:i:s", time());
                         $set_day=date("m.d", time());
                        $set_time=date("H:i:s", time());



                            $query = "SELECT
                            A.*
                            FROM
                            member A
                            WHERE
                            A.account = '$user_account'
                            LIMIT 1";

                        ;


                        $login_type = 0;

                        $result=mysql_query($query) or die (mysql_error()); // 쿼리문을 실행 결과

                           if(mysql_num_rows($result)){
                                $arr = mysql_fetch_array($result);


                                $_SESSION['user_idx']= $arr[idx];
                                $_SESSION['user_code']= $arr[user_code];
                                $_SESSION['user_account']= $arr[account];



                                $o = array();

                                $t = new stdClass();
                                $t->result = "success";
                                $t->use_flag = $arr[use_flag];



                                $o[] = $t;
                                unset($t);





                            }else{
                              $sql = "INSERT INTO member(account,user_code,set_date)
                              VALUES(?,?,?)";
                              $st = $pdo->prepare($sql);
                              $st->bindparam(1, $user_account);
                              $st->bindparam(2, $user_code);
                              $st->bindparam(3, $set_date);

                              $st->execute();

                              $counts = $st->rowCount();

                              if($counts>0){
                                $o = array();

                                $t = new stdClass();
                                $t->result = "success";

                                $o[] = $t;
                                unset($t);

                              }else{
                                $o = array();

                                $t = new stdClass();
                                $t->result = "fail";


                                $o[] = $t;
                                unset($t);
                              }
                            }




              echo json_encode($o);












?>
