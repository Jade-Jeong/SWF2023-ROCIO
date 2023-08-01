var lang;
function setLanguage(value) {
 // alert(value);
  lang = value;
  // lang = $("#id-lang").attr("data-lang");
  // alert(lang);
  console.log("lang3 :" +lang);

  $("#id-lang").val(lang).prop("selected", true);

  // if(lang=="ko"){
  //   $("#id-lang").attr("data-lang","cn");
  //   $("#id-lang").html("<span>Kor</span>");
  //   $("#id-lang-title").html("Kor");
  //   lang = "cn";
  // }else if(lang=="en"){
  //   $("#id-lang").attr("data-lang","ko");
  //   $("#id-lang").html("<span>Eng</span>");
  //   $("#id-lang-title").html("Eng");
  //   lang = "ko";
  // }else if(lang=="cn"){
  //   $("#id-lang").attr("data-lang","ko");
  //   $("#id-lang").html("<span>CN</span>");
  //   $("#id-lang-title").html("CN");
  //   lang = "ko";
  // }

  localStorage.setItem('langs', lang);

  $('[data-langNum]').each(function() {
    var $this = $(this);
    $this.html($.lang[lang][$this.data('langnum')]);
  });

setTimeout(function(){
  location.reload();
},50);

}

function currentLang(){
  // if()
  // lang = $("#id-lang").attr("data-lang");
  lang = localStorage.getItem('langs');
  console.log("lang :" +lang);
  if(lang==null){
    lang = "en";
  }
  // alert(lang);
  $("#id-lang").val(lang).prop("selected", true);

// $("#id-lang option:eq(2)").attr("selected", true);

  	// var sel = document.getElementById("id-lang");
  	// for(var i=0; i<sel.length; i++){
    //
  	// 	if(sel[i].value==lang){
  	// 		sel[i].selected = true;
    //     console.log(sel[i].value);
  	// 	}
  	// }



  // if(lang=="ko"){
  //   $("#id-lang").attr("data-lang","ko");
  //   $("#id-lang").html("<span>CN</span>");
  //   $("#id-lang-title").html("CN");
  // }else if(lang=="en"){
  //   $("#id-lang").attr("data-lang","en");
  //   $("#id-lang").html("<span>Kor</span>");
  //   $("#id-lang-title").html("Kor");
  // }else if(lang=="cn"){
  //   $("#id-lang").attr("data-lang","cn");
  //   $("#id-lang").html("<span>Kor</span>");
  //   $("#id-lang-title").html("Kor");
  // }



  console.log("lang2 :" +lang);
  $('[data-langNum]').each(function() {
    var $this = $(this);
    $this.html($.lang[lang][$this.data('langnum')]);
  });
}

  var rand_num;
  var msg_on = true;
  var email_chk = false,email_confirm_ok = false;
  var loginChk = 0;
  var email_ajax=0;
  var my_code;
