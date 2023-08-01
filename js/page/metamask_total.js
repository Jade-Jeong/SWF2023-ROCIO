const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;

// Web3modal instance
let web3Modal;
let post_ing=0;
// Chosen wallet provider given by the dialog window
let provider;

let selectedAccount;

$(window).on('load',function() {

  UserAgent = navigator.userAgent;
  if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)
  {
  web3_model();
}else{//PC
  web3_start();
  }


});

var web3Provider;
var contracts={};
var conn_networkId =11155111;//sepolia
// var conn_networkId =1; //mainnet
var tokenId;



function web3_start(){
  if (typeof web3 !== 'undefined'){
    web3Provider = web3.currentProvider;
  }else{
    web3Provider = new Web3.providers.HttpProvider('http://127.0.0.1:8545');
  }
  web3 = new Web3(web3Provider);

  if(conn_networkId==11155111){//sepolia
    $.getJSON('WEB3_PASS.json', function(data){
      var ArtworkArtifact = data;
      contracts.Artwork = TruffleContract(ArtworkArtifact);
      contracts.Artwork.setProvider(web3Provider);
      // sol_test(0);
      // sol_test(1);
      // sol_test(2);
    });
  }else if(conn_networkId==1){//mainnet
    $.getJSON('WEB3_PASS.json', function(data){
      var ArtworkArtifact = data;
      contracts.Artwork = TruffleContract(ArtworkArtifact);
      contracts.Artwork.setProvider(web3Provider);
    });
  }

  if(login_chk){//로그인 되어 있으면
    metamask_call();
    // sol_test(0);
  }

  window.ethereum.on('accountsChanged', function (accounts) {
  if(global_php_my_account.toUpperCase()!=accounts[0].toUpperCase()){
    alert_custom("meta_3");
    location.href='db/logout.php';
    return;
  }else{
    selectedAccount = accounts[0];
  }


});

  window.ethereum.on('networkChanged', function (networkId) {
    if(networkId!=conn_networkId){
      if(conn_networkId==11155111){
        alert_custom("meta_1");
      }else{
        alert_custom("meta_2");
      }
      return;
    }
  });


 
}


async function sol_test(idx){

  // var s1 = aes256Encode(aes256SecretKey, "", "hello");
  // var name = aes256Encode(aes256SecretKey, "", "jade");
  // var age = aes256Encode(aes256SecretKey, "", "38");
var name="RgOf16moXxD8h+C1KS7dyg==";
var age = "1mlKwjezQm4U8SdmUKCW2w==";
  

// alert(s1);
// return;

  var artworkInstance;
  if(idx==0){
    // MyContract.methods.myFunction().call()
    // .then(console.log);

  

    const cur_accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    const cur_account = cur_accounts[0];

    //   contract.methods.getValue().call()
    //   .then(value => console.log(`The value is ${value}`))
    //  .catch(error => console.error(error));

      // alert(account);
      contracts.Artwork.deployed().then(function(instance){
        artworkInstance = instance;
        // return artworkInstance.getAllKey({from: cur_account});
        // return artworkInstance.getValue("age",{from: cur_account});
        return artworkInstance.getAllDataJson({from: cur_account});
      }).then(function(data){
   
        var event_data = JSON.stringify(data);
        let res_data = JSON.parse(event_data);

        console.log("result : "+  event_data);
        console.log("length : "+  res_data.length);
        console.log("length : "+  res_data[0].length);
        console.log("배열0 : "+  res_data[0]);
        console.log("배열1 : "+  res_data[1]);

        var keys = res_data[0].toString().split(',');
        var values = res_data[1].toString().split(',');
        // console.log("개수 : "+ keys[0] );

        // alert(values.length);
        for (let i = 0; i < res_data[0].length; i++) {
            console.log(`key=${keys[i]} value=${values[i]}`);
        }
        // const [ owners, prices ] = adopters;
        // for (let i = 0; i < owners.length; i++) {
        //     console.log(`owner=${owners[i]}, price=${prices[i].valueOf()}`);
        // }


      }).catch(function(err){
        console.log(err.message);
      });




  }else if(idx==1){
    // MyContract.methods.myFunction().call()
    // .then(console.log);

    web3.eth.getAccounts(function(error, accounts){
      if(error){
        console.log(error);
      }
      var account = accounts[0];

    //   contract.methods.getValue().call()
    //   .then(value => console.log(`The value is ${value}`))
    //  .catch(error => console.error(error));

      // alert(account);
      contracts.Artwork.deployed().then(function(instance){
        artworkInstance = instance;
        // return artworkInstance.getAllKey({from: account});
        // return artworkInstance.getValue("age",{from: account});
        return artworkInstance.getAllDataJson({from: account});
      }).then(function(data){
        // console.log(data.result);
        // var event_data = JSON.stringify(data);
        // let res_data = JSON.parse(event_data);

        // console.log("발행 : "+  event_data);
        // console.log("발행 tx : "+  res_data.tx);
          const [ keys, values ] = data;
        // alert(values.length);
        for (let i = 0; i < keys.length; i++) {
            console.log(`key=${keys[i]}, value=${values[i]}`);
        }

      }).catch(function(err){
        console.log(err.message);
      });

    });


  }else if(idx==2){

    web3.eth.getAccounts(function(error, accounts){
      if(error){
        console.log(error);
      }
      var account = accounts[0];
      contracts.Artwork.deployed().then(function(instance){


        var artworkInstance = instance;

        // var s1 = aes256Encode(aes256SecretKey, "", "jade");
          var values = "name:"+name+",age:"+age;
        return artworkInstance.setJsonSplit(values,{from: account});
      }).then(function(result){

        var event_data = JSON.stringify(result);
        let res_data = JSON.parse(event_data);

        var res = result.toString().split(',');
        console.log("개수 : "+ res );

        }).catch(function(err){
        console.log(err.message);
      });
    });



    // contracts.Artwork.deployed().then(function(instance){
    //   var adoptionInstance2 = instance;
    //     //alert(id);
    //   return adoptionInstance2.setJsonSplit("이름:정훈주,나이:38,혈액형:A",{from: account});
    // }).then(function(result){
    //   var res = result.toString().split(',');
  
  
    //   // console.log("콜 : "+ ownerId );
    //   console.log("개수 : "+ res );
    //   console.log("가격 : "+ web3.fromWei(res[3] , 'ether'));
    // }).catch(function(err){
    //   console.log(err.message);
    // });
  }else if(idx==3){
    contracts.Artwork.deployed().then(function(instance){
      var adoptionInstance2 = instance;
        //alert(id);
      return adoptionInstance2.getFindArtworkOwner(1);
    }).then(function(result){
  
      // alert(result+"님 소유입니다.");
      console.log(result+"님 소유입니다." );
  
    }).catch(function(err){
      console.log(err.message);
    });
  }else if(idx==4){
    contracts.Artwork.deployed().then(function(instance){
      var adoptionInstance2 = instance;
      return adoptionInstance2.getArtworkLength();
    }).then(function(result){
      console.log("총개수: " +result);
    }).catch(function(err){
      console.log(err.message);
    });
  }else if(idx==5){
      web3.eth.getAccounts(function(error, accounts){
      var account = accounts[0];
        web3.eth.getBalance(account, function(err, result) {
         myBalance = result;
              console.log("보유량: " +web3.fromWei(myBalance , 'ether'));
        });
    });
  }else if(idx==6){
      web3.eth.getAccounts(function(error, accounts){
      var account = accounts[0];
      contracts.Artwork.deployed().then(function(instance){
        adoptionInstance = instance;
            return adoptionInstance.balanceOf(account ,{from: account});
          }).then(function(result){
        console.log("보유량: " +result);
      }).catch(function(err){
        alert("거래실패 : "+err.message);
        console.log(err.message);
      });
    });
  }
  
  }
  
  var aes_data;
  function data_aes(){
    $("#id-btn-aes").css("display","none");
    // $("#id-btn-aes-load").css("display","");

 
    // $(obj).val(rst);
    for(var i=0; i <lastIdx; i++){
      var key_data = $("#id-key-"+i).val();
      var val_data = $("#id-val-"+i).val();
      // alert(data);
      var rst = aes256Encode(aes256SecretKey, "", val_data);

      $("#id-val-"+i).val(rst);
      if(i==0){
        aes_data = key_data +":"+rst;
      }else{
        aes_data += ","+key_data +":"+rst;
      }
      
    }

console.log("aes : "+aes_data);

$("#id-btn-save").css("display","");


    // return rst;
    // data_save(data);
  }

  var des_data;
  function data_des(data){
 
    var rst = aes256Decode(aes256SecretKey, "", data);

    return rst;
  }

  async function data_save(){
    $("#id-btn-save-load").css("display","");
    $("#id-btn-save").css("display","none");
    const cur_accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    const cur_account = cur_accounts[0];
  
      contracts.Artwork.deployed().then(function(instance){
        var artworkInstance = instance;
       
        return artworkInstance.setJsonSplit(aes_data,{from: cur_account});
      }).then(function(data){
   
        var event_data = JSON.stringify(data);
        let res_data = JSON.parse(event_data);
  
        alert("등록하신 정보가 블록체인에 저장 되었습니다.");
        location.href="portfolio";
      }).catch(function(err){
        console.log(err.message);
      });
  }
  
  function data_mod_aes(){
    $("#id-btn-mod-aes").css("display","none");
    // $("#id-btn-aes-load").css("display","");

 
    // $(obj).val(rst);
    for(var i=0; i <lastIdx; i++){
   
      var val_data = $("#id-val-mod-"+i).val();
      // alert(data);
      var rst = aes256Encode(aes256SecretKey, "", val_data);

      $("#id-val-mod-"+i).val(rst);

        aes_data = rst;
      
      
    }

console.log("aes : "+aes_data);

$("#id-btn-mod").css("display","");


    // return rst;
    // data_save(data);
  }

  async function data_modify(){
    $("#id-btn-mod-load").css("display","");
    $("#id-btn-mod").css("display","none");
    const cur_accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    const cur_account = cur_accounts[0];
  
      contracts.Artwork.deployed().then(function(instance){
        var artworkInstance = instance;
       
        return artworkInstance.editValue("주소",aes_data,0,{from: cur_account});
      }).then(function(data){
   
        var event_data = JSON.stringify(data);
        let res_data = JSON.parse(event_data);
  
        alert("변경하신 정보가 블록체인에 저장 되었습니다.");
        location.href="portfolio";
      }).catch(function(err){
        console.log(err.message);
      });
  }

