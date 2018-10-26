<?
include('conDB.php');


$sql = "select * from rent inner join customer on rent.customerID = customer.customerID";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$cusID = $row['customerID'];
			$cusN = $row['customerName'];
			$cusLN = $row['customerLName'];
			$cusMobile = $row['customerMobile'];
			$room = $row['roomNum'];
						
			$a[] = $cusN . " " . $cusLN . " (" . $room . ") เบอร์โทร " . $cusMobile;
		}
	}
}


$q = $_REQUEST["q"];
$hint = "";

if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	
	foreach($a as $name){
		if(stristr($q, substr($name, 0, $len))){
			if($hint === ""){
				$hint = $name;
			}else{
				$hint .= "<br> $name";
			}
		}
	}
}

echo $hint === "" ? "ไม่พบผลการค้นหา" : $hint;


/*
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
*/
?>