jQuery(document).ready(function($) {
  // addJavascript('assets/js/cookies.js');
    // ethprice();
  // currentLang();
  // server_data();
  // sleep(3000);
  // ethprice();

// setTimeout(function(){ethprice();},100);


//로그인 확인
if(login_chk){
  $('#id_wallet').css("display","none");
  $('#id_mypage').css("display","");
}




  var n_rand= Math.floor((Math.random() * 9));
   var n_rand2= Math.floor((Math.random() * 9));
   var rand= Math.floor((Math.random() * 25));
   var rand2= Math.floor((Math.random() * 25));
   var rand3= Math.floor((Math.random() * 25));
   var alpa= new Array();
   alpa[0]="A";alpa[1]="B";alpa[2]="C";alpa[3]="D";alpa[4]="E";alpa[5]="F";alpa[6]="G";alpa[7]="H";alpa[8]="I";alpa[9]="J";alpa[10]="K";alpa[11]="L";alpa[12]="M";
   alpa[13]="N";alpa[14]="O";alpa[15]="P";alpa[16]="Q";alpa[17]="R";alpa[18]="S";alpa[19]="T";alpa[20]="U";alpa[21]="W";alpa[22]="X";alpa[23]="Y";alpa[24]="Z";

   var code_names = alpa[rand]+alpa[rand2]+alpa[rand3]+n_rand+n_rand2;
   $.ajax({
      type:"POST",
      async : true, //true, false
      data : {chkCode: code_names},
      url: 'db/codechk_ok.php',
      success: function(response) {
                      if(response == 'success') {
                             $("#id-recom").val(code_names);
                             my_code = code_names;
                      }else{
                           code_names = alpa[rand]+n_rand+alpa[rand2]+alpa[rand3]+n_rand2;
                           $("#id-recom").val(code_names);
                           my_code = code_names;
                      }

                      // alert($("#id-recom").val());
      },
      error : function(xhr, status, error) {
              }
      });

  //이메일 체크
  $("#id-join-email").blur(function() {
    if(email_ajax==0){
      var var_info = $("#id-join-email").val();
      if (var_info != null && var_info != "") {
        email_ajax=1;
              $.ajax({
              type:"POST",
              async : true, //true, false
              data : {chkEmail: var_info},
              url: 'db/emailchk_ok.php',
              success: function(response) {
                              if(response == 'success') {
                                $("#message_e").html("<span data-langNum='join_1' style='color:#3c763d;'></span>");
                                      // $("#message_e").html("<span style='color:#3c763d;'>등록 가능한 이메일입니다.</span>");
                                        $("#id-join-send").removeClass("btn-custom-gray").addClass("btn-primary");
                                        email_chk = true;
                                        msg_on = true;
                                        // $("#id-join-send").click();
                              } else {
                                  $("#message_e").html("<span data-langNum='join_2' style='color:#a94442'></span>");

                                      // $("#message_e").html("<span style='color:#a94442'>이미 등록된 이메일입니다.</span>");
                                        $("#id-join-email").closest('.form-group').addClass('has-error').removeClass('has-success');
                                      $("#id-join-email").val("");
                                      $("#id-join-email").focus();
                                      msg_on = true;
                                        email_chk = false;
                              }
                              currentLang();
                              email_ajax = 0;
              },
              error : function(xhr, status, error) {

                      }
              });
      }
    }

  });

  $("#id-join-email").on('keydown input', function(){
  if(msg_on){
    $("#message_e").html("");
    msg_on = false;
  }
  });

  //0419 추가 비번 재설정
  $("#id-forget-email").blur(function() {
    if(email_ajax==0){
      var var_info = $("#id-forget-email").val();
      if (var_info != null && var_info != "") {
        email_ajax=1;
              $.ajax({
              type:"POST",
              async : true, //true, false
              data : {chkEmail: var_info},
              url: 'db/emailchk_ok.php',
              success: function(response) {
                              if(response == 'success') {//존재하지 않는 계정
                                // $("#forget_message_e").html("<span data-langNum='join_2' style='color:#a94442'></span>");

                                $("#forget_message_e").html("<span data-langNum='register_13' style='color:#a94442'>This is an unsigned email.</span>");
                                    // $("#forget_message_e").html("<span style='color:#a94442'>가입되지 않은 이메일입니다.</span>");
                                      $("#id-forget-email").closest('.form-group').addClass('has-error').removeClass('has-success');
                                    $("#id-forget-email").val("");
                                    $("#id-forget-email").focus();
                                    msg_on = true;
                                      email_chk = false;
                              } else {//존재하는 계정
                                // $("#forget_message_e").html("<span data-langNum='join_1' style='color:#3c763d;'></span>");
                                      // $("#forget_message_e").html("<span style='color:#3c763d;'>등록 가능한 이메일입니다.</span>");
                                        email_chk = true;
                                        msg_on = true;

                              }
                              currentLang();
                              email_ajax = 0;
              },
              error : function(xhr, status, error) {

                      }
              });
      }
    }

  });
  $("#id-forget-email").on('keydown input', function(){
  if(msg_on){
    $("#forget_message_e").html("");
    msg_on = false;
  }
  });

  $("#id-forget-send").click(function() {
    if(!email_chk) return;
    $('#id-forget-validation').css("display","");
      $('#id-forget-send').css("display","none");
  var action = "db/forget_email_code.php";
  var var_info = $("#id-forget-email").val();
  if (var_info != null && var_info != "") {
      $.ajax({
      type:"POST",
      async : true,
      data : {chkEmail: var_info},
      dataType: 'json',
      url: action,
      success: function(data) {
  if(data[0].ret =="success"){
  alert_custom("code_send");
  rand_num = data[0].rand_num;

  }else{
  alert_custom("code_fail");
  }

      },
      error : function(xhr, status, error) {
        $('#id-forget-validation').css("display","none");
          $('#id-forget-send').css("display","");
              }
      });
  }

  });

  $("#id-forget-send2").click(function() {

  var var_info = $("#id-forget-email2").val();

  if(var_info == rand_num){
  alert_custom("code_success");
  $("#forget_message_e").html("<span style='color:#3c763d;'>Email Verification Completed.</span>");
  $('#id-forget-validation').css("display","none");
  $('#id-forget-send').css("display","none");
  $('#id-forget-mail-box').css("display","none");


  $('#id-new-pw-box').css("display","");
  email_confirm_ok = true;
  }else{
  alert_custom("code_failed");
  email_confirm_ok = false;
  }

  });

  var forget_pwchk="N";
  $("#id-forget-pw2").blur(function() {
   if($("#id-forget-pw1").val()=="") return;
  if ($("#id-forget-pw1").val() == $("#id-forget-pw2").val()) {
         $("#forget_message_pw").html("<span style='color:#3c763d;'>passwords match.</span>");
         forget_pwchk = "Y";
  }else{
      forget_pwchk="N";
       $("#forget_message_pw").html("<span style='color:#a94442'>does not match.</span>");
                                  $("#id-forget-pw1").val("");
                                  $("#id-forget-pw2").val("");
                                  $("#id-forget-pw1").focus();
  }
  });

  $("#id-forget-btn").click(function() {

              if(!email_confirm_ok){
                alert_custom("com_1");
                return;
              }

               if($("#id-forget-email").val()=="" || $("#id-forget-email").val()==null){
                 // alert("이메일을 입력하세요.");
                 // alert("Please enter your email.");
                 alert_custom("com_2");
                 $("#id-forget-email").focus();
                 return;
               }
               if(forget_pwchk=="N"){
                   alert_custom("com_3");
                                          $("#id-forget-pw1").val("");
                                          $("#id-forget-pw2").val("");
                                          $("#id-forget-pw1").focus();
                            return;
               }


  var email_error = false;
  var action = "db/password_modify.php";
  var form_data = {
                  user_pw: $("#id-forget-pw1").val(),
                  user_email: $("#id-forget-email").val(),
                  is_ajax: 1
  };

  $.ajax({
  type: "POST",
  url: action,
  data: form_data,
  success: function(response) {
  if(response == 'success') {

    // alert("Membership registration was successful.");
    alert_custom("register_14");
      // alert("비밀번호 재설정에 성공하였습니다.");
      location.href="index.php";
  } else {
    // alert("회원 가입에 실패하였습니다.\n잠시 후 다시 시도해 주세요.");
      // alert("Failed to sign up.");
      alert_custom("register_15");
  }
  }
  });
  return false;

  });



  $("#id-join-send").click(function() {
    if(!email_chk) return;
    $('#id-m-validation').css("display","");
      $('#id-join-send').css("display","none");
var action = "db/email_code.php";
var var_info = $("#id-join-email").val();
if (var_info != null && var_info != "") {
      $.ajax({
      type:"POST",
      async : true,
      data : {chkEmail: var_info},
      dataType: 'json',
      url: action,
      success: function(data) {
if(data[0].ret =="success"){
alert_custom("code_send");
rand_num = data[0].rand_num;

}else{
  alert_custom("code_fail");
}

      },
      error : function(xhr, status, error) {
        $('#id-m-validation').css("display","none");
          $('#id-join-send').css("display","");
              }
      });
}

});


$("#id-join-send2").click(function() {

var var_info = $("#id-join-email2").val();

if(var_info == rand_num){
alert_custom("code_success");
$("#message_e").html("<span style='color:#3c763d;'>Email Verification Completed.</span>");
$('#id-m-validation').css("display","none");
$('#id-join-send').css("display","none");
email_confirm_ok = true;
}else{
alert_custom("code_failed");
email_confirm_ok = false;
}

});

var pwchk="N";
$("#id-pw2").blur(function() {
 if($("#id-pw1").val()=="") return;
if ($("#id-pw1").val() == $("#id-pw2").val()) {
       $("#message_pw").html("<span style='color:#3c763d;'>passwords match.</span>");
       pwchk = "Y";
}else{
    pwchk="N";
     $("#message_pw").html("<span style='color:#a94442'>does not match.</span>");
                                $("#id-pw1").val("");
                                $("#id-pw2").val("");
                                $("#id-pw1").focus();
}
});

$("#id-join-btn").click(function() {

  if(!agree_btn_on){
    alert_custom("reg_agree_fail");
    return;
  }

            if(!email_confirm_ok){
              // alert("이메일 인증을 진행해주세요.");
              // alert("Please verify your email.");
              alert_custom("com_1");

              return;
            }

             if($("#id-join-email").val()=="" || $("#id-join-email").val()==null){
               // alert("이메일을 입력하세요.");
               // alert("Please enter your email.");
               alert_custom("com_2");
               $("#id-join-email").focus();
               return;
             }
             if(pwchk=="N"){
               // alert("비밀번호를 입력하세요.");
                 // alert("Please enter a password.");
                 alert_custom("com_3");
                                        $("#id-pw1").val("");
                                        $("#id-pw2").val("");
                                        $("#id-pw1").focus();
                          return;
             }


var email_error = false;
var action = "db/join_ok.php";
var form_data = {
                user_pw: $("#id-pw1").val(),
                user_email: $("#id-join-email").val(),
                my_recom: $("#id-recom").val(),
                is_ajax: 1
};

$.ajax({
type: "POST",
url: action,
data: form_data,
success: function(response) {
if(response == 'success') {

  // alert("Membership registration was successful.");
  alert_custom("com_4");
    // alert("회원 가입에 성공하였습니다.");
    location.href="index.php";
} else {
  // alert("회원 가입에 실패하였습니다.\n잠시 후 다시 시도해 주세요.");
    // alert("Failed to sign up.");
    alert_custom("com_5");
}
}
});
return false;

});

//로그인
$("#id-login-btn").click(function() {
if(loginChk==0) {
			loginChk = 1;
var action ="db/login_ok.php";
var form_data = {
user_account: $("#id-signin-email").val(),
user_pw: $("#id-signin-pw").val(),
is_ajax: 1
};
$.ajax({
type: "POST",
dataType: 'json',
url: action,
data: form_data,
success: function(data) {

if(data[0].result == 'success') {
                              if(data[0].use_flag =="0"){
                                 // alert("The account is suspended. For more information, please contact us via email contact@starwings.co.kr.");
                                 alert_custom("com_6");
                                    deleteCookie("userId");
                                    deleteCookie("userPw");
                                    localStorage.clear();
                              }else{
                                setCookie("userId", $("#user_email").val(), 14);
                                setCookie("userPw", $("#user_pw").val(), 14);

                                localStorage.setItem('uId', $("#user_email").val());
                                localStorage.setItem('uPw', $("#user_pw").val());

                                auction_chk();

                                // alert("로그인 성공");

                              }

															loginChk = 0;

} else {
deleteCookie("userId");
deleteCookie("userPw");
localStorage.clear(); // 전체 삭제
$("#message").html("<p style='color:#a94442'>Wrong email or password.</p>");
															loginChk = 0;

}
},
error: function (request, status, error) {
    deleteCookie("userId");
    deleteCookie("userPw");
    localStorage.clear(); // 전체 삭제
    // alert("Wrong email or password.");
    alert_custom("com_7");
    loginChk = 0;

}
});
return false;
			}
});

if (navigator.userAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || navigator.userAgent.match(/LG|SAMSUNG|Samsung/) != null)
{//모바일

  $("#mobile-menu").bind("show",function(){
    // alert("show");
  });

  $("#form_amount").on("focusin", function(){
    // alert("d");
    console.log($("#form_amount").val());
    // $('#id-search-box').css("display","block");
  });




    $("#form_amount").bind("keyup", function(e) {
          console.log($("#form_amount").val());
    });

  // $("#form_amount").bind("change keyup input", function(e) {
  //       console.log($(".search-form-m").val());
  //   if($('.search-form-m').val()==""){
  //       console.log("sc1");
  //       $('#id-search-box').css("display","none");
  //   }else{
  //       $('#id-search-box').css("display","block");
  //       console.log("sc2");
  //       searching_col();
  //       searching_item();
  //       searching_user();
  //   }
  //
  // });
  // $("#search_form_m").focus(function(){
  //     alert("d");
  // })
  // $("#search_form_m").on('keyup input', function(){
  //   alert("d");
  //   if($('#search_form_m').val()==""){
  //       console.log("sc1");
  //       $('#id-search-box').css("display","none");
  //   }else{
  //       $('#id-search-box').css("display","");
  //       console.log("sc2");
  //       searching_col();
  //       searching_item();
  //       searching_user();
  //   }
// });

}else{//PC
  $("#id-pc-search").on('keyup input', function(){
    if($('#search_form').val()==""){
        $('#id-search-box').css("display","none");
    }else{
        $('#id-search-box').css("display","");
        searching_col();
        searching_item();
        searching_user();
    }
  });

}








});//ready