async function data_call(){
  const cur_accounts = await ethereum.request({ method: 'eth_requestAccounts' });
  const cur_account = cur_accounts[0];


  
    
  //   contract.methods.getValue().call()
  //   .then(value => console.log(`The value is ${value}`))
  //  .catch(error => console.error(error));

    // alert(account);
    contracts.Artwork.deployed().then(function(instance){
      var artworkInstance = instance;
      // return artworkInstance.getAllKey({from: cur_account});
      // return artworkInstance.getValue("age",{from: cur_account});
      
      if(cur_account==""||cur_account==null){
        var cur_account2 = "0x5891537187c87b9FFC1fc6a9F4B5DEcE9407940a";
        return artworkInstance.getAllDataJson({from: cur_account2});
      }else{
        return artworkInstance.getAllDataJson({from: cur_account});
      }
    }).then(function(data){
 
      var event_data = JSON.stringify(data);
      let res_data = JSON.parse(event_data);

      console.log("result : "+  event_data);
      console.log("length : "+  res_data.length);
      console.log("length : "+  res_data[0].length);
      console.log("배열0 : "+  res_data[0]);
      console.log("배열1 : "+  res_data[1]);

      var keys = res_data[0].toString().split(',');
      var values = res_data[1].toString().split(',');
      // console.log("개수 : "+ keys[0] );

      // alert(values.length);
      for (let i = 0; i < res_data[0].length; i++) {
        var dec = data_des(values[i]);
        if(keys[i]=="name" || keys[i]=="이름"){

          $("#id-name1").html(dec);
          $("#id-name2").html(dec);
          $("#id-val-join-0").val(dec);
          $("#id-val-info-0").val(dec);
        }else if(keys[i]=="address" || keys[i]=="주소"){
          $("#id-address1").html(dec);
          $("#id-address2").html(dec);
          $("#id-val-join-1").val(dec);
          $("#id-val-info-1").val(dec);
        }
          console.log(`key=${keys[i]} value=${dec}`);


      }
      // const [ owners, prices ] = adopters;
      // for (let i = 0; i < owners.length; i++) {
      //     console.log(`owner=${owners[i]}, price=${prices[i].valueOf()}`);
      // }


    }).catch(function(err){
      console.log(err.message);
    });
}

async function data_nfc_call(){

    contracts.Artwork.deployed().then(function(instance){
      var artworkInstance = instance;
      // return artworkInstance.getAllKey({from: cur_account});
      // return artworkInstance.getValue("age",{from: cur_account});
      
        var cur_account2 = "0x5891537187c87b9FFC1fc6a9F4B5DEcE9407940a";
        return artworkInstance.getAllDataJson({from: cur_account2});
 
    }).then(function(data){
 
      var event_data = JSON.stringify(data);
      let res_data = JSON.parse(event_data);

      console.log("result : "+  event_data);
      console.log("length : "+  res_data.length);
      console.log("length : "+  res_data[0].length);
      console.log("배열0 : "+  res_data[0]);
      console.log("배열1 : "+  res_data[1]);

      var keys = res_data[0].toString().split(',');
      var values = res_data[1].toString().split(',');
      // console.log("개수 : "+ keys[0] );

      // alert(values.length);
      for (let i = 0; i < res_data[0].length; i++) {
        var dec = data_des(values[i]);
        if(keys[i]=="name" || keys[i]=="이름"){

          $("#id-name1").html(dec);
          $("#id-name2").html(dec);
          $("#id-val-join-0").val(dec);
          $("#id-val-info-0").val(dec);
        }else if(keys[i]=="address" || keys[i]=="주소"){
          $("#id-address1").html(dec);
          $("#id-address2").html(dec);
          $("#id-val-join-1").val(dec);
          $("#id-val-info-1").val(dec);
        }
          console.log(`key=${keys[i]} value=${dec}`);


      }
      // const [ owners, prices ] = adopters;
      // for (let i = 0; i < owners.length; i++) {
      //     console.log(`owner=${owners[i]}, price=${prices[i].valueOf()}`);
      // }


    }).catch(function(err){
      console.log(err.message);
    });
}

async function sign_meta(){
  const cur_accounts = await ethereum.request({ method: 'eth_requestAccounts' });
  const cur_account = cur_accounts[0];
  // eth_signTypedData_v4 parameters. All of these parameters affect the resulting signature.
   const msgParams = JSON.stringify({
     domain: {
       // This defines the network, in this case, Mainnet.
       chainId: 11155111,
       // Give a user-friendly name to the specific contract you're signing for.
       name: 'Ether Mail',
       // Add a verifying contract to make sure you're establishing contracts with the proper entity.
       verifyingContract: '0xCcCCccccCCCCcCCCCCCcCcCccCcCCCcCcccccccC',
       // This identifies the latest version.
       version: '1',
     },

     // This defines the message you're proposing the user to sign, is dapp-specific, and contains
     // anything you want. There are no required fields. Be as explicit as possible when building out
     // the message schema.
     message: {
       contents: 'Hello! Would you like to provide information on this site?',
       attachedMoneyInEth: 0,
       from: {
         name: 'SWF2023 도서관',
         wallets: [
           '0xCD2a3d9F938E13CD947Ec05AbC7FE734Df8DD826',
         ],
       },
       to: [
         {
           name: 'YOU',
           wallets: [
            cur_account,
           ],
         },
       ],
     },
     // This refers to the keys of the following types object.
     primaryType: 'SignUp',
     types: {
       // This refers to the domain the contract is hosted on.
       EIP712Domain: [
         { name: 'name', type: 'string' },
         { name: 'version', type: 'string' },
         { name: 'chainId', type: 'uint256' },
         { name: 'verifyingContract', type: 'address' },
       ],
       // Not an EIP712Domain definition.
       Group: [
         { name: 'name', type: 'string' },
         { name: 'members', type: 'Person[]' },
       ],
       // Refer to primaryType.
       SignUp: [
         { name: 'from', type: 'Person' },
         { name: 'to', type: 'Person[]' },
         { name: 'contents', type: 'string' },
       ],
       // Not an EIP712Domain definition.
       Person: [
         { name: 'name', type: 'string' },
         { name: 'wallets', type: 'address[]' },
       ],
     },
   });

   var from = await web3.eth.getAccounts();

   var params = [from[0], msgParams];
   var method = 'eth_signTypedData_v4';

   web3.currentProvider.sendAsync(
     {
       method,
       params,
       from: from[0],
     },
     function (err, result) {
       if (err) return console.dir(err);
       if (result.error) {
         alert(result.error.message);
       }
       if (result.error) return console.error('ERROR', result);
       console.log('TYPED SIGNED:' + JSON.stringify(result.result));

        alert('Successfully recovered signer as ' + JSON.stringify(result.result));


        $('#id-modal-join').click();
        data_call();

       const recovered = sigUtil.recoverTypedSignature_v4({
         data: JSON.parse(msgParams),
         sig: result.result,
       });

       if (
         ethUtil.toChecksumAddress(recovered) === ethUtil.toChecksumAddress(from)
       ) {
         alert('Successfully recovered signer as ' + from);
       } else {
         alert(
           'Failed to verify signer when comparing ' + result + ' to ' + from
         );
       }
     }
   );
//   const exampleMessage = 'Example `personal_sign` message.';
// try {
//   const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
//   const from = accounts[0];
//   // For historical reasons, you must submit the message to sign in hex-encoded UTF-8.
//   // This uses a Node.js-style buffer shim in the browser.
//   // const msg = `0x${Buffer.from(exampleMessage, 'utf8').toString('hex')}`;
//   console.log(ethereumjs.Buffer.Buffer.from(exampleMessage,'hex'));
//   const msg ='0x'+ethereumjs.Buffer.Buffer.from(exampleMessage,'hex');
//   const sign = await ethereum.request({
//     method: 'personal_sign',
//     params: [msg, from],
//   });
//   console.log(sign);
//   // personalSignResult.innerHTML = sign;
//   // personalSignVerify.disabled = false;
// } catch (err) {
//   console.error(err);
//   // personalSign.innerHTML = `Error: ${err.message}`;
// }
}


