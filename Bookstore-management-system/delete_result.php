<?php
$con=mysqli_connect("localhost", "root", "AppDB@2017", "madang") or die("MySQL connection failed");
$custid= $_POST["custid"];

$sql="SELECT custid FROM orders WHERE custid=".$custid."";


$ret = mysqli_query($con, $sql);

$sql2="DELETE FROM customer WHERE custid=".$custid."";
$ret2 = mysqli_query($con, $sql2);

echo "<h1> 회원삭제결과</h1>";
if($ret) {
echo $custid."주문회원(삭제불가)";
}
else if($ret2){
echo $custid."회원이성공적으로삭제됨";
}
else {
echo "데이터삭제실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br><br> <a href='main.html'>초기화면</a> ";
?>