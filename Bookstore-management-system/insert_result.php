<?php
$con=mysqli_connect("localhost", "root", "AppDB@2017", "madang") or die("MySQL 접속실패!!");
$custid= $_POST["custid"];
$name = $_POST["name"];
$address= $_POST["address"];
$phone= $_POST["phone"];


if(empty($custid)||empty($name)||empty($address)){
echo "phone만 null값 가능";}
else{
$sql="INSERT INTO customer
(custid,name,address,phone) VALUES(".$custid.",'$name','$address','$phone')";
}

$ret = mysqli_query($con, $sql);
echo "<h1> 신규회원입력결과</h1>";
if($ret) {
echo "데이터가성공적으로입력됨.";
}
else {
echo "데이터입력실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br> <a href='main.html'> <--초기화면</a> ";
?>