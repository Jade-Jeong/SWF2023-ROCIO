<?php
ini_set('session.bug_compat_warn', 0);


          $dbcon = mysql_connect(DBHOST, DBID, DBPW);
            mysql_select_db(DBNAME, $dbcon);
            mysql_query("set names utf8mb4");



            try{


             $option = array(
                 // PDO::MYSQL_ATTR_FOUND_ROWS => true,
                 PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION    //에러출력 옵션 : 에러출력
             );

             $pdo = new PDO("mysql:host=$hostName;dbname=$databaseName;charset=utf8", $userName, $userPassword, $option);
            }
            catch(Exception $e) {
             echo$e->getMessage();
            }


            function quote_smart($value){
              if(get_magic_quotes_gpc()){
                $value = stripslashes($value);
              }

              if(!is_numeric($value)){
                $value = mysql_real_escape_string($value);
              }

              return $value;

            }

            function AESEncrypt($str, $key = '')
            {
                if (!$key)
                    $key = SALT;
                return base64_encode(openssl_encrypt($str, "AES-256-CBC", $key, true, str_repeat(chr(0), 16)));
            }

            function AESDecrypt($str, $key = '')
            {
                if (!$key)
                    $key = SALT;
                return openssl_decrypt(base64_decode($str), "AES-256-CBC", $key, true, str_repeat(chr(0), 16));
            }
?>
