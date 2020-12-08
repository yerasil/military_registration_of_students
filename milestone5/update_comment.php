<?php
require_once "db/connection.php";
$g_row =  $pdo_conn->query("SELECT * FROM comment ") ;
$count=0;
foreach($g_row as $row)
{
    if ($row['prosmotr']==0){
        $sql1="UPDATE comment SET prosmotr=:n WHERE id =:id1";
        $dbcon = $pdo_conn->prepare($sql1);
        $dbcon->execute(array(':id1'=>$row['id'],':n'=>1));
    }
}