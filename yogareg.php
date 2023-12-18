<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="yogareg";

$nam=$_POST['nam'];
$ag=$_POST['ag'];
$mn=$_POST['mn'];
$add=$_POST['add'];
$batch=$_POST['batch'];

$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
$s="insert into peoples(name,age,address,mobile_number,batch) values('$nam','$ag','$add','$mn','$batch')";

if(mysqli_query($conn,$s))
{
    echo "Registered Successfully for Yoga Classes!";
}
else
{
    echo "Sorry!! Registration NOT Successful, Please try Again";
}
mysqli_close($conn);

?>