var tx_update =false;
function db_insert(tx){
  if(!tx_update){
    console.log("main: "+tx +" tt: " + tx_type);
    tx_update = true;
    var action = "db/nft_insert_db.php";
    var forms= $('#form1');
    // var action = "db/nft_insert_db.php";
    // var forms =   $('#form2');
    var formData = new FormData(forms[0]);
    formData.append("is_ajax",1);
    formData.append("tx_id_bf",tx);
    formData.append("tx_type",tx_type);

    if(tx_type=="resell_burn"){
      formData.append("form_own_idx",owned_idx);
      formData.append("form_list_tx",listing_tx);
    }else if(tx_type=="burn"){
      formData.append("form_list_tx",listing_tx);
    }


  post_ing = 1;
  $.ajax({
  type: "POST",
  url: action,
  data: formData,
        processData: false,
        contentType: false,
  success: function(response) {
  post_ing = 0;
  console.log("insert : "+response);
  if(response == 'success') {

  }else{


  }
  },error: function (request, status, error) {
  console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
  }
  });
  }


}
var tx_type;
function db_transaction(type,mode){
  tx_type = type;
}
async function mint_nft(){
currency_type = $('#form_currency').val();


  if($('#form_price').val() ==null || $('#form_price').val()==""){
    alert("Check the price.");
    return;
  }

  if($('#sales_type').val()=="auction"){
    if($('#start_date').val()==null || $('#start_date').val()==""){
      alert("Check the start date.");
      $('#start_date').focus();
      return;
    }
    if($('#finish_date').val()==null || $('#finish_date').val()==""){
      alert("Check the finish date.");
      $('#finish_date').focus();
      return;
    }

    db_auction_update();
    return;

  }

  const cur_accounts = await ethereum.request({ method: 'eth_requestAccounts' });
  const cur_account = cur_accounts[0];

  if(cur_account!=""){

    if(global_php_account.toUpperCase()!=cur_account.toUpperCase()){
        alert("It's not a connected wallet address.");
      // location.href='logout.php';
      return;
    }

    web3.eth.net.getId(function(error, id){
      if(error){
        console.log(error);
      }
      if(id!=conn_networkId){
        if(conn_networkId==11155111){
          alert("Please use after changing the Ethereum network to the sepolia test network.");
        }else{
          alert("Please use after changing the Ethereum network to the Mainnet network.");
        }

        return;
      }else{
        $(".bg-lock").css("display","block");
        web3.eth.getAccounts(function(error, accounts){
          if(error){
            console.log(error);
          }
          var account = accounts[0];
          contracts.Artwork.deployed().then(function(instance){

          db_transaction("mint","insert");

              setTimeout(function(){$(".bg-lock").css("display","block");},100);
            var artworkInstance = instance;
            var valueFloat = parseFloat($('#form_price').val());
                valueFloat = web3.utils.toWei(String(valueFloat), 'ether');

            return artworkInstance.mint(global_php_metaurl,$('#form_amount').val(),valueFloat,currency_type,{from: account});
          }).then(function(result){
            // $(".bg-lock").css("display","none");
            var event_data = JSON.stringify(result);
            let res_data = JSON.parse(event_data);

            console.log("발행 : "+  event_data);
            console.log("발행 tx : "+  res_data.tx);
            console.log("발행 bhash : "+  res_data.receipt.blockHash);
            console.log("발행 blockno : "+  res_data.receipt.blockNumber);
            console.log("발행2 ID : "+  res_data.logs[0].args.id);
            console.log("발행2 Amount : "+  res_data.logs[0].args.value);

            $('#chain_idx').val(res_data.logs[0].args.id);
            $('#owner_acc').val(res_data.logs[0].args.to);
            $('#tx_id').val(res_data.tx);
            $('#block_hash').val(res_data.receipt.blockHash);
            $('#block_number').val(res_data.receipt.blockNumber);
            // alert($('#chain_idx').val());
            if($('#chain_idx').val()==""){
              // alert("NFT 블록 생성에 실패하였습니다.");
              alert("Failed to Mint NFT.");
            }else{
                // alert('NFT 등록에 성공하였습니다.');
              db_update();
            }

            }).catch(function(err){
              $(".bg-lock").css("display","none");
              db_transaction("mint","cancel");
            console.log(err.message);
          });
        });

      }
    });



  }else{
  alert("Please check the metamask connection.");
    // alert("metamask를 연결해 주세요.");
  }


}
function db_update(){
  // var action = "db/nft_update_db.php";
  var action = "db/nft_listing_update.php";


  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);



post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_4");
                      // location.reload();
                    location.href="mypage";


}else{

     alert_custom("meta_5");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

function db_auction_update(){
  // var action = "db/nft_update_db.php";
  var action = "db/nft_auction_insert.php";

  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);



post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_4");
                      // location.reload();
                    location.href="mypage";


}else{

     alert_custom("meta_5");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

var item_idx,item_amount,burn_txid,meta_url,item_price,royal_rate,currency_type;

async function burn_nft(item_id,amount,metaurl,list_tx){
  item_idx = item_id;
  item_amount= amount;
  meta_url = metaurl;
  listing_tx = list_tx;

  if(!mo_connect){
    mo_contract_type = "burn_nft";
    device_alert();
  }


  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){

      alert_custom("meta_3");
      // location.href='db/logout.php';
      return;
    }

    web3.eth.net.getId(function(error, id){
      if(error){
        console.log(error);
      }
      if(id!=conn_networkId){
        if(conn_networkId==11155111){

          alert_custom("meta_1");
        }else{

          alert_custom("meta_2");
        }
        return;
      }else{
        $(".bg-lock").css("display","block");
        web3.eth.getAccounts(function(error, accounts){
          if(error){
            console.log(error);
          }
          var account = accounts[0];
          contracts.Artwork.deployed().then(function(instance){
            db_transaction("burn","insert");
              setTimeout(function(){$(".bg-lock").css("display","block");},100);
            var artworkInstance = instance;
            return artworkInstance.burn(item_idx,item_amount,{from: account});
          }).then(function(result){
            // $(".bg-lock").css("display","none");
            var event_data = JSON.stringify(result);
            let res_data = JSON.parse(event_data);

            console.log("발행 : "+  event_data);
            console.log("발행 tx : "+  res_data.tx);
            console.log("발행 bhash : "+  res_data.receipt.blockHash);
            console.log("발행 blockno : "+  res_data.receipt.blockNumber);
            console.log("발행2 ID : "+  res_data.logs[0].args.id);
            console.log("발행2 Amount : "+  res_data.logs[0].args.value);



            $('#chain_idx').val(res_data.logs[0].args.id);
            $('#owner_acc').val(res_data.logs[0].args.to);
            $('#tx_id').val(res_data.tx);
            $('#block_hash').val(res_data.receipt.blockHash);
            $('#block_number').val(res_data.receipt.blockNumber);

            if($('#chain_idx').val()==""){
              alert_custom("meta_6");
            }else{

              burn_txid = res_data.tx;
              db_delist_update();
            }

            }).catch(function(err){
              $(".bg-lock").css("display","none");
              db_transaction("burn","cancel");
            console.log(err.message);
          });
        });

      }
    });



  }else{
  alert_custom("meta_connect");

  }


}
function db_delist_update(){
  var action = "db/nft_delist_db.php";
  var forms =   $('#form2');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);
  formData.append("bunr_tx_ix",burn_txid);
  formData.append("form_meta_url",meta_url);
  formData.append("item_idx",item_idx);
post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_7");
                      // location.reload();
                    location.href="mypage";


}else{

                       alert_custom("meta_8");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}
var UserAgent;
function device_alert(){
  UserAgent = navigator.userAgent;
  if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)
  {
    onConnect();
    return;
  }else{
  UserAgent = "web";
  }
}
var myBalanceDsp=0,mo_contract_type;
async function buy_nft(owner,id,amount,price,currency){
  owner_addr = owner;
  item_idx = id;
  item_amount= amount;
  item_price = price;
  currency_type = currency;

  if(global_php_my_account==""){
    alert_custom("chk_sign");
    return;
  }

  if(global_php_buy_flag=="N"){
    alert_custom("meta_buy_reject");
        return;
  }

  if(!mo_connect){
    mo_contract_type = "buy_nft";
    device_alert();
  }

  server_data();

  $('#form_price_eth').val(price);

  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  console.log(selectedAccount);

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }
    if(selectedAccount.toUpperCase()==$('#form_creator').val().toUpperCase()){
      alert_custom("meta_10");
      return;
    }
      if(currency_type==1){
        web3.eth.net.getId(function(error, id){
          if(error){
            console.log(error);
          }
          if(id!=conn_networkId){
            if(conn_networkId==11155111){
              alert_custom("meta_1");
            }else{
              alert_custom("meta_2");
            }
            return;
          }else{
            $(".bg-lock").css("display","block");
                contracts.Artwork.deployed().then(function(instance){
                  var artworkInstance = instance;
                  const tokenContract = new web3.eth.Contract(minABI,"0x8C661806f716652B637728355cC4e2620D428F99"); //토큰 contract
                  return tokenContract.methods.balanceOf(selectedAccount).call();
                }).then(function(result){
                  console.log(result);
                  if(result>0){
                    myBalanceDsp = web3.utils.fromWei(result , 'ether');
                    console.log("보유량: " +Number(myBalanceDsp).toFixed(3));
                         if(global_php_approve_flag=="N"){
                           allowanceChk();
                         }else{
                                 contracts.Artwork.deployed().then(function(instance){
                                     db_transaction("buy_nft","insert");
                                     setTimeout(function(){$(".bg-lock").css("display","block");},100);

                                   if(platform_addr==""){
                                     alert("Error.");
                                     return;
                                   }
                                   var artworkInstance = instance;
                                   var amount = item_amount;
                                   var price = item_price;
                                   var totalPrice = (parseFloat(price)+parseFloat(price*(fee_rate/100))).toFixed(10);
                                   var buyFee = (parseFloat(price*(fee_rate/100))).toFixed(10);
                                   var valueFloat = parseFloat(totalPrice); //1.25% 추가
                                   var fee_rate_100 = (fee_rate*100);

                                   if(myBalanceDsp <valueFloat){
                                     console.log("dsp : "+myBalanceDsp+" , price : "+valueFloat);
                                      alert_custom("meta_dsp_no");
                                     return;
                                   }

                                   //erc20 구매
                                     return artworkInstance.buyNFT(owner_addr,item_idx,item_amount,web3.utils.toWei(String(buyFee), 'ether'),web3.utils.toWei(String(valueFloat), 'ether'),currency_type, {from: selectedAccount});
                                 }).then(function(result){
                                   var event_data = JSON.stringify(result);
                                   let res_data = JSON.parse(event_data);

                                   console.log("발행 : "+  event_data);
                                   console.log("발행 tx : "+  res_data.tx);
                                   console.log("발행 bhash : "+  res_data.receipt.blockHash);
                                   console.log("발행 blockno : "+  res_data.receipt.blockNumber);
                                   console.log("발행2 ID : "+  res_data.logs[0].args.id);
                                   console.log("발행2 Amount : "+  res_data.logs[0].args.value);

                                   $('#owner_acc').val(res_data.logs[0].args.to);
                                   $('#tx_id').val(res_data.tx);
                                   $('#block_hash').val(res_data.receipt.blockHash);
                                   $('#block_number').val(res_data.receipt.blockNumber);

                                   if($('#tx_id').val()==""){
                                     alert_custom("meta_11");
                                   }else{
                                     if(res_data.receipt.status=="0x1"){
                                        db_buy_update();
                                     }

                                   }

                                   }).catch(function(err){
                                     $(".bg-lock").css("display","none");
                                     db_transaction("buy_nft","cancel");
                                   console.log(err.message);
                                 });
                         }
                  }else{
                    alert_custom("meta_dsp_zero");
                    $(".bg-lock").css("display","none");
                    return;
                  }
                  }).catch(function(err){
                    $(".bg-lock").css("display","none");
                  console.log(err.message);
                });
          }



        });
      }else{//ETH 구매
        web3.eth.net.getId(function(error, id){
          if(error){
            console.log(error);
          }

          if(id!=conn_networkId){
            if(conn_networkId==11155111){
              alert_custom("meta_1");
            }else{
              alert_custom("meta_2");
            }
            return;
          }else{
            $(".bg-lock").css("display","block");
            web3.eth.getAccounts(function(error, accounts){
              if(error){
                console.log(error);
              }
              var account = accounts[0];
              contracts.Artwork.deployed().then(function(instance){
                  db_transaction("buy_nft","insert");
                  setTimeout(function(){$(".bg-lock").css("display","block");},100);

                if(platform_addr==""){
                  alert("Error.");
                  return;
                }
                var artworkInstance = instance;
                var amount = item_amount;
                // var price = 0.012;
                var price = item_price;
                var totalPrice = (parseFloat(price)+parseFloat(price*(fee_rate/100))).toFixed(10);
                var buyFee = (parseFloat(price*(fee_rate/100))).toFixed(10);
                var valueFloat = parseFloat(totalPrice); //1.25% 추가
                var fee_rate_100 = (fee_rate*100);

                // buyNFT(address payable _owner,uint256 _tokenId, uint256 _amount,uint256 _fee, uint256 _price, uint256 _currency)
                //ETH 구매
                  return artworkInstance.buyNFT(owner_addr,item_idx,item_amount,web3.utils.toWei(String(buyFee), 'ether'),web3.utils.toWei(String(valueFloat), 'ether'),currency_type, {from: account, value: web3.utils.toWei(String(valueFloat), 'ether')});



              }).then(function(result){
                // $(".bg-lock").css("display","none");
                var event_data = JSON.stringify(result);
                let res_data = JSON.parse(event_data);

                console.log("발행 : "+  event_data);
                console.log("발행 tx : "+  res_data.tx);
                console.log("발행 bhash : "+  res_data.receipt.blockHash);
                console.log("발행 blockno : "+  res_data.receipt.blockNumber);
                console.log("발행2 ID : "+  res_data.logs[0].args.id);
                console.log("발행2 Amount : "+  res_data.logs[0].args.value);

                $('#owner_acc').val(res_data.logs[0].args.to);
                $('#tx_id').val(res_data.tx);
                $('#block_hash').val(res_data.receipt.blockHash);
                $('#block_number').val(res_data.receipt.blockNumber);

                //status 0x1 성공

                if($('#tx_id').val()==""){
                  alert_custom("meta_11");
                }else{
                  if(res_data.receipt.status=="0x1"){
                     db_buy_update();
                  }
                }

                }).catch(function(err){
                  $(".bg-lock").css("display","none");
                  db_transaction("buy_nft","cancel");
                console.log(err.message);
              });
            });

          }
        });

      }







  }else{
  alert_custom("meta_connect");
  }


}

