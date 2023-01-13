<?php
include "../db.php";

session_destroy();

redirect("../login.php");

?>