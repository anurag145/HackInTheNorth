<?php
define('HOST','127.0.0.1');
define('USER','root');
define('PASS','');
define('DB','mydatabase');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 
$sql = "select * from users";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('id'=>$row[0],
'name'=>$row[1],
'password'=>$row[2]
));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>