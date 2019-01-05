 <?php
include("assets/config.php");
include("assets/functions.php");

$table = $_GET['q'];
//echo $table;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class='table table-bordered table-responsive text-right col-sm-12'>
	<thead>
	<tr style='background:#193045; color: white'>
	<th class='text-center'><strong>Select</strong></th>
    <th><strong>Description</strong></th>
    <th class='text-right'><strong>Amount</strong></th>
    </thead>
    <tbody>
	<?php
		$sql = $user->findAll($table);
        while($stmt = $sql->fetch()){
        echo"<tr> <td class='text-center'> <input type='checkbox' value='".$stmt['fee']."' id='".$stmt['name']."' name='".$stmt['name']."' onclick='calculateTotal()'/> </td>";
	        echo"<td class='text-left'>" . $stmt['Description']. "</td>";
	        echo"<td class='text-left'>" .number_format($stmt['fee']). "</td>";
	        echo"</tr>";
	    }
	?>
	</tbody>
	</table>

</body>
</html>