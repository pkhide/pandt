<?
include('conDB.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูลลูกค้า</title>
</head>

<body>
<p>เพิ่มข้อมูลลูกค้า</p>
<form action="newCustomerDB.php" method="post" name="form1" id="form1">
  <table>
  	<tr>
        <td>ชื่อ </td>
        <td><input type="text" name="txtCusName"></td>
    </tr>
    <tr>
        <td>นามสกุล </td>
        <td><input type="text" name="txtCusLName"></td>
    </tr>
    <tr>
    	<td>เบอร์โทร</td>
        <td><input type="text" name="txtCusMobile"></td>
    </tr>
    <tr>
    	<td>เลขบัตรประชาชน</td>
        <td><input type="text" name="txtCusIDCardNum"></td>
    </tr>
    <tr>
    	<td>ห้อง</td>
        <td>
            <select name="selectRoom">
            <?
            	$sql = "select * from room where roomstatID=1";
				if($result = mysqli_query($link, $sql)){
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_array($result)){
							$roomNum = $row['roomNumber'];
			?>
							<option value="<?= $roomNum?>"><?= $roomNum?></option>
            <?
						}
					}
				}
			?>
            </select
        ></td>
    </tr>
    <tr>
    	<td>ระยะเวลาเช่า</td>
        <td><input type="text" name="txtRentDuration"></td>
    </tr>
    <tr>
   	  <td>วันที่เข้าพัก</td>
        <td><input type="date" name="dateStart"></td>
    </tr>
    <tr>
   	  <td>หมายเหตุ</td>
        <td>
        	<textarea name="txtMemo"></textarea>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="right">
        	<input type="reset" name="btnReset" value="ล้างข้อมูล">
        	<input type="submit" name="btnSubmit" value="บันทึก">
        </td>
    </tr>
  </table>
</form>
</body>
</html>