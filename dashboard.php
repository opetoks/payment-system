<?php include('header.php');?>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-12"><h2>Payment History </h2> </div>
	</div>
	<div class="row">
	<?php 
		$g = $user->query("SELECT * FROM unified_payment_tbl WHERE init_tanxId=? Limit 1", [$trxId]);
        if($g->num_rows==1)
            {
                $row = $g->fetch();
                $_SESSION['payerEmail'] = $row['Studentemail'];
                $_SESSION['payerMatricNo'] = $row['matricno'];
                $_SESSION['payerName'] = $row['StudentName'];
                $_SESSION['description'] = $row['Description'];
                $_SESSION['payerPhone'] = $row['PhoneNo'];
            }
	?>
	<hr>
	</div>
</div>