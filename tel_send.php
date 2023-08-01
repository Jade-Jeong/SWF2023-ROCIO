<?php

                 $_POST['msg'] =
                 "[WEB3 PASS]\nNFC 정보 인증 문자입니다.\n\n951203";
                 // 메세지 내용 : euc-kr로 치환이 가능한 문자열만 사용하실 수 있습니다. (이모지 사용불가능)
                 $_POST['receiver'] = "01024426578"; // 수신번호
                 $_POST['destination'] = ''; // 수신인 %고객명% 치환
                 $_POST['sender'] ="07077551012"; // 발신번호
                 $_POST['rdate'] = ''; // 예약일자 - 20161004 : 2016-10-04일기준
                 $_POST['rtime'] = ''; // 예약시간 - 1930 : 오후 7시30분
                 $_POST['testmode_yn'] = 'N'; // Y 인경우 실제문자 전송X , 자동취소(환불) 처리
                 $_POST['subject'] = ''; //  LMS, MMS 제목 (미입력시 본문중 44Byte 또는 엔터 구분자 첫라인)
                 // $_POST['image'] = '/tmp/pic_57f358af08cf7_sms_.jpg'; // MMS 이미지 파일 위치 (저장된 경로)
                 $_POST['msg_type'] = ''; //  SMS, LMS, MMS등 메세지 타입을 지정
                 // ※ msg_type 미지정시 글자수/그림유무가 판단되어 자동변환됩니다. 단, 개행문자/특수문자등이 2Byte로 처리되어 SMS 가 LMS로 처리될 가능성이 존재하므로 반드시 msg_type을 지정하여 사용하시기 바랍니다.
                 /****************** 전송정보 설정끝 ***************/

                 include 'sms/curl_send.php';


?>
