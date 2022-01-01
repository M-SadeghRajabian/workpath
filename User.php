<?PHP

$id=$_GET['id'];
$link=mysqli_connect("localhost","root","","workpath");
$sql="SELECT*FROM users WHERE id='$id'";
$res=mysqli_query($link,$sql);

$data=array();
while($final=mysql_fetch_assoc($res)){
$data[]=$final;
}

echo $user=json_encode($data);


?>