function db_auction_mint_update(){
  var action = "db/nft_auction_mint_update.php";
  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);



// return;

post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_12");
                      // location.reload();
                    location.href="mypage";


}else{

                       alert_custom("meta_13");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

function db_buymint_update(){
  var action = "db/nft_usermint_update.php";
  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);



// return;

post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_12");
                      // location.reload();
                    location.href="mypage";


}else{

                       alert_custom("meta_13");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}


function db_buy_update(){
  var action = "db/nft_buy_update.php";
  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);



// return;

post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_12");
                      // location.reload();
                    location.href="mypage";


}else{
                       alert_custom("meta_13");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

// function server_data(){
//   $.ajax({
//              type: 'post',
//              dataType: 'json',
//              url: 'db/server_db.php',
//              data: {'ajax_on':1},
//              success: function (data) {
//                platform_addr = data[0].platform_address;
//                fee_rate = data[0].fee_rate;
//              },error: function (request, status, error) {
//              },complete: function () {
//              }
//          });
// }

var item_meta_url,mint_type;
async function buy_auction_mint(meta,amount,price,currency,type,owner){
  //device_alert();
  item_amount= amount;
  item_price = price;
  item_meta_url = meta;
  currency_type = currency;
  mint_type = type;
  owner_addr = owner;

  if(global_php_my_account==""){
    alert_custom("chk_sign");
    return;
  }


  if(!mo_connect){
    mo_contract_type = "buy_auction_mint";
    device_alert();
  }

  server_data();



  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }
    web3.eth.net.getId(function(error, id){
      if(error){
        console.log(error);
      }
      if(id!=conn_networkId){
        if(conn_networkId==11155111){
          alert_custom("meta_1");
        }else{
          alert_custom("meta_2");
        }
        return;
      }else{//

        $(".bg-lock").css("display","block");

        if(currency_type==1){//ERC20
                  contracts.Artwork.deployed().then(function(instance){
                    var artworkInstance = instance;
                    const tokenContract = new web3.eth.Contract(minABI,"0x8C661806f716652B637728355cC4e2620D428F99"); //토큰 contract
                    return tokenContract.methods.balanceOf(selectedAccount).call();
                  }).then(function(result){
                    console.log(result);
                    if(result>0){
                      myBalanceDsp = web3.utils.fromWei(result , 'ether');
                      console.log("보유량: " +Number(myBalanceDsp).toFixed(3));
                           if(global_php_approve_flag=="N"){
                             allowanceChk();
                           }else{
                                   contracts.Artwork.deployed().then(function(instance){
                                       db_transaction("auction_mint","insert");
                                       setTimeout(function(){$(".bg-lock").css("display","block");},100);

                                     if(platform_addr==""){
                                       alert("Error.");
                                       return;
                                     }
                                     var artworkInstance = instance;
                                     var amount = item_amount;
                                     var price = item_price;
                                     var totalPrice = (parseFloat(price)+parseFloat(price*(fee_rate/100))).toFixed(10);
                                     var buyFee = (parseFloat(price*(fee_rate/100))).toFixed(10);
                                     var valueFloat = parseFloat(totalPrice); //1.25% 추가
                                     var fee_rate_100 = (fee_rate*100);

                                     if(myBalanceDsp <valueFloat){
                                       console.log("dsp : "+myBalanceDsp+" , price : "+valueFloat);
                                        alert_custom("meta_dsp_no");
                                       return;
                                     }

                                     //erc20 구매
                                     if(mint_type=="admin"){
                                         return artworkInstance.mintTrade(item_meta_url,1,web3.utils.toWei(String(valueFloat), 'ether'),currency_type, {from: selectedAccount});
                                     }else{
                                       return artworkInstance.mintTrade(item_meta_url,1,web3.utils.toWei(String(valueFloat), 'ether'),currency_type, {from: selectedAccount});

                                         // return artworkInstance.mintAuction(owner_addr,item_meta_url,web3.utils.toWei(String(buyFee), 'ether'),web3.utils.toWei(String(valueFloat), 'ether'),currency_type, {from: selectedAccount});
                                     }

                                   }).then(function(result){
                                     var event_data = JSON.stringify(result);
                                     let res_data = JSON.parse(event_data);

                                     console.log("발행 : "+  event_data);
                                     console.log("발행 tx : "+  res_data.tx);
                                     console.log("발행 bhash : "+  res_data.receipt.blockHash);
                                     console.log("발행 blockno : "+  res_data.receipt.blockNumber);
                                     console.log("발행2 ID : "+  res_data.logs[0].args.id);
                                     console.log("발행2 Amount : "+  res_data.logs[0].args.value);

                                     $('#owner_acc').val(res_data.logs[0].args.to);
                                     $('#tx_id').val(res_data.tx);
                                     $('#block_hash').val(res_data.receipt.blockHash);
                                     $('#block_number').val(res_data.receipt.blockNumber);
                                     $('#form_token_idx').val(res_data.logs[0].args.id);

                                     if($('#tx_id').val()==""){
                                       alert_custom("meta_11");
                                     }else{
                                       if(res_data.receipt.status=="0x1"){
                                          db_auction_mint_update();
                                       }

                                     }

                                     }).catch(function(err){
                                       $(".bg-lock").css("display","none");
                                       db_transaction("auction_mint","cancel");
                                     console.log(err.message);
                                   });
                           }
                    }else{
                      alert_custom("meta_dsp_zero");
                      $(".bg-lock").css("display","none");
                      return;
                    }
                    }).catch(function(err){
                      $(".bg-lock").css("display","none");
                    console.log(err.message);
                  });
        }else if(currency_type==0){//ETH
          contracts.Artwork.deployed().then(function(instance){
            db_transaction("auction_mint","insert");
              setTimeout(function(){$(".bg-lock").css("display","block");},100);
            if(platform_addr==""){
              alert("Error.");
              return;
            }
            var artworkInstance = instance;
            var price = item_price;
            var totalPrice = (parseFloat(price)+parseFloat(price*(fee_rate/100))).toFixed(10);
            var buyFee = (parseFloat(price*(fee_rate/100))).toFixed(10);
            var valueFloat = parseFloat(totalPrice); //1.25% 추가
            var fee_rate_100 = (fee_rate*100);
            var royal_rate_100 = (royal_rate*100);

            if(mint_type=="admin"){
              return artworkInstance.mintTrade(item_meta_url,1,price,currency_type, {from: selectedAccount, value: web3.utils.toWei(String(valueFloat), 'ether')});
                // return artworkInstance.mintTrade(item_meta_url,price,currency_type, {from: selectedAccount, value: web3.utils.toWei(String(valueFloat), 'ether')});
            }else{
              return artworkInstance.mintTrade(item_meta_url,1,price,currency_type, {from: selectedAccount, value: web3.utils.toWei(String(valueFloat), 'ether')});

              // return artworkInstance.mintAuction(owner_addr,item_meta_url,web3.utils.toWei(String(buyFee), 'ether'),price,currency_type, {from: selectedAccount, value: web3.utils.toWei(String(valueFloat), 'ether')});
            }
          }).then(function(result){

            var event_data = JSON.stringify(result);
            let res_data = JSON.parse(event_data);

            console.log("발행 : "+  event_data);
            console.log("발행 tx : "+  res_data.tx);
            console.log("발행 bhash : "+  res_data.receipt.blockHash);
            console.log("발행 blockno : "+  res_data.receipt.blockNumber);
            console.log("발행2 ID : "+  res_data.logs[0].args.id);
            console.log("발행2 Amount : "+  res_data.logs[0].args.value);

            $('#owner_acc').val(res_data.logs[0].args.to);
            $('#tx_id').val(res_data.tx);
            $('#block_hash').val(res_data.receipt.blockHash);
            $('#block_number').val(res_data.receipt.blockNumber);
            $('#form_token_idx').val(res_data.logs[0].args.id);


            if($('#tx_id').val()==""){
              alert_custom("meta_11");
            }else{

              db_auction_mint_update();
            }

            }).catch(function(err){
              $(".bg-lock").css("display","none");
              db_transaction("auction_mint","cancel");
            console.log(err.message);
          });
        }

          //


      }
    });



  }else{
  alert_custom("meta_connect");

  }


}


