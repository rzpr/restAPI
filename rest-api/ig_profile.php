<?php
session_start();
include'../config.php';
$id = $_GET['username'];
$api = $_GET['apikey'];
$query = mysqli_query($conn, "SELECT * FROM api WHERE api = '$api'") or die(mysql_error());
$jumlah = mysqli_num_rows($query);

$qry = mysqli_query($conn, "SELECT batas FROM users WHERE id_users = '$api'");
$jum = mysqli_num_rows($qry);
$r_cek=mysqli_fetch_array($qry);

function update($id,$r_cek){
  $url = $id;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/'.$url.'/?__a=1');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  $profile = json_decode($output, true);
  $nama = $profile["graphql"]["user"]["full_name"];
  $bio = $profile["graphql"]["user"]["biography"];
  $follower = $profile["graphql"]["user"]["edge_followed_by"]["count"];
  $following = $profile["graphql"]["user"]["edge_follow"]["count"];
  $foto = $profile["graphql"]["user"]["profile_pic_url_hd"];
$data = array(
  'status' => 'succes',
  'result' => array(
  'full_name'     => $nama,
  'bio'   => $bio,
  'follower' => $follower,
  'following' => $following,
  'pict_url' => $foto
));
header('Content-Type: application/json');
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
echo $jsonfile;

}

function process($jumlah,$conn,$api,$id,$r_cek){
  if ($jumlah > 0) {
    $total = $r_cek['batas'] - '1';
    mysqli_query($conn,"UPDATE users SET batas='$total' WHERE id_users='$api'");
    update($id,$r_cek);
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
