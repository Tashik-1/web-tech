<?php
   $hasError = false;
   $placeholder_uname = "Username";
   $placeholder_pass = "Password";
   $value_uname = "";
   $value_pass = "";
   $user_type = "";
   if (isset($_POST["login"])) {
   	  if (empty($_POST["uname"])) {
   	  	$hasError = true;
   	  }
   	  else $value_uname = $_POST["uname"];
   	  if (empty($_POST["pass"])) {
   	  	$hasError = true;
   	  }
   	  else $value_pass = $_POST["pass"];
   	  if (!$hasError && $value_uname == "admin" && $value_pass == "admin") {
        header("Location: admin.php");
      }
      else if (!$hasError) {
           setcookie("username", $_POST["uname"], time() + 3600);
           if ($_POST["uname"] == "admin" && $_POST["pass"] == "admin") {
              header("Location: admin.php");
           }
           else if ($_POST["uname"] == "agency" && $_POST["pass"] == "agency") {
              header("Location: agency-index.php");
           }
           else if ($_POST["uname"] == "hotel" && $_POST["pass"] == "hotel") {
              header("Location: hotel-index.php");
           }
           else header("Location: home.php");
   	}
   }
?>
