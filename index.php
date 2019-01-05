<?php
ob_start();
session_start();
include("assets/config.php");
include("assets/functions.php");
?>
<?php include('header.php'); ?>

<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 info">Please provide your Matriculation/Registration Number and other details required  </div>
  </div>
  <div class="row">

  <hr>
    <form role="form" name="payForm" id="payForm" action="paymentProcess.php" method="post">
      <div class="col-xs-6" style="margin-left: 10px;">
         <label for="StudentName"> CANDIDATE'S NAME </label><span class="astr">*</span> 
           <input type="text" id="StudentName" name="StudentName" class="form-control input-sm" placeholder="Full Name" required/>
           <br>
           <label for="MatricNo"> CANDIDATE'S MATRIC/REG NUMBER </label><span class="astr">*</span> 
           <input type="text" pattern=".{9,}" name="matricno" class="form-control input-sm" placeholder="Matric No/Reg Number" required/>
           <br>
           <label for="Email"> CANDIDATE'S EMAIL</label><span class="astr">*</span> 
           <input type="email" name="Studentemail" class="form-control input-sm" placeholder="Functional Email Address" required/>
           <br>
           <label for="Mobile"> CANDIDATE'S PHONE NUMBER</label><span class="astr">*</span> 
           <input type="number" name="PhoneNo" class="form-control input-sm" placeholder="Phone Number" required/>
           <br>
           <label for="Service"> NAME OF SERVICE/PURPOSE </label><span class="astr">*</span> 
           <select class="selectInp form-control" name="serviceType" onchange="showServiceType(this.value)">
           <option value="" selected>Please Select Service Type </option>'
        <?php 
          $stmt = $user->query("SELECT * FROM Fees_Payment_ServiceType");
          if ($stmt->num_rows > 0)
            {
          while ($g = $stmt->fetch())
          {
          echo '<option value="' . $g['table_name'] . '">' . $g['Payment_Service'] .'</option>';
          }
        }
        else{
          echo '<option value=""> No table selected </option>';
        }
        ?>
           </select>
           <br>
           <label for="Amount"> AMOUNT TO PAY (₦) </label><span class="astr">*</span> 
           <input type="text" id="totalFee" value="" name="totalfee" class="form-control input-sm" disabled />
           <input type="hidden" id="amount" value="" name="amount" class="form-control input-sm"/>
           <br>
        </div>


        <div class="row col-xs-6 fTable" id="feesTable"> 
          <p class="lead"><!--Fees Table loads...--></p> 

        </div>
        <hr>
         <div class="col-xs-12 group-btn">  
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="login"> Proceed on payment <i class="fa fa-sign-in"></i>
              </button>
          
         </div>
         <br>
    </form>
  </div>
</div>

<div class="container">
  
</div>
<hr>


<!-- <div id="app">
  {{ message }}
</div>

<div id="app-2">
  <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
  </span>
</div> -->

<!-- <script src="index.js"></script> -->
<?php include('footer.php'); ?>
<!-- <script src="js/jquery-1.10.2.js"></script>    -->
    <!-- BOOTSTRAP SCRIPTS -->
   
</body>
</html>