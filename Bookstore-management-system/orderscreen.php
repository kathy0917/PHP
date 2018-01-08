<?php
echo "<form method='post' action='bookorder.php?bookid=",$_GET['bookid'],"'>";
echo "<도서 주문하기><br>";

echo "saleprice : <input type=text name='saleprice'><br>";
echo "custid : <input type=text name='custid'><br>";

$current = date('Y-m-d');
echo "orderdate : <input type=text name='orderdate' value=$current><br>";
echo "<input type='submit' value='도서 주문'>";
echo "</form>";

echo "<br> <a href='main.html'>초기화면</a>";
?>
