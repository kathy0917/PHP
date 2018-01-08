<?php
$con = mysqli_connect("localhost", "root", "AppDB@2017", "madang")
or die("MySQL connection error");

$saleprice= $_POST["saleprice"];
$custid= $_POST["custid"];
$orderdate= $_POST["orderdate"];
$bookid =$_GET["bookid"];


$sql="SELECT bookid from orders";
$ret= mysqli_query($con, $sql);


$sql="SELECT custid from orders";
$ret= mysqli_query($con, $sql);


$sql="SELECT saleprice from orders";
$ret = mysqli_query($con, $sql);

$sql="SELECT orderdate from orders";
$ret = mysqli_query($con, $sql);


    
$sql="INSERT INTO orders
(custid,saleprice,orderdate,bookid) VALUES(".$custid.",".$saleprice.",'$orderdate',".$bookid.")";

$ret = mysqli_query($con, $sql);
echo "<h1> 주문결과</h1>";
if($ret) {
echo "데이터가성공적으로입력됨.";
}
else {
echo "데이터입력실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br> <a href='main.html'> <--초기화면1</a> ";
?>