var resell_mintType;
//재판매 발행
async function resell_mint_nft(tokenid,type){
  //device_alert();
tokenId = tokenid;
resell_mintType = type;

// alert($('#form_offer_mem_idx').val());
//
// return;
if(!mo_connect){
  mo_contract_type = "resell_mint_nft";
  device_alert();
}

  if($('#form_price').val() ==null || $('#form_price').val()==""){
    alert_custom("meta_14");
    return;
  }

  if($('#form_royalty').val() ==null || $('#form_royalty').val()==""){
    alert_custom("meta_15");
    return;
  }

  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){

    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }

    web3.eth.net.getId(function(error, id){
      if(error){
        console.log(error);
      }
      if(id!=conn_networkId){
        if(conn_networkId==11155111){
          alert_custom("meta_1");
        }else{
          alert_custom("meta_2");
        }

        return;
      }else{
        $(".bg-lock").css("display","block");
        web3.eth.getAccounts(function(error, accounts){
          if(error){
            console.log(error);
          }
          var account = accounts[0];
          contracts.Artwork.deployed().then(function(instance){
                db_transaction("resell_mint","insert");
              setTimeout(function(){$(".bg-lock").css("display","block");},100);
            var artworkInstance = instance;
            var valueFloat = parseFloat($('#form_price').val());
                valueFloat = web3.utils.toWei(String(valueFloat), 'ether');
                 // reSellMint(uint256 _tokenId, uint256 _amount, uint256 _price)
            return artworkInstance.reSellMint(tokenId,$('#form_amount').val(),valueFloat,{from: account});
          }).then(function(result){
            // $(".bg-lock").css("display","none");
            var event_data = JSON.stringify(result);
            let res_data = JSON.parse(event_data);

            console.log("발행 : "+  event_data);
            console.log("발행 tx : "+  res_data.tx);
            console.log("발행 bhash : "+  res_data.receipt.blockHash);
            console.log("발행 blockno : "+  res_data.receipt.blockNumber);


            $('#tx_id').val(res_data.tx);
            $('#block_hash').val(res_data.receipt.blockHash);
            $('#block_number').val(res_data.receipt.blockNumber);
            $('#chain_idx').val(tokenId);
            $('#owner_acc').val(res_data.receipt.from);


            if($('#tx_id').val()==""){
              alert_custom("meta_16");
            }else{

              db_resell_update();
            }

            }).catch(function(err){
              $(".bg-lock").css("display","none");
            console.log(err.message);
          });
        });

      }
    });



  }else{
  alert_custom("meta_connect");

  }


}
function db_resell_update(){
  var action = "db/nft_resell_update_db.php";
  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);
  formData.append("mint_type",resell_mintType);



post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_4");
                      // location.reload();
                    location.href="mypage";


}else{
     alert_custom("meta_5");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}
var owned_idx,listing_tx;
async function resell_burn_nft(item_id,own_idx,list_tx){
  //device_alert();
  item_idx = item_id;
  owned_idx = own_idx;
  listing_tx = list_tx;

  if(!mo_connect){
    mo_contract_type = "resell_burn_nft";
    device_alert();
  }


  console.log("item_idx: "+ item_idx+" listing_tx : "+ listing_tx);

  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }

    web3.eth.net.getId(function(error, id){
      if(error){
        console.log(error);
      }
      if(id!=conn_networkId){
        if(conn_networkId==11155111){
          alert_custom("meta_1");
        }else{
          alert_custom("meta_2");
        }
        return;
      }else{
        $(".bg-lock").css("display","block");
        web3.eth.getAccounts(function(error, accounts){
          if(error){
            console.log(error);
          }
          var account = accounts[0];
          contracts.Artwork.deployed().then(function(instance){
                      db_transaction("resell_burn","insert");
              setTimeout(function(){$(".bg-lock").css("display","block");},100);
            var artworkInstance = instance;
            return artworkInstance.reSellDelist(item_idx,{from: account});
          }).then(function(result){
            // $(".bg-lock").css("display","none");
            var event_data = JSON.stringify(result);
            let res_data = JSON.parse(event_data);

            console.log("발행 : "+  event_data);
            console.log("발행 tx : "+  res_data.tx);
            console.log("발행 bhash : "+  res_data.receipt.blockHash);
            console.log("발행 blockno : "+  res_data.receipt.blockNumber);
            // console.log("발행2 ID : "+  res_data.logs[0].args.id);
            // console.log("발행2 Amount : "+  res_data.logs[0].args.value);
            //
            //
            //
            // $('#chain_idx').val(res_data.logs[0].args.id);
            // $('#owner_acc').val(res_data.logs[0].args.to);
            $('#tx_id').val(res_data.tx);
            $('#block_hash').val(res_data.receipt.blockHash);
            $('#block_number').val(res_data.receipt.blockNumber);

            if($('#tx_id').val()==""){
              alert_custom("meta_6");
            }else{

              burn_txid = res_data.tx;
              db_resell_delist_update();
            }

            }).catch(function(err){
              db_transaction("resell_burn","cancel");
              $(".bg-lock").css("display","none");
            console.log(err.message);
          });
        });

      }
    });



  }else{
  alert_custom("meta_connect");

  }


}
function db_resell_delist_update(){
  var action = "db/nft_resell_delist_db.php";
  var forms =   $('#form2');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);
  formData.append("burn_tx_id",burn_txid);
  formData.append("form_owned_idx",owned_idx);
  formData.append("item_idx",item_idx);
  formData.append("form_list_tx",listing_tx);


