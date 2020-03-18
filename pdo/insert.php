<?php
$user='root';
$pass='root';
$dbh=new PDO('mysql:host=localhost;dbname=sql',$user,$pass);

$sql='insert into reg(l_name,l_email) values (:l_name,:l_email)';

$name='test1';
$email='3232@qq.com';

$stmt=$dbh->prepare($sql);
$stmt->bindParam(':l_name',$name);
$stmt->bindParam(':l_email',$email);
$stmt->execute();

echo "添加成功,id：".$dbh->lastinsertid();

?>