var fee_rate=1,platform_addr,owner_addr;
function server_data(){
  $.ajax({
             type: 'post',
             dataType: 'json',
             url: 'db/server_db.php',
             data: {'ajax_on':1},
             success: function (data) {
               platform_addr = data[0].platform_address;
               fee_rate = data[0].fee_rate;
             },error: function (request, status, error) {
             },complete: function () {
             }
         });
}

window.onload = function(){

  // ethprice();

}
// $(window).load( function() { //ready 후 실행
//
//
// });



function alert_custom(id){
  $("#id-alert").html("<span data-langNum='"+id+"'></span>");
  currentLang();
  alert($("#id-alert>span").html());
}

// function drop_move(code){
//   location.href="xeno-drop-detail?xc="+code;
// }

function legel_move(type){
  if(lang=="ko"){
    if(type=="privacy"){
        window.open("privacy_ko");
    }else{
      window.open("terms_ko");
    }

  }else{
    if(type=="privacy"){
        window.open("privacy_en");
    }else{
      window.open("terms_en");
    }
  }

}

function guide_move(){
  if(lang=="ko"){
    window.open("guide/guide_kor");
  }else{
    window.open("guide/guide_eng");
  }

}

function collection_move(code){
  location.href="collection-detail?xc="+code;
}