post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_7");
                      // location.reload();
                    location.href="mypage";


}else{
                       alert_custom("meta_8");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

var listing_idx,mint_idx,buy_type;
async function resell_buy_nft(owner,id,amount,price,royalty,own_idx,list_idx,mint_id,currency,type){
  //device_alert();
// zeroApprove();
// return;
  owner_addr = owner;
  item_idx = id;
  item_amount= amount;
  item_price = price;
  royal_rate = royalty;
  owned_idx = own_idx;
  listing_idx = list_idx;
  mint_idx = mint_id;
  currency_type = currency;
  buy_type = type;

  if(global_php_my_account==""){
    alert_custom("chk_sign");
    return;
  }

  if(global_php_buy_flag=="N"){
    alert_custom("meta_buy_reject");
        return;
  }

  if(!mo_connect){
    mo_contract_type = "resell_buy_nft";
    device_alert();
  }


  var price_krw= (current_usd*price).toFixed(0);


  $('#form_token_idx').val(item_idx);
  $('#form_mint_idx').val(mint_idx);
  $('#form_listing_idx').val(listing_idx);
  $('#form_price_eth').val(price);

  $('#form_price_usd').val(commas(price_krw));
  $('#form_buy_type').val(buy_type);




  console.log("resell : "+owned_idx +" "+ listing_idx+ " "+mint_idx);

// 23,46,44
  server_data();

  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }
// console.log("account : "+selectedAccount.toUpperCase() +" "+ owner_addr.toUpperCase());
    if(selectedAccount.toUpperCase()==$('#form_creator').val().toUpperCase()){
      alert_custom("meta_10");
      return;
    }


    if(currency_type==1){
      web3.eth.net.getId(function(error, id){
        if(error){
          console.log(error);
        }

        $(".bg-lock").css("display","block");
          web3.eth.getAccounts(function(error, accounts){
            if(error){
              console.log(error);
            }
            var account = accounts[0];
            contracts.Artwork.deployed().then(function(instance){
              var artworkInstance = instance;
              const tokenContract = new web3.eth.Contract(minABI,"0x8C661806f716652B637728355cC4e2620D428F99"); //토큰 contract
              return tokenContract.methods.balanceOf(account).call();
            }).then(function(result){
              console.log(result);

              if(result>0){
                myBalanceDsp = web3.utils.fromWei(result , 'ether');
                // $('#id_my_eth').html(Number(myBalance).toFixed(3) +" ETH");
                // $('#id_my_eth_w').html(Number(myBalance).toFixed(3) +" ETH");
                // $('#my_eth').val(Number(myBalance).toFixed(3));
                     console.log("보유량: " +Number(myBalanceDsp).toFixed(3));
                     if(global_php_approve_flag=="N"){
                       allowanceChk();
                     }else{
                       web3.eth.net.getId(function(error, id){
                         if(error){
                           console.log(error);
                         }

                         if(id!=conn_networkId){
                           if(conn_networkId==11155111){
                             alert_custom("meta_1");
                           }else{
                             alert_custom("meta_2");
                           }
                           return;
                         }else{
                           web3.eth.getAccounts(function(error, accounts){
                             if(error){
                               console.log(error);
                             }
                             var account = accounts[0];
                             contracts.Artwork.deployed().then(function(instance){
                                 db_transaction("resell_buy_nft","insert");
                                 setTimeout(function(){$(".bg-lock").css("display","block");},100);

                               if(platform_addr==""){
                                 alert("Error.");
                                 return;
                               }
                               // var artworkInstance = instance;
                               // var amount = item_amount;
                               // // var price = 0.012;
                               // var price = item_price;
                               // var totalPrice = (parseFloat(price)+parseFloat(price*(fee_rate/100))).toFixed(10);
                               // var buyFee = (parseFloat(price*(fee_rate/100))).toFixed(10);
                               // var valueFloat = parseFloat(totalPrice); //1.25% 추가
                               // var fee_rate_100 = (fee_rate*100);

                               //erc20 구매
                               // return artworkInstance.buyNFT(owner_addr,item_idx,item_amount,web3.utils.toWei(String(buyFee), 'ether'),valueFloat,currency_type, {from: account});
                                 // return artworkInstance.buyNFT(owner_addr,item_idx,item_amount,web3.utils.toWei(String(buyFee), 'ether'),web3.utils.toWei(String(valueFloat), 'ether'),currency_type, {from: account});


                                 var artworkInstance = instance;
                                 var amount = item_amount;
                                 // var price = 0.012;
                                 var price = item_price;
                                 var totalPrice = (parseFloat(price)+parseFloat(price*(fee_rate/100))).toFixed(10);
                                 var buyFee = (parseFloat(price*(fee_rate/100))).toFixed(10);
                                 var valueFloat = parseFloat(totalPrice); //1.25% 추가
                                 var fee_rate_100 = (fee_rate*100);
                                 var royal_rate_100 = (royal_rate*100);

                                 if(myBalanceDsp <valueFloat){
                                   console.log("dsp : "+myBalanceDsp+" , price : "+valueFloat);
                                    alert_custom("meta_dsp_no");
                                   return;
                                 }

                                 // reSellBuyNFT(address payable _owner,uint256 _tokenId, uint256 _amount, uint256 _royalRate,uint256 _fee,uint256 _price)
                                 return artworkInstance.reSellBuyNFT(owner_addr,item_idx,item_amount,royal_rate_100,web3.utils.toWei(String(buyFee), 'ether'),web3.utils.toWei(String(valueFloat), 'ether'), {from: account});


                             }).then(function(result){
                               // $(".bg-lock").css("display","none");
                               var event_data = JSON.stringify(result);
                               let res_data = JSON.parse(event_data);

                               console.log("발행 : "+  event_data);
                               console.log("발행 tx : "+  res_data.tx);
                               console.log("발행 bhash : "+  res_data.receipt.blockHash);
                               console.log("발행 blockno : "+  res_data.receipt.blockNumber);
                               console.log("발행2 ID : "+  res_data.logs[0].args.id);
                               console.log("발행2 Amount : "+  res_data.logs[0].args.value);

                               $('#owner_acc').val(res_data.logs[0].args.to);
                               $('#tx_id').val(res_data.tx);
                               $('#block_hash').val(res_data.receipt.blockHash);
                               $('#block_number').val(res_data.receipt.blockNumber);
                               // $('#block_number').val(res_data.receipt.status);



                               if($('#tx_id').val()==""){
                                 alert_custom("meta_11");
                               }else{
                                 // if(res_data.receipt.status=="0x1"){
                                 //    db_buy_update();
                                 // }
                                 if(res_data.receipt.status=="0x1"){
                                   db_resell_buy_update();
                                 }
                               }

                               }).catch(function(err){
                                 $(".bg-lock").css("display","none");
                                 db_transaction("resell_buy_nft","cancel");
                               console.log(err.message);
                             });
                           });

                         }
                       });

                     }

              }else{
                alert_custom("meta_dsp_zero");
                $(".bg-lock").css("display","none");
                return;
              }
              }).catch(function(err){
                $(".bg-lock").css("display","none");
              console.log(err.message);
            });
          });
      });
    }else{//ETH 구매
    web3.eth.net.getId(function(error, id){
      if(error){
        console.log(error);
      }

      if(id!=conn_networkId){
        if(conn_networkId==11155111){
          alert_custom("meta_1");
        }else{
          alert_custom("meta_2");
        }
        return;
      }else{
        $(".bg-lock").css("display","block");
        web3.eth.getAccounts(function(error, accounts){
          if(error){
            console.log(error);
          }
          var account = accounts[0];
          contracts.Artwork.deployed().then(function(instance){
            db_transaction("resell_buy_nft","insert");
              setTimeout(function(){$(".bg-lock").css("display","block");},100);

            if(platform_addr==""){
              alert("Error.");
              return;
            }
            var artworkInstance = instance;
            var amount = item_amount;
            // var price = 0.012;
            var price = item_price;
            var totalPrice = (parseFloat(price)+parseFloat(price*(fee_rate/100))).toFixed(10);
            var buyFee = (parseFloat(price*(fee_rate/100))).toFixed(10);
            var valueFloat = parseFloat(totalPrice); //1.25% 추가
            var fee_rate_100 = (fee_rate*100);
            var royal_rate_100 = (royal_rate*100);



            // reSellBuyNFT(address payable _owner,uint256 _tokenId, uint256 _amount, uint256 _royalRate,uint256 _fee,uint256 _price)
            return artworkInstance.reSellBuyNFT(owner_addr,item_idx,item_amount,royal_rate_100,web3.utils.toWei(String(buyFee), 'ether'),valueFloat, {from: account, value: web3.utils.toWei(String(valueFloat), 'ether')});

          }).then(function(result){
            // $(".bg-lock").css("display","none");
            var event_data = JSON.stringify(result);
            let res_data = JSON.parse(event_data);

            console.log("발행 : "+  event_data);
            console.log("발행 tx : "+  res_data.tx);
            console.log("발행 bhash : "+  res_data.receipt.blockHash);
            console.log("발행 blockno : "+  res_data.receipt.blockNumber);
            console.log("발행2 ID : "+  res_data.logs[0].args.id);
            console.log("발행2 Amount : "+  res_data.logs[0].args.value);

            $('#owner_acc').val(res_data.logs[0].args.to);
            $('#tx_id').val(res_data.tx);
            $('#block_hash').val(res_data.receipt.blockHash);
            $('#block_number').val(res_data.receipt.blockNumber);



            if($('#tx_id').val()==""){
              alert_custom("meta_11");
            }else{
              if(res_data.receipt.status=="0x1"){
                db_resell_buy_update();
              }
            }

            }).catch(function(err){
              $(".bg-lock").css("display","none");
            console.log(err.message);
          });
        });

      }
    });
  }



  }else{
  alert_custom("meta_connect");

  }


}

function db_resell_buy_update(){
  var action = "db/nft_resell_update_buy_db.php";
  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);
  formData.append("form_owned_idx",owned_idx);


// return;

post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock3").css("display","none");
                $(".bg-lock").css("display","none");
                      alert_custom("meta_12");
                    location.href="mypage";


}else{
                       alert_custom("meta_13");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

async function offer_on(own_idx,list_idx,currency,owner_idx){
  owned_idx = own_idx;
  listing_idx = list_idx;
  currency_type = currency;

  $('#form_listing_idx').val(listing_idx);
  $('#form_owned_idx').val(owned_idx);
  $('#form_owner_idx').val(owner_idx);


if(global_php_my_account==""){
  alert_custom("chk_sign");
  return;
}

if(!mo_connect){
  mo_contract_type = "offer_on";
  device_alert();
}

const accounts = await web3.eth.getAccounts();
selectedAccount = accounts[0];
if(selectedAccount==null ||selectedAccount==""){
      alert_custom("meta_connect");
      return;
  }
if(selectedAccount!=""&&selectedAccount!=null){
      if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
        alert_custom("meta_3");
        return;
      }
      if(selectedAccount.toUpperCase()==$('#form_creator').val().toUpperCase()){
        alert_custom("meta_10");
        return;
      }
      web3.eth.net.getId(function(error, id){
        if(id!=conn_networkId){
          if(conn_networkId==11155111){
            alert_custom("meta_1");
          }else{
            alert_custom("meta_2");
          }
          return;
        }else{

          if(currency_type==1){//ERC20
            erc20Balance();

          }else{//ETH
            web3.eth.getBalance(selectedAccount, function(err, result) {
             myBalance = web3.utils.fromWei(result , 'ether');
             $('#id_my_eth_of').html(Number(myBalance).toFixed(3) +" ETH");
             $('#id_my_eth_w').html(Number(myBalance).toFixed(3) +" ETH");
             $('#my_eth').val(Number(myBalance).toFixed(3));
              $('#form_balance').val(Number(myBalance).toFixed(3));

             console.log("보유량: " +Number(myBalance).toFixed(3));
            });
          }

            $('#id-modal-offer').click();
        }
      });
    }else{
      alert_custom("mpa_3");
    }
}

async function auction_on(currency){
currency_type = currency;
if(global_php_my_auc_flag=="N"){
alert_custom("auc_flag_no");
  return;
}

if(global_php_my_account==""){
  alert_custom("chk_sign");
  return;
}

// const accounts = await web3.eth.getAccounts();
// selectedAccount = accounts[0];
//   console.log(selectedAccount);
//   if(selectedAccount==null ||selectedAccount==""){
//       alert_custom("meta_connect");
//       return;
//   }

if(!mo_connect){
  mo_contract_type = "auction_on";
  device_alert();
}

const accounts = await web3.eth.getAccounts();
selectedAccount = accounts[0];
if(selectedAccount==null ||selectedAccount==""){
      alert_custom("meta_connect");
      return;
  }
if(selectedAccount!=""&&selectedAccount!=null){
      if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
        alert_custom("meta_3");
        return;
      }
      if(selectedAccount.toUpperCase()==$('#form_creator').val().toUpperCase()){
        alert_custom("meta_10");
        return;
      }
      web3.eth.net.getId(function(error, id){
        if(id!=conn_networkId){
          if(conn_networkId==11155111){
            alert_custom("meta_1");
          }else{
            alert_custom("meta_2");
          }
          return;
        }else{

          if(currency_type==1){//ERC20
            erc20Balance();

          }else{//ETH
            web3.eth.getBalance(selectedAccount, function(err, result) {
             myBalance = web3.utils.fromWei(result , 'ether');
             $('#id_my_eth').html(Number(myBalance).toFixed(3) +" ETH");
             $('#id_my_eth_w').html(Number(myBalance).toFixed(3) +" ETH");
             $('#my_eth').val(Number(myBalance).toFixed(3));
             console.log("보유량: " +Number(myBalance).toFixed(3));
            });
          }



            $('#id_ac_chg_box').css("display","");
            $('#id-modal-auction').click();
        }
      });
    }else{
      alert_custom("mpa_3");
    }
}

