<?php
  header("Access-Control-Allow-Origin: *");
	if (isset($_POST["msg"])) {
    echo "reply: ".$_POST["msg"];
	}
?>