function profile_move(code){
  location.href="profile?uc="+code;
}

function banner_move(link){
  if(link!="" && link!="null"){
    location.href=link;
  }
}

function artist_move(ac){
  if(ac!="" && ac!=null){
    location.href="artist-detail?ac="+ac;
  }
}

function create_move(){
  if(!login_chk){
    alert_custom("chk_sign");
    return;
  }
  location.href="createnft";
}

function mypage_move(){
  location.href="mypage?ty=auc";
}

function art_move(ac,idx,type){
  location.href="art-detail?ac="+ac+"&i="+idx+"&t="+type;
}

function market_move(ac,idx,type){
  location.href="market-detail.php?ac="+ac+"&i="+idx+"&t="+type;
}

function basic_move(ac,idx,type){
  location.href="basic-detail.php?ac="+ac+"&i="+idx+"&t="+type;
}

function item_move(ac,idx,type){
  location.href="item-detail?ac="+ac+"&i="+idx+"&t="+type;
}

function list_move(ac,idx,type,own_idx){
  if(type=="proof"){
    location.href="proof-nft?ac="+ac+"&i="+idx+"&t="+type+"&oi="+own_idx;
  }else{
    location.href="listing-nft?ac="+ac+"&i="+idx+"&t="+type+"&oi="+own_idx;
  }

}



