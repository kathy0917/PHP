<?php
$con=mysqli_connect("localhost", "root", "AppDB@2017", "madang") or die("MySQL connection failed");
$custid= $_POST["custid"];
$name = $_POST["name"];
$address= $_POST["address"];
$phone= $_POST["phone"];
$sql="UPDATE customer SET name='$name', address='$address',phone='$phone'
WHERE custid=".$custid."";
$ret = mysqli_query($con, $sql);
echo "<h1> 회원정보수정결과</h1>";
if($ret) {
echo "데이터가성공적으로수정됨.";
}
else {
echo "데이터수정실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br> <a href='main.html'>초기화면</a> ";
?>