<?php
$con = mysqli_connect("localhost", "root", "AppDB@2017", "madang")
or die("MySQL connection error");
$sql= "SELECT * FROM book";
$ret = mysqli_query($con, $sql);
if ($ret) {
$count = mysqli_num_rows($ret);
} else {
echo "data select failed"."<br>";
echo "error: ".mysqli_error($con);
}
echo "<h1> 도서조회결과</h1>";
echo "<table border=1>";
echo "<tr>";
echo "<th>도서번호</th><th>도서이름</th><th>출판사명</th><th>가격</th><th>주문</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($ret)) {
echo "<tr>";
echo "<td>", $row['bookid'], "</td>";
echo "<td>", $row['bookname'], "</td>";
echo "<td>", $row['pubname'], "</td>";
echo "<td>", $row['price'], "</td>";
echo "<td>","<a href='orderscreen.php?bookid=",$row['bookid'],"'>주문</a>","</td>";   
echo "</tr>";
}
mysqli_close($con);
echo "</table><br><br>";
echo "<br> <a href='main.html'>초기화면</a>";
?>






