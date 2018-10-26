<?
include('conDB.php');
?>

<!doctype html>
<html>
<head>
	<script>
		function showSearch(str){
			if(str.length == 0){
				document.getElementById("txtSearchResult").innerHTML = "";
				return ;
			}else{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById("txtSearchResult").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "gethint.php?q=" + str, true);
				xmlhttp.send();
			}
		}
    </script>
<meta charset="utf-8">
<title>ค้นหา</title>
</head>

<body>
<form id="form1" name="form1" method="post">
	<table>
    	<tr>
        	<td>คำค้นหา: </td>
        	<td>
            	<input type="text" name="txtInput" onKeyUp="showSearch(this.value)">
            </td>
        </tr>
    	<tr>
        	<td></td>
        	<td></td>
        </tr>
    </table>
</form>

<p>
	ผลการค้นหา: <br>
    <span id="txtSearchResult"></span>
</p>

</body>
</html>