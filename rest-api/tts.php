<?php
session_start();
include'../config.php';
$id = $_GET['text'];
$api = $_GET['apikey'];
$query = mysqli_query($conn, "SELECT * FROM api WHERE api = '$api'") or die(mysql_error());
$jumlah = mysqli_num_rows($query);

$qry = mysqli_query($conn, "SELECT batas FROM users WHERE id_users = '$api'");
$jum = mysqli_num_rows($qry);
$r_cek=mysqli_fetch_array($qry);


function update($id){
  $txt=$id;
  $curl_handle=curl_init();
  curl_setopt($curl_handle, CURLOPT_URL,"https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q=".$txt."&tl=in-IN");
  curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
  curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:94.0) Gecko/20100101 Firefox/94.0');
  $query = curl_exec($curl_handle);
  curl_close($curl_handle);
  echo $query;
}

function process($jumlah,$conn,$api,$id,$r_cek){
  if ($jumlah > 0) {
    $total = $r_cek['batas'] - '1';
    mysqli_query($conn,"UPDATE users SET batas='$total' WHERE id_users='$api'");
    update($id);
  }else {
    $data = array(
      'status' => 'failed, invalid api key',
    );
    header('Content-Type: application/json');
    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    echo $jsonfile;
  }
}

if ('1' !== $r_cek['batas']) {
  process($jumlah,$conn,$api,$id,$r_cek);
}else {
  $data = array(
    'status' => 'failed, Api Key Limit',
  );
  header('Content-Type: application/json');
  $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
  echo $jsonfile;
}
 ?>
