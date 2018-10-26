<?
include('conDB.php');
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>P&T Apartment Index</title>
</head>

<body>

<p>P&amp;T Apartment<br>
Management System</p>
<table width="415" border="1" cellpadding="10">
  <tbody>
    <tr align="center">
      <th width="59" scope="row">ลูกค้า</th>
      <td width="140">เพิ่มลูกค้าใหม่</td>
      <td width="140">ค้นหาลูกค้า</td>
    </tr>
    <tr align="center">
      <th scope="row">ห้องพัก</th>
      <td><a href="newCustomer.php" target="_blank">จองห้องพัก</a></td>
      <td><a href="searchRoom.php" target="_blank">ค้นหาห้องพัก</a></td>
    </tr>
    <tr align="center">
      <th scope="row">ใบเสร็จ</th>
      <td>ออกบิล</td>
      <td>ค้นหาบิล</td>
    </tr>
  </tbody>
</table>
<p><p>
  <?
$sql = "select * from room inner join roomstat on room.roomstatID = roomstat.roomstatID";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		echo "<table>";
			echo "<tr>";
				echo "<th>เลขห้อง</th>";
				echo "<th>สถานะ</th>";
			echo "</tr>";

		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
				echo "<td>" . $row['roomNumber'] . "</td>";
				echo "<td>" . $row['roomstatName'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";		
		mysqli_free_result($result);
	}
}


?>
  
</body>
</html>