//ERC20 결제
let minABI = [{"constant": false,"inputs": [{"name": "_to","type": "address"},{"name": "_value","type": "uint256"}],"name": "transfer","outputs": [{"name": "","type": "bool"}],"type": "function"},{"constant": false,"inputs": [{"name": "_spender","type": "address"},{"name": "_value","type": "uint256"}],"name": "approve","outputs": [{"name": "","type": "bool"}],"payable": false,"stateMutability": "nonpayable","type": "function"},
{"constant": false,"inputs": [{"internalType": "address","name": "owner","type": "address"},{"internalType": "address","name": "spender","type": "address"}],"name": "allowance","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"stateMutability": "view","type": "function"},
{"constant": false,"inputs": [{"internalType": "address","name": "account","type": "address"}],"name": "balanceOf","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"stateMutability": "view","type": "function"}];
async function allowanceChk() {

  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }

  web3.eth.net.getId(function(error, id){
    if(error){
      console.log(error);
    }

    $(".bg-lock").css("display","block");
      web3.eth.getAccounts(function(error, accounts){
        if(error){
          console.log(error);
        }
        var account = accounts[0];
        contracts.Artwork.deployed().then(function(instance){
          var artworkInstance = instance;
          const tokenContract = new web3.eth.Contract(minABI,"0x8C661806f716652B637728355cC4e2620D428F99"); //토큰 contract
          return tokenContract.methods.allowance(account,"0xCB2f51932C63F9546Fc11Ec4Ef42F8253FeA3F54").call();
        }).then(function(result){
          console.log(result);

          if(result>0){
            global_php_approve_flag="Y";
              alert_custom("meta_again");
            $(".bg-lock").css("display","none");
            db_approve_update_mem();
            // onApprove();
          }else{
            onApprove();
          }


          }).catch(function(err){
            $(".bg-lock").css("display","none");
          console.log(err.message);
        });
      });


  });
}else{
  alert_custom("meta_connect");

}

}

async function erc20Balance(){
  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];
  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }
  web3.eth.net.getId(function(error, id){
    if(error){
      console.log(error);
    }
    if(id!=conn_networkId){
      if(conn_networkId==11155111){
        alert_custom("meta_1");
      }else{
        alert_custom("meta_2");
      }
      return;
    }else{
        contracts.Artwork.deployed().then(function(instance){
          var artworkInstance = instance;
          const tokenContract = new web3.eth.Contract(minABI,"0x8C661806f716652B637728355cC4e2620D428F99"); //토큰 contract
          return tokenContract.methods.balanceOf(selectedAccount).call();
        }).then(function(result){
          console.log(result);
          if(result>0){
            myBalanceDsp = web3.utils.fromWei(result , 'ether');



            $('#id_my_eth_of').html(Number(myBalanceDsp).toFixed(3) +" DSP");
            $('#id_my_eth').html(Number(myBalanceDsp).toFixed(3) +" DSP");
            $('#id_my_eth_w').html(Number(myBalanceDsp).toFixed(3) +" DSP");
            $('#my_eth').val(Number(myBalanceDsp).toFixed(3));
            $('#form_balance').val(Number(myBalanceDsp).toFixed(3));
            console.log("ERC20 보유량: " +Number(myBalanceDsp).toFixed(3));
          }else{
            myBalanceDsp = 0;
          }
          }).catch(function(err){
          console.log(err.message);
        });
      }
  });
}
}

async function onApprove() {

alert_custom("meta_approve");
  // DSP로 구매 시 최초 1회 토큰 승인이 진행됩니다.

  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }

  web3.eth.net.getId(function(error, id){
    if(error){
      console.log(error);
    }

    $(".bg-lock").css("display","block");
      web3.eth.getAccounts(function(error, accounts){
        if(error){
          console.log(error);
        }
        var account = accounts[0];
        contracts.Artwork.deployed().then(function(instance){
          var artworkInstance = instance;
          db_transaction("approve","insert");
          const tokenContract = new web3.eth.Contract(minABI,"0x8C661806f716652B637728355cC4e2620D428F99"); //토큰 contract
          return tokenContract.methods.approve("0xCB2f51932C63F9546Fc11Ec4Ef42F8253FeA3F54",web3.utils.toWei(String(100000000), 'ether')).send({from: account});
        }).then(function(result){
          console.log(result);

          if(result>0){

          }else{

          }
          var event_data = JSON.stringify(result);
          let res_data = JSON.parse(event_data);

          console.log("발행 : "+  event_data);
          console.log("발행 tx : "+  res_data.transactionHash);
          console.log("발행 bx : "+  res_data.blockHash);
          console.log("발행 to : "+  res_data.from);
          console.log("발행 no : "+  res_data.blockNumber);
          // console.log("발행 bhash : "+  res_data.receipt.blockHash);
          // console.log("발행 blockno : "+  res_data.receipt.blockNumber);
          // console.log("발행2 ID : "+  res_data.logs[0].args.id);
          // console.log("발행2 Amount : "+  res_data.logs[0].args.value);
          //
          $('#owner_acc').val(res_data.from);
          $('#tx_id').val(res_data.transactionHash);
          $('#block_hash').val(res_data.blockHash);
          $('#block_number').val(res_data.blockNumber);



          if($('#tx_id').val()==""){
            $(".bg-lock").css("display","none");
            alert_custom("meta_approve_fail");

          }else{
            db_approve_update();
            // db_resell_buy_update();
          }

          // $(".bg-lock").css("display","none");
          // var event_data = JSON.stringify(result);
          // let res_data = JSON.parse(event_data);
          // onBuy();

          }).catch(function(err){
            $(".bg-lock").css("display","none");
            db_transaction("approve","cancel");
          console.log(err.message);
        });
      });


  });
}else{
    alert_custom("meta_connect");
}

}

async function zeroApprove() {

  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
      alert_custom("meta_3");
      return;
    }

  web3.eth.net.getId(function(error, id){
    if(error){
      console.log(error);
    }

    $(".bg-lock").css("display","block");
      web3.eth.getAccounts(function(error, accounts){
        if(error){
          console.log(error);
        }
        var account = accounts[0];
        contracts.Artwork.deployed().then(function(instance){
          var artworkInstance = instance;

          db_transaction("approve","insert");


          const tokenContract = new web3.eth.Contract(minABI,"0x8C661806f716652B637728355cC4e2620D428F99"); //토큰 contract
          // return tokenContract.methods.allowance(account,"0xCB2f51932C63F9546Fc11Ec4Ef42F8253FeA3F54").call();

          // return tokenContract.methods.balanceOf(account).call();
          return tokenContract.methods.approve("0xCB2f51932C63F9546Fc11Ec4Ef42F8253FeA3F54",web3.utils.toWei(String(0), 'ether')).send({from: account});
        }).then(function(result){
          console.log(result);
          // alert(result);


          if(result>0){

          }else{

          }
          var event_data = JSON.stringify(result);
          let res_data = JSON.parse(event_data);

          console.log("발행 : "+  event_data);
          console.log("발행 tx : "+  res_data.transactionHash);
          console.log("발행 bx : "+  res_data.blockHash);
          console.log("발행 to : "+  res_data.from);
          console.log("발행 no : "+  res_data.blockNumber);

          $('#owner_acc').val(res_data.from);
          $('#tx_id').val(res_data.transactionHash);
          $('#block_hash').val(res_data.blockHash);
          $('#block_number').val(res_data.blockNumber);



          if($('#tx_id').val()==""){
            alert_custom("meta_approve_fail");
            $(".bg-lock").css("display","none");
          }else{
            db_approve_update();

          }

          }).catch(function(err){
            $(".bg-lock").css("display","none");
            db_transaction("approve","cancel");
          console.log(err.message);
          console.log(err.message);
        });
      });


  });
}else{
    alert_custom("meta_connect");
}

}

function db_approve_update(){
  var action = "db/nft_approve_update.php";
  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);



// return;

