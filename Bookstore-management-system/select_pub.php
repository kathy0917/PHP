<?php
$con = mysqli_connect("localhost", "root", "AppDB@2017", "madang")
or die("MySQL connection error");
$sql= "SELECT * FROM publisher";
$ret = mysqli_query($con, $sql);
if ($ret) {
$count = mysqli_num_rows($ret);
} else {
echo "data select failed"."<br>";
echo "error: ".mysqli_error($con);
}
echo "<h1> 출판사 조회결과</h1>";
echo "<table border=1>";
echo "<tr>";
echo "<th>출판사명</th><th>이름</th><th>전화번호</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($ret)) {
echo "<tr>";
echo "<td>", $row['pubname'], "</td>";
echo "<td>", $row['name'], "</td>";
echo "<td>", $row['phone'], "</td>";

echo "</tr>";
}
mysqli_close($con);
echo "</table>";
echo "<br> <a href='main.html'>초기화면</a>";
?>