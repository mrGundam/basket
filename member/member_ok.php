<?php
	include "../include/db.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$adress = $_POST['adress'];
	$sex = $_POST['sex'];
	$email = $_POST['email'].'@'.$_POST['emadress'];

  $sql = "insert into member (idx,id,pw,name,adress,sex,email) values('2','".$userid."','".$userpw."','".$username."','".$adress."','".$sex."','".$email."')";
  $mysqli->query($sql);
  if($mysqli->query($sql)){
    echo 's';
  } else {
    echo 'x';
  }
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">