post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                $(".bg-lock").css("display","none");
                global_php_approve_flag="Y";
                  alert_custom("meta_again");


}else{
                       alert_custom("meta_approve_fail");
                           $(".bg-lock").css("display","none");

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

function db_approve_update_mem(){
  var action = "db/approve_member_update.php";
  var forms =   $('#form1');
  var formData = new FormData(forms[0]);
  formData.append("is_ajax",1);

post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {

}else{

}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

//모바일용
function web3_model(){
  const providerOptions = {
    walletconnect: {
      package: WalletConnectProvider,
      options: {
        infuraId: "2c59f69c6d984fa19df318db7724e716",
        qrcodeModalOptions: {
           mobileLinks: [
             "metamask",
           ],
         },
      }
    }
  };

  web3Modal = new Web3Modal({
    cacheProvider: false, // optional
    providerOptions, // required
    disableInjectedProvider: false, // optional. For MetaMask / Brave / Opera.
  });

  console.log("Web3Modal instance is", web3Modal);

  onConnect();
}


var mo_connect=false;
async function onConnect() {
  //  alert_custom("meta_mo_call");
  console.log("Opening a dialog", web3Modal);
  try {
    provider = await web3Modal.connect();
  } catch(e) {
    console.log("Could not get a wallet connection", e);
    return;
  }


  // Subscribe to accounts change
  provider.on("accountsChanged", (accounts) => {
    if(global_php_my_account.toUpperCase()!=accounts[0].toUpperCase()){

      alert_custom("meta_3");
      location.href='db/logout.php';
      return;
    }

    fetchAccountData();
  });

  // Subscribe to chainId change
  provider.on("chainChanged", (chainId) => {
    fetchAccountData();
  });

  // Subscribe to networkId change
  provider.on("networkChanged", (networkId) => {
    if(networkId!=conn_networkId){
      if(conn_networkId==11155111){
        alert_custom("meta_1");
      }else{
        alert_custom("meta_2");
      }
      return;
    }
    fetchAccountData();
  });

  await refreshAccountData();
}

async function refreshAccountData() {
  await fetchAccountData(provider);
}
var web3;
async function fetchAccountData() {

 // Get a Web3 instance for the wallet
web3 = new Web3(provider);

 console.log("Web3 instance is", web3);

 $.getJSON('WEB3_PASS.json', function(data){
   var ArtworkArtifact = data;
   contracts.Artwork = TruffleContract(ArtworkArtifact);
   contracts.Artwork.setProvider(provider);
 });

 const chainId = await web3.eth.getChainId();
 const chainData = evmChains.getChain(chainId);

// alert(chainData.name);

 const accounts = await web3.eth.getAccounts();

 console.log("Got accounts", accounts);
 selectedAccount = accounts[0];

 const rowResolvers = accounts.map(async (address) => {
   const balance = await web3.eth.getBalance(address);
   const ethBalance = web3.utils.fromWei(balance, "ether");
   const humanFriendlyBalance = parseFloat(ethBalance).toFixed(4);
   // alert(humanFriendlyBalance);
   // alert(global_php_my_account + " "+selectedAccount);

   if(global_php_my_account.toUpperCase()!=selectedAccount.toUpperCase()){
     alert_custom("meta_3");
     onDisconnect();
     return;
   }else{
     mo_connect = true;
     if(mo_contract_type=="buy_nft"){//1차 구매
       buy_nft(owner_addr,item_idx,item_amount,item_price,currency_type);
     }else if(mo_contract_type=="auction_on"){//경매 입찰
       auction_on(currency_type);
     }else if(mo_contract_type=="buy_auction_mint"){//경매 구매
       buy_auction_mint(item_meta_url,item_amount,item_price,currency_type,mint_type,owner_addr);
     }else if(mo_contract_type=="resell_mint_nft"){//재판매
       resell_mint_nft(tokenId,resell_mintType);
     }else if(mo_contract_type=="resell_buy_nft"){//재구매
       resell_buy_nft(owner_addr,item_idx,item_amount,item_price,royal_rate,owned_idx,listing_idx,mint_idx,currency_type,buy_type);
     }else if(mo_contract_type=="approve"){//토큰 승인

     }else if(mo_contract_type=="offer_on"){//메이크 오퍼
       offer_on(currency_type);
     }else if(mo_contract_type=="burn_nft"){//burn
       burn_nft(item_idx,item_amount,meta_url,listing_tx);
     }else if(mo_contract_type=="resell_burn_nft"){//resell delist
       resell_burn_nft(item_idx,owned_idx,listing_tx);
     }






   }
 });


 await Promise.all(rowResolvers);
}

async function onDisconnect() {
  console.log("Killing the wallet connection", provider);
  if(provider.close) {
    await provider.close();

    await web3Modal.clearCachedProvider();
    provider = null;
  }
  selectedAccount = null;
}

//블록체인 동기화
async function etherscan_api(){
  var contract_addr = "0x44EAFb307C2d5f33E09F117C407dDc5B760ea478";
  var api_key = "U5W87F2VXC54JUFR9EW4ETVKI66IE31VB7";
  // var php_account="0x254F2347441590bE38B8646297e49850FdbC4A02";

// var scan_url="https://api-sepolia.etherscan.io/api"+
//      "?module=account"+
//      "&action=token1155tx"+
//      "&contractaddress="+contract_addr+
//      "&address="+global_php_account+
//      "&page=1"+
//      "&offset=10"+
//      "&startblock=0"+
//      "&endblock=99999999"+
//      "&sort=desc"+
//      "&apikey="+api_key;

     var scan_url="https://api.etherscan.io/api"+
          "?module=account"+
          "&action=token1155tx"+
          "&contractaddress="+contract_addr+
          "&address="+global_php_account+
          "&page=1"+
          "&offset=10"+
          "&startblock=0"+
          "&endblock=99999999"+
          "&sort=desc"+
          "&apikey="+api_key;


    const response = await fetch(scan_url);
    const data = await response.json();
    let abi = data.result;
    console.log(abi);//tx

    for(var i=0; i<abi.length; i++){
      if(abi[i].from!="0x0000000000000000000000000000000000000000"){
        // console.log(abi[i].hash);//tx
        // console.log(abi[i].blockHash);
        // console.log(abi[i].blockNumber);
        // console.log(abi[i].from); //판매자
        // console.log(abi[i].to); //구매자
        // console.log(abi[i].tokenID); //contract
        // console.log(abi[i].tokenValue); //contract

        var formData = new FormData();
        formData.append("is_ajax",1);
        formData.append("tx_id",abi[i].hash);
        formData.append("token_id",abi[i].tokenID);
        formData.append("block_hash",abi[i].blockHash);
        formData.append("block_number",abi[i].blockNumber);
        formData.append("seller",abi[i].from);
        formData.append("current_krw",current_usd);
        db_tx_sync(formData);
      }
    }
}

function db_tx_sync(formData){
  var action = "db/tx_sync_chk.php";
  $.ajax({
  type: "POST",
  url: action,
  data: formData,
  processData: false,
  contentType: false,
  success: function(response) {
  console.log("tx_sync_chk : "+response);
  },error: function (request, status, error) {
  console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
  }
  });
}
//블록체인 동기화

//동기화
async function tx_sync_api(tx_hash,mint_idx,type) {

console.log(tx_hash+" "+mint_idx);
// return;

   await web3.eth.getTransactionReceipt(tx_hash).then(function(data){
        let transaction = data;
        let logs = data.logs;
        var action = "db/tx_data_update.php";
        var formData = new FormData();
        console.log(data);
        // console.log(logs[0].data);
        console.log(data.status);

        if(data.status!=true){

          db_fail_update(tx_hash);
          // alert("fail");
           return;
        }


        if(type!="buy_nft"){
          var tokenInfo =   web3.eth.abi.decodeParameter({
                              "tokenInfo": {
                                "tokenId": 'uint256',
                                "amount": 'uint256'
                              }
                              },logs[0].data);
       formData.append("chain_idx",tokenInfo.tokenId);

        }
    formData.append("is_ajax",1);
    formData.append("tx_id",data.transactionHash);
    formData.append("block_hash",data.blockHash);
    formData.append("block_number",data.blockNumber);
    formData.append("mint_idx",mint_idx);
    formData.append("sales_type","basic");
    formData.append("update_type",type);




  post_ing = 1;
  $.ajax({
  type: "POST",
  url: action,
  data: formData,
        processData: false,
        contentType: false,
  success: function(response) {
  post_ing = 0;
  console.log("tx_update : "+response);
  if(response == 'success') {
                        location.reload();
  }else{


  }
  },error: function (request, status, error) {
  console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
  }
  });

    console.log(data.blockHash);
    console.log(data.blockNumber);
    // console.log(data.blockNumber);
    // console.log(tokenInfo.tokenId);//id
    // console.log(tokenInfo.amount);//amount
        // console.log(logs[0].topics[3]);
        // console.log(web3.utils.hexToNumber(0x1e));
    });



    // console.log("발행 bhash : "+  res_data.receipt.blockHash);
    // console.log("발행 blockno : "+  res_data.receipt.blockNumber);
    // console.log("발행2 ID : "+  res_data.logs[0].args.id);
    // console.log("발행2 Amount : "+  res_data.logs[0].args.value);


}

function db_fail_update(tx_id){
  var action = "db/nft_owned_fail_db.php";
  var formData = new FormData();
  formData.append("is_ajax",1);
  formData.append("tx_id",tx_id);
post_ing = 1;
$.ajax({
type: "POST",
url: action,
data: formData,
      processData: false,
      contentType: false,
success: function(response) {
post_ing = 0;
console.log("update : "+response);
if(response == 'success') {
                    location.href="mypage";
}else{
  console.log("fail db : fail");
}
},error: function (request, status, error) {
console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
}
});
}

//지갑 연결
var myBalance;
async function connect_metamask(){

  if (typeof window.ethereum !== 'undefined') {
    const cur_accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    selectedAccount = cur_accounts[0];
    // alert(selectedAccount);
    if(selectedAccount!=""&&selectedAccount!=null){
      web3.eth.net.getId(function(error, id){
      if(id!=conn_networkId){//sepolia
        if(conn_networkId==11155111){
          alert_custom("meta_1");
        }else{
          alert_custom("meta_2");
        }

        return;
      }else{
      account_chk(selectedAccount);


      }
    });

  }else{
    alert("Please sign in metamask.\nPlease run it with a Chrome browser." );
    // window.open('https://metamask.io/download');
  }

  console.log('MetaMask is installed!');

}else{
  alert("Please install metamask.");
  window.open('https://metamask.io/download');
}




}

function account_chk(account){

  var var_info = account;
  if (var_info != null && var_info != "") {
          $.ajax({
          type:"POST",
          // async : true, //true, false
          data : {chkAccount: var_info,my_code:my_code},
          dataType: 'json',
          url: 'db/accountchk_ok.php',
          success: function(data) {
                          if(data[0].result == 'already') { //로그인
                              // alert("This is an account with a wallet already registered.");
                              alert_custom("mpa_1");
                          } else if(data[0].result == 'success'){
                            //가입 처리
                              // alert("success");
                              alert(account+" 지갑 주소로 로그인 되었습니다.");
                              $('#id-lesson-account').val(account);

                              location.reload();
                          } else if(data[0].result == 'used'){//로그인 처리
                              alert(account+" 지갑 주소로 로그인 되었습니다.");
                                $('#id-lesson-account').val(account);
                            location.reload();
                            // alert("This is an already registered wallet address.");
                            // alert_custom("mpa_2");
                          } else {
                              alert(data[0].result);
                              // alert_custom("mpa_3");
                          }
          },
          error : function(xhr, status, error) {
              console.log(error);
                  }
          });
  }else{
    alert("Please check the metamask connection.");
  }
}

async function metamask_call(){
  if (typeof window.ethereum !== 'undefined') {
    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
    selectedAccount = accounts[0];

  if(selectedAccount!=""&&selectedAccount!=null){
    // alert("connect");
  }else{
    alert("Please install metamask.");
    window.open('https://metamask.io/download');
  }

}else{
  // console.log('MetaMask is installed!');
  alert("Please install metamask.");
  window.open('https://metamask.io/download');
}


}