function alert_pop(type){
  if(type=="resell"){
    alert("List your item to sell in marketplace.\n* It will be available soon.");
  }else if(type=="offer"){
    alert("Make an offer to buy this item.\n* It will be available soon.");
  }

}

function addJavascript(jsname) {
	var th = document.getElementsByTagName('head')[0];
	var s = document.createElement('script');
	s.setAttribute('type','text/javascript');
	s.setAttribute('src',jsname);
	th.appendChild(s);
}



var cur_ethprice,current_usd;
var timer;
function ethprice(){
  // clearInterval(timer);

  var latest_usd = getCookie("latest_usd");

  if(latest_usd!=""){
    // setCookie("popup-info1", "Y", 2); // 2일 동안 쿠키 보관
    // $('#id-modal-popup').click();
      current_usd =  parseFloat(getCookie("latest_usd").replace(/"/gi,""));
  }

    // console.log(current_usd);
  // var arr_krw_markets = 'USDT-ETH';
  var arr_usd_markets = 'KRW-ETH';
$.ajax({
          url: "https://api.upbit.com/v1/ticker?markets=" +arr_usd_markets,
          dataType: "json",
          timeout: 1000
        }).done(function(tickers){
          // alert(JSON.stringify(tickers));
          // console.log(JSON.stringify(tickers));
          // console.log(JSON.stringify(tickers[0].trade_price.toFixed(2)));


          current_usd = JSON.stringify(tickers[0].trade_price.toFixed(2));
          current_usd = parseFloat(current_usd.replace(/"/gi,""));

          setCookie("latest_usd", current_usd, 1); // 2일 동안 쿠키 보관
          // console.log(commas(tickers[0].trade_price.toFixed(2)));

          // cur_ethprice = tickers[0].trade_price;
          // var chg_price = cur_ethprice*topPrice;
          // $('#id_eth_price').html("＄"+commas(tickers[0].trade_price.toFixed(2)));
          // $('#id_won_price0').html("￦"+commas(tickers[0].trade_price));
          // $('#id_won_price0').html("￦"+commas(chg_price.toFixed(0)));
          // $('#id_won_price').html("￦"+commas(chg_price.toFixed(0)));
          // var ac_chg_price = cur_ethprice*$('#ac_price').val();
          // $('#id_won_price2').html("￦"+commas(ac_chg_price.toFixed(0)));
          //
          //
          // $('#auction_krw').val(ac_chg_price.toFixed(0));
          //
          //
          //
          // var buy_price = cur_ethprice*buyPrice;
          // $('#id_won_price3').html("￦"+commas(buy_price.toFixed(0)));


        });

  // timer = setInterval(ethprice, 1000);
}

function commas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function auction_chk(){
  $.ajax({
  type: "POST",
  dataType: 'json',
  url: "db/auction_chk.php",
  data: {},
  success: function(data) {

      if(data !=null){
        // alert("Congratulations.\nThe final bid was awarded.");
        alert_custom("com_8");
        mypage_move();
        // art_move(data[0].nft_creator,data[0].mint_idx,"");
      }else{
          location.reload();
      }
  },
  error: function (request, status, error) {
  }
  });
}


function searching_col(){
  var form_data = {
  search_txt: $(".search-form").val(),
  is_type:'col',
  is_ajax: 1
  };
  $.ajax({
  type: "POST",
  dataType: 'json',
  url: "db/search_list.php",
  data: form_data,
  success: function(data) {
      $('#id-search-result1').empty();
      var content="";
      var content_total = 0;
      if(data !=null){
        for(var i=0; i<data.length; i++){

          var s_img;
          if(data[i].banner_img != null){
            s_img = data[i].banner_img;
          }else{
            s_img ="https://avatars.dicebear.com/api/identicon/"+data[i].user_code+".svg";
          }
          var s_title=data[i].banner_name;
          if(data[i].banner_name.length >30){
            s_title = data[i].banner_name.substring(0,30)+"...";
          }



          content='  <div onclick="collection_move(\''+data[i].idx_code+'\')"  class="row cursor-p ">';
          content+='  <div class="search-row">';
          content+='    <div style="padding-right:20px;">';
          content+='      <img src="'+s_img+'" alt="Avatar" class="rounded-circle img-50" />';
          content+='    </div>';
          content+='    <div style="padding-left:0px;">';
          content+='    <div class="">';
          content+='      <span style="font-weight:bold; color:#292929;">'+s_title+'</span>';
          content+='    </div>';
          content+='    <div >';
          content+='    <span style="font-weight:400; color:#292929;">'+data[i].artist_name+'</span>';
          content+='    </div>';
          content+='    </div>';
          content+='  </div>  ';
          content+='  </div>  ';

  $('#id-search-result1').append(content);
        }
      }else{
        content='  <div class="row" style="margin-bottom:20px;">';
        content+='    <div class="col-lg-12" style="padding-right:0px;">';
        content+='No Results';
        content+='    </div>';
        content+='  </div>  ';
        $('#id-search-result1').append(content);
      }
  },
  error: function (request, status, error) {
  }
  });
}

function searching_item(){
  var form_data = {
  search_txt: $(".search-form").val(),
  is_type:'item',
  is_ajax: 1
  };
  $.ajax({
  type: "POST",
  dataType: 'json',
  url: "db/search_list.php",
  data: form_data,
  success: function(data) {
      $('#id-search-result2').empty();
      var content="";
      var content_total = 0;
      if(data !=null){
        for(var i=0; i<data.length; i++){
          var s_img = "assets/images/no_img.png";
          if(data[i].nft_url != null){
            if(data[i].nft_type.indexOf("video") != -1) {//영상
              s_img = "assets/images/no_img.png";
          }else {//이미지
            s_img = data[i].nft_url;
          }
          }else{
             s_img = "assets/images/no_img.png";
          }

          s_img = data[i].nft_img;

          var s_title= data[i].nft_title;
          if(data[i].nft_title.length >30){
            s_title = data[i].nft_title.substring(0,30)+"...";
          }

          status = "";
          if(data[i].nft_status =="listing"){
            if(data[i].sales_type=="price"){
              status = "Buy now";
            }else if(data[i].sales_type=="auction"){
              status = "Bidding";
            }
          }else if(data[i].nft_status =="create"){
            status = "Make Offer";
          }else if(data[i].nft_status =="usermint"){
            status = "Collection";
          }


          content='  <div onclick="art_move(\''+data[i].nft_creator+'\','+data[i].idx+',\'\')"  class="row cursor-p ">';
          content+='  <div class="search-row">';
          content+='    <div style="padding-right:20px;">';
          content+='      <img src="'+s_img+'" alt="Item" class="rounded-circle img-50" />';
          content+='    </div>';
          content+='    <div style="padding-left:0px;">';
          content+='    <div class="">';
          content+='      <span style="font-weight:bold; color:#292929;">'+s_title+'</span>';
          content+='    </div>';
          content+='    <div >';
          content+='    <span style="font-weight:400; color:#292929;">'+status+'</span>';
          content+='    </div>';
          content+='    </div>';
          content+='  </div>  ';
          content+='  </div>  ';
          $('#id-search-result2').append(content);
        }
      }else{
        content='  <div class="row" style="margin-bottom:20px;">';
        content+='    <div class="col-lg-12" style="padding-right:0px;">';
        content+='No Results';
        content+='    </div>';
        content+='  </div>  ';
        $('#id-search-result2').append(content);
      }
  },
  error: function (request, status, error) {
  }
  });
}

function searching_user(){
  var form_data = {
  search_txt: $(".search-form").val(),
  is_type:'user',
  is_ajax: 1
  };
  $.ajax({
  type: "POST",
  dataType: 'json',
  url: "db/search_list.php",
  data: form_data,
  success: function(data) {
      $('#id-search-result3').empty();
      var content="";
      var content_total = 0;
      if(data !=null){
        for(var i=0; i<data.length; i++){
          var s_img;
          if(data[i].profile_img != null){
            s_img = data[i].profile_img;
          }else{
             s_img ="https://avatars.dicebear.com/api/identicon/"+data[i].user_code+".svg";
          }
          var s_title= "";
          if(data[i].profile_comment!=null){
            if(data[i].profile_comment.length >30){
              s_title = data[i].profile_comment.substring(0,30)+"...";
            }
          }

          content='  <div onclick="profile_move(\''+data[i].user_code+'\')"  class="row cursor-p ">';
          content+='  <div class="search-row">';
          content+='    <div style="padding-right:20px;">';
          content+='      <img src="'+s_img+'" alt="Avatar" class="rounded-circle img-50" />';
          content+='    </div>';
          content+='    <div style="padding-left:0px;">';
          content+='    <div class="">';
          content+='      <span style="font-weight:bold; color:#292929;">'+data[i].nick_name+'</span>';
          content+='    </div>';
          content+='    <div >';
          content+='    <span style="font-weight:400; color:#292929;">'+s_title+'</span>';
          content+='    </div>';
          content+='    </div>';
          content+='  </div>  ';
          content+='  </div>  ';
          $('#id-search-result3').append(content);
        }
      }else{
        content='  <div class="row" style="margin-bottom:20px;">';
        content+='    <div class="col-lg-12" style="padding-right:0px;">';
        content+='No Results';
        content+='    </div>';
        content+='  </div>  ';
        $('#id-search-result3').append(content);
      }
  },
  error: function (request, status, error) {
  }
  });
}

function search_move(){
  location.href="search-result?search_form="+$(".search-form").val();
}

function video_play(id,type){
  var video_height=$('#id-incard-'+id).outerHeight(true);
  var video_width=$('#id-incard-'+id).outerWidth(true);
  $('#id-video-'+id).css("display","");
  $(".video-mini-player").css("height",video_height).css("width",video_width);
  if(type=="market"){

  }else{
    $('#id-incard-'+id).css("display","none");
  }



}
function video_stop(id){
  $('#id-video-'+id).css("display","none");
  $('#id-incard-'+id).css("display","");

}

var agree_btn_on = false;
function reg_agree_chk(){

  if($("#reg_term_agree").is(":checked")){
      $("#id-join-btn").addClass("dark-color").removeClass("gray-color");
      $("#id-join-btn").attr("disabled",false);
      agree_btn_on = true;
  }else{
    $("#id-join-btn").removeClass("dark-color").addClass("gray-color");
    $("#id-join-btn").attr("disabled",true);
    agree_btn_on = false;
  }

}

function email_subs(){
  if($('#form_subs_email').val()==""){
    // alert("Please check email.");
    alert_custom("chk_email");
    return;
  }
// alert($('#form_email').val());

var lo_lang = localStorage.getItem('langs');
 if(lo_lang==null){
   lo_lang = $("#id-lang").attr("data-lang");
 }

 if(lo_lang=="ko"){
      var confirm_box = confirm("신규 작품 소식을 받아보시겠습니까?");
  }else{
      var confirm_box = confirm("Would you like to subscribe to drops?");
  }


  if(confirm_box == true){
    var action = "db/email_subs_ok.php";
    var form_data = {
                    form_email: $('#form_subs_email').val(),
                    is_ajax: 1
    };

    $.ajax({
    type: "POST",
    url: action,
    data: form_data,
    success: function(data) {
                           console.log(data);
                         if(data[0].rst == 'success') {
                           // alert("Your subscription is complete.");
                           alert_custom("chk_sub");
                           location.reload();
                         }else if(data[0].rst == 'already') {
                           alert_custom("alt_reg_already");
                           location.reload();

                         }else{
                           alert_custom("alt_fail");
                           location.reload();
                         }

    },complete: function(){
      // console.log(data);
    },
    error: function (request, status, error) {
        console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
    }
    });

  }
}
