<?
include('conDB.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?

// customer data
$cusName = @$_POST["txtCusName"];
$cusLName = @$_POST["txtCusLName"];
$cusMobile = @$_POST["txtCusMobile"];
$cusIDCardNum = @$_POST["txtCusIDCardNum"];

$sql = "insert into customer (customerName, customerLName, customerMobile, customerIDCardNum) values('" .
$cusName . "','" . $cusLName . "','" . $cusMobile . "','" . $cusIDCardNum . "')";
$result = mysqli_query($link, $sql);



// room data
$selectedRoom = $_POST["selectRoom"];
$rentDuration = $_POST["txtRentDuration"];
$rentStart = $_POST["dateStart"];
$memo = $_POST["txtMemo"];

$sql = "select * from customer where customerName ='" . $cusName . "' and customerLName ='" . $cusLName . "'";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$cusID = $row['customerID'];
		}
	}
}

$sql = "insert into rent(roomNum, customerID, rentStart,rentDuration, note) values('" .
$selectedRoom . "','" . $cusID . "','" . $rentStart . "','" . $rentDuration . "','" . $memo . "')";
$result = mysqli_query($link, $sql);



//update roomStatus
$sql = "update room set roomstatID=2 where roomNumber='" . $selectedRoom . "'";
$result = mysqli_query($link, $sql);





?>
</body>
</html>