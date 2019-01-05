<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>OSUSTECH PAYMENT SYSTEM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <!--Pulling Awesome Font -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet"> 

	<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->

<style type="text/css">
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}


.fTable{
    padding-left: 20px;
    margin-left: 5px;
	}
	.astr{
	color: red;
}
.zsx {
background-color: rgba(128, 0, 5, 0.85);
}
.zsx h3{
text-align:left;
color:#fff;
font-family: 'Charm', cursive;
} 
.info{
	color: red;
	font-size: 12px;
}
input[type=text], input[type=email],input[type=tel],select{
  width: 100%;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
</style>


<script>
function showServiceType(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("feesTable").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getfeeslist.php?q="+str, true);
  xhttp.send();
}
</script>

<script type="text/javascript">
	function validateForm(){
  	var StudentName = document.forms["payForm"]["StudentName"].value;
  	var Studentemail = document.forms["payForm"]["email"].value;
  	if (StudentName == "") {
    alert("Name must be filled out");
    return false;
  	}
  	if(Studentemail = ""){
  	alert("Email is necessary!");
    return false;	
  	}
	} 
</script>

<script type="text/javascript">
	/*Examination	
	Library
	IdCard	
	Laboratory
	EndowmentFund
	Medicals
	Sports
	DevelopmentLevy
	ICT*/
function formatMoney(number) {
  return number.toLocaleString('en-US', { style: 'currency', currency: 'NGN' });
}

function TuitionFees()
{
    var TuitionFee = 0;
    var payForm = document.forms["payForm"];
    var Tuition = payForm.elements["Tuition"];
    if(Tuition.checked==true)
    {
       TuitionFee = document.getElementById("Tuition").value;
    }
    return TuitionFee;
    //console.log(TuitionFee);
}

function ExaminationFees()
	{
	var ExaminationFee = 0;
	var payForm = document.forms['payForm'];
	var Examination = payForm.elements['Examination'];
	if(Examination.checked==true){
		ExaminationFee = document.getElementById("Examination").value;
	}
	return ExaminationFee;
	//console.log(ExaminationFee);
}
function LibraryFees()
	{
	var LibraryFee = 0;
	var payForm = document.forms['payForm'];
	var Library = payForm.elements['Library'];
	if(Library.checked==true){
		LibraryFee = document.getElementById("Library").value;
	}
	return LibraryFee;
	//console.log(ExaminationFee);
}
function LaboratoryFees(){
	var LaboratoryFee = 0;
	var payForm = document.forms['payForm'];
	var Laboratory = payForm.elements['Laboratory'];
	if(Laboratory.checked == true){
		LaboratoryFee = document.getElementById('Laboratory').value;
	}
	return LaboratoryFee;
}
function IdCardPrice()
	{
	var IdCardFee = 0;
	var payForm = document.forms['payForm'];
	var IdCard = payForm.elements['IdCard'];
	if(IdCard.checked==true){
		IdCardFee = document.getElementById("IdCard").value;
	}
	return IdCardFee;
	//console.log(ExaminationFee);
}
function EndowmentFund()
	{
	var EndowmentFee = 0;
	var payForm = document.forms['payForm'];
	var Endowment = payForm.elements['Endowment'];
	if(Endowment.checked==true){
		EndowmentFee = document.getElementById("Endowment").value;
	}
	return EndowmentFee;
}
function MedicalFees()
	{
	var MedicalFee = 0;
	var payForm = document.forms['payForm'];
	var Medicals = payForm.elements['Medicals'];
	if(Medicals.checked==true){
		MedicalFee = document.getElementById("Medicals").value;
	}
	return MedicalFee;
}
function SportsFees()
	{
	var sportFee = 0;
	var payForm = document.forms['payForm'];
	var Sports = payForm.elements['Sports'];
	if(Sports.checked==true){
		sportFee = document.getElementById("Sports").value;
	}
	return sportFee;
}
function DevelopmentLevy(){
	var Developmentfee = 0;
	var payForm = document.forms['payForm'];
	var Development = payForm.elements['Development'];
	if(Development.checked==true){
		Developmentfee = document.getElementById("Development").value;
	}
	return Developmentfee;
}
function ICTfees() {
	var ICTfee = 0;
	var payForm = document.forms['payForm'];
	var ICT = payForm.elements['ICT'];
	if(ICT.checked==true){
		ICTfee = document.getElementById("ICT").value;
	}
	return ICTfee;
}
function Registrationfees() {
	var Registrationfee = 0;
	var payForm = document.forms['payForm'];
	var Registration = payForm.elements['Registration'];
	if(Registration.checked==true){
		Registrationfee = document.getElementById("Registration").value;
	}
	return Registrationfee;
}
function calculateTotal(){
	var TotalAmount = Number(TuitionFees()) + Number(ExaminationFees()) + Number(LibraryFees()) + Number(IdCardPrice()) + Number(EndowmentFund()) + Number(MedicalFees()) + Number(SportsFees()) + Number(DevelopmentLevy()) + Number(ICTfees()) + Number(LaboratoryFees()) + Number(Registrationfees());
	
	var divobj = document.getElementById('totalFee');
	var amountobj = document.getElementById('amount');
    //divobj.style.display='block';
    divobj.value = formatMoney(TotalAmount); /*"Total Fess to be paid ₦"+TotalAmount;*/
    amountobj.value = TotalAmount;
	}
	
</script>

</head>
<body>
<div class="header"><!-- <i class="fa fa-money fa-lg"></i> -->
    	<div class="container-fluid">
			<div class="row zsx">
				<div class="col-lg-12">
					<img src="img/logo1.png" height="80px" class="pull-left"><img class="pull-right" src="img/Card Scheme Logo.png" height="80px"> <h3>(FPS)Fees Payment System </h3>
					<h3> </h3>
				
				</div>
			</div>
		</div>
</div>
<nav>
<ul class="topnav">
  <li><a class="" href="signup.php">Sign up</a></li>
  <li><a href="index.php">Quick payment </a></li>
  <li><a href="login.php">View Payment History </a></li>
  <li><a href="login.php"><i class="fa fa-print"></i> Reprint receipt </a></li>
  <li class="right"><a href="www.osustech.edu.ng"><i class="fa fa-home"></i> Home</a></li>
</ul> 
</nav>