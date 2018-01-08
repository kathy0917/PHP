<?php
$con=mysqli_connect("localhost", "root", "AppDB@2017", "madang") or die("MySQL connection failed");
$sql="SELECT * FROM customer WHERE custid='".$_GET['custid']."'";
$ret = mysqli_query($con, $sql);
if($ret) {
$count = mysqli_num_rows($ret);
if ($count==0) {
echo $_GET['custid']." 아이디의회원이없음!!!"."<br>";
echo "<br> <a href='main.html'>초기화면</a> ";
exit();
}
}
else {
echo "데이터조회실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
echo "<br> <a href='main.html'>초기화면</a> ";
exit();
}
$row = mysqli_fetch_array($ret);
$custid= $row['custid'];
$name = $row["name"];
$address= $row["address"];
$phone= $row["phone"];

?>
<HTML><HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>

<BODY>
<h1> 회원정보수정</h1>
<FORM METHOD="post" ACTION="update_result.php">
고객번호: <INPUT TYPE ="text" NAME="custid" VALUE=<?php echo $custid?>> <br>
이름: <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?>> <br>
주소: <INPUT TYPE ="text" NAME="address" VALUE=<?php echo $address?>> <br>
전화번호: <INPUT TYPE ="text" NAME="phone" VALUE=<?php echo $phone?>> <br>
<BR><BR>
<INPUT TYPE="submit" VALUE="정보수정">
</FORM>
</BODY>
</HTML>
