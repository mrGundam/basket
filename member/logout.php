<?php
	include "../include/db.php";
	session_start();
	unset($_SESSION['userid']);
	unset($_SESSION['userpw']);
	//session_destroy();
?>
<meta charset="utf-8">
<script>alert("로그아웃되었습니다."); location.href="/basket/member/"; </script>