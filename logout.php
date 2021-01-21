<?php

session_start();
    $_SESSION = array();
    session_destroy();
    header("location: index.html");
	setcookie("logout", "Đã đăng xuất thành công!", time()-86400, "/", "", 0);
exit;
?>

