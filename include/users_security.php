<?php
include('conn.php');

if ($dbconfig) {
//  echo "Datbase Connected";
}
else {
  header('Location: conn.php');
}


if(!$_SESSION['email'])
{
  header('Location: sign_in.php');
}
