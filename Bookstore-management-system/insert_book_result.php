<?php
$con=mysqli_connect("localhost", "root", "AppDB@2017", "madang") or die("MySQL 접속실패!!");
$bookid= $_POST["bookid"];
$bookname = $_POST["bookname"];
$pubname= $_POST["pubname"];
$price= $_POST["price"];


$sql="INSERT INTO book
(bookid,bookname,pubname,price) VALUES(".$bookid.",'$bookname','$pubname',".$price.")";

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