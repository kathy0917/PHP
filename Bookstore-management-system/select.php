<?php
$con = mysqli_connect("localhost", "root", "AppDB@2017", "madang")
or die("MySQL connection error");
$sql= "SELECT * FROM customer";
$ret = mysqli_query($con, $sql);
if ($ret) {
$count = mysqli_num_rows($ret);
} else {
echo "data select failed"."<br>";
echo "error: ".mysqli_error($con);
}
echo "<h1> 회원조회결과</h1>";
echo "<table border=1>";
echo "<tr>";
echo "<th>고객번호</th><th>이름</th><th>주소</th><th>전화번호</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($ret)) {
echo "<tr>";
echo "<td>", $row['custid'], "</td>";
echo "<td>", $row['name'], "</td>";
echo "<td>", $row['address'], "</td>";
echo "<td>", $row['phone'], "</td>";
echo "</tr>";
}
mysqli_close($con);
echo "</table>";
?>

<html>
    <body><br>
<form method="get" action="update.php">
      #회원수정-고객번호: <input type="text" name="custid">
<input type="submit" value="수정">
</form>
<form method="get" ACTION="delete.php">
#회원삭제-고객번호: <input type="text" name="custid">
<input type="submit" value="삭제">
</form>
<br> <a href='main.html'>초기화면</a>
    </body>
</html>




