<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web_semantik_a1";
  return mysqli_connect($server, $username, $password, $database);
}
