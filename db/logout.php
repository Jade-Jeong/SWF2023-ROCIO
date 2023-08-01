<?php
    session_start();


    unset($_SESSION['email']);
    unset($_SESSION['user_code']);
    unset($_SESSION['user_idx']);
    session_destroy();
    session_start();


                             setcookie("userId");
                             setcookie("userPw");

                              // echo '<script>localStorage.removeItem("usrIds");
                              // localStorage.removeItem("usrPws");</script>';

                              // echo "success";

                         $url = "../index?startType=logout";
                         echo "<meta http-equiv='refresh' content='0; url=$url'>";


?>
