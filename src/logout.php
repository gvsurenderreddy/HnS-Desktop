<?php
session_start();

// check to make sure the session variable is registered
if (session_is_registered('logged')) { // session variable is registered, the user is ready to logout
session_unset();
session_destroy();

if (isset($_COOKIE['hnsrememberme'])) {
$time = time();

setcookie("hnsrememberme[username]", null, ($time - 3600));
setcookie("hnsrememberme[password]", null, ($time - 3600));
}
}

include ("check_session.inc.php");

header('refresh: 0; url=index.php');
?>