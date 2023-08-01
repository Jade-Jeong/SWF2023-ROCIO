// SPDX-License-Identifier: GPL-3.0-or-later
pragma solidity ^0.8.0;
import "./token/ERC1155/ERC1155.sol";
import "./utils/math/SafeMath.sol";
import "./utils/src/strings.sol";


contract WEB3_PASS is ERC1155{
  using SafeMath for uint256;
  bool private isLocked;
  using strings for *;

    address ContractOwner;          // 컨트랙트 소유자
    constructor() ERC1155("","WEB3-PASS SBT","WEB3PASSSBT",true) {
      ContractOwner = msg.sender;
      setting["main"] = adminSetting(0x254F2347441590bE38B8646297e49850FdbC4A02,0,0x8C661806f716652B637728355cC4e2620D428F99); //플랫폼 지갑 주소, 수수료율,ERC20 주소
      isLocked = true;
    }

   modifier onlyowner {
       require(ContractOwner == msg.sender);
       _;
   }

    struct NFTAsset {
      string metadata;
      address owner;
      uint id;
      uint amount;
      uint price;
      uint flag;
      uint currency; //0-ETH 1-ERC20
    }

    struct adminSetting {
      address platformAddr;
      uint feeRate;
      address tokenAddr;
    }

    mapping (string => adminSetting) setting;

    mapping(address=> mapping(uint => NFTAsset)) public ownedNFT;

    NFTAsset[] public nft_asset;

    function getContractOwner() public view returns (address) {
        return ContractOwner;
    }
    function transferOwnership(address newOwner) public onlyowner() {
        require(newOwner != address(0), "Ownable: new owner is the zero address");
        ContractOwner = newOwner;
    }
    function setChangeFee(uint256 _feeRate) public onlyowner() {
       setting["main"].feeRate = _feeRate;
    }
    function setChangeAddr(address _platformAddr) public onlyowner() {
       setting["main"].platformAddr = _platformAddr;
    }
    function setChangeTokenAddr(address _tokenAddr) public onlyowner() {
       setting["main"].tokenAddr = _tokenAddr;
    }
    function setOwnedNFTFlag(address _owner,uint256 _tokenId,uint256 _flag) public onlyowner(){
      require(_owner == ownedNFT[_owner][_tokenId].owner);
      ownedNFT[_owner][_tokenId].flag = _flag;
    }

//WEB3 PASS
struct PersonData {
      uint256 idx;
      address addr;
      string key;
      string value;
      uint256 level;
    }

mapping(address=> mapping(string => PersonData)) public myData;

PersonData[] public person_data;
uint256 private arrayIndex;
  function getValue(string memory key) public view returns (string memory)
  {
    require(msg.sender == myData[msg.sender][key].addr , "No Owner");

    return (myData[msg.sender][key].value);
  }

  function getLevel(string memory key) public view returns (uint256)
  {
    require(msg.sender == myData[msg.sender][key].addr , "No Owner");

    return (myData[msg.sender][key].level);
  }

  function getIndex(string memory key) public view returns (uint256)
  {
    require(msg.sender == myData[msg.sender][key].addr , "No Owner");

    return (myData[msg.sender][key].idx);
  }

  function editValue(string memory key, string memory value, uint256 level)
  public
  {
    require(msg.sender == myData[msg.sender][key].addr , "No Owner");

    person_data[myData[msg.sender][key].idx] = (PersonData(myData[msg.sender][key].idx,msg.sender,key,value,level));
    myData[msg.sender][key]= PersonData(myData[msg.sender][key].idx,msg.sender,key,value,level);
  }


  function setJsonSplit(string memory data)  public {
         strings.slice memory stringSlice = data.toSlice();
         strings.slice memory delimeterSlice = ",".toSlice();
         string[] memory strings = new string[](stringSlice.count(delimeterSlice)+1);
         for (uint i = 0; i < strings.length; i++) {
            strings[i] = stringSlice.split(delimeterSlice).toString();
             setJsonValue(strings[i]);
         }
     }

 //이름:1mlKwjezQm4U8SdmUKCW2w==,나이:38,혈액형:A

 event consoleLogString(string data);
 event consoleLogInt(uint256 obj);


   function setJsonValue(string memory data)
   public
   {
         strings.slice memory stringSlice = data.toSlice();
         strings.slice memory delimeterSlice = ":".toSlice();
         string[] memory strings = new string[](stringSlice.count(delimeterSlice)+1);

         for (uint i = 0; i < strings.length; i++) {
            strings[i] = stringSlice.split(delimeterSlice).toString();
             /* emit consoleLogString(strings[i]); */
         }

     string memory key = strings[0];
     string memory value = strings[1];
     arrayIndex = person_data.length;
     person_data.push(PersonData(arrayIndex,msg.sender,key,value,0));
     myData[msg.sender][key]= PersonData(arrayIndex,msg.sender,key,value,0);
   }

  function setValue(string memory key, string memory value, uint256 level)
  public
  {

    arrayIndex = person_data.length;
    person_data.push(PersonData(arrayIndex,msg.sender,key,value,level));
    myData[msg.sender][key]= PersonData(arrayIndex,msg.sender,key,value,level);
  }

function getAllKey() public view returns (string[] memory){
      string[] memory id = new string[](person_data.length);
      uint j =0;
      for (uint i = 0; i < person_data.length; i++) {
          if(msg.sender==person_data[i].addr){
            id[j] = person_data[i].key;
            j++;
          }
      }
      return id;
  }

function getAllData() public view returns (PersonData[] memory){
      PersonData[] memory id = new PersonData[](person_data.length);
      uint j =0;
      for (uint i = 0; i < person_data.length; i++) {
          if(msg.sender==person_data[i].addr){
            PersonData storage member = person_data[i];
            id[j] = member;
            j++;
          }else{
          }
      }
      return id;
  }

  function getAllDataJson() public view returns (string[] memory,string[] memory) {
      string[] memory keys = new string[](person_data.length);
      string[] memory values = new string[](person_data.length);
      uint j =0;
      for (uint i = 0; i < person_data.length; i++) {
          if(msg.sender==person_data[i].addr){
            keys[j] = person_data[i].key;
            values[j] = person_data[i].value;
            j++;
          }
      }
      return (keys,values);

    }
//WEB3 PASS

    //발행
    function mint(string memory _metadata, uint256 _amount, uint256 _price, uint256 _currency) public {//이용자 발행
        require(_currency < 2,"currency::Check");
        uint256 assetId = nft_asset.length; // 유일한 작품 ID
        nft_asset.push(NFTAsset(_metadata,msg.sender,assetId,_amount,_price,0,_currency));
        ownedNFT[msg.sender][assetId]= NFTAsset(_metadata,msg.sender,assetId,_amount,_price,0,_currency);
        _mint(msg.sender, assetId, _amount, ""); //ERC1155 등록
    }

    //발행

    function burn(uint256 _tokenId, uint256 _amount) public {
      require(msg.sender == creatorCheck(_tokenId));
      _burn(msg.sender, _tokenId, _amount); //ERC1155 삭제
    }


      function minterCheck(uint256 _tokenId) public view returns (address){ //minter 확인
        return minterOf(_tokenId);
      }
      function creatorCheck(uint256 _tokenId) public view returns (address){ //creator 확인 로열티 받을 사람
          return creatorOf(_tokenId);
      }
}
