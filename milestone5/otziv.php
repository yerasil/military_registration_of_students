<?php

require_once 'db/connection.php';

$sql = "insert into comment(id , email, review, prosmotr,time_com) values (null,?,?,0,null)";

$email = $_POST['email'];
$otziv = $_POST['otziv'];


$r = $pdo_conn->prepare($sql);

if ($r->execute(array($email, $otziv)) == true) {
    echo "data inserted";

} else
    echo "error";


header("Location: contacts.php");
