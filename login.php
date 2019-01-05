<?php
session_start();
include("assets/config.php");
include("assets/functions.php");

$error = '';
if(isset($_POST['login']))
{
$matricno = protect($_POST['matricno']);
$emailtxt = protect($_POST['emailtxt']);
$email = isValidEmail($emailtxt);
//$pass = md5($password);
/*print_r($matricno);
print_r($pass)*/;

if($matricno=='' || $email=='')
{
$error='All fields are required';
}

$stmt = $user->query("SELECT * FROM unified_payment_tbl WHERE matricno=? and Studentemail = ? Limit 1", [$matricno,$email]);
if($stmt->num_rows==1)
{
$row = $stmt->fetch();
$_SESSION['matricno']=$row['matricno'];
$_SESSION['email'] = $row['Studentemail']; 
/*echo '<script type="text/javascript">window.location="index.php"; </script>';*/
$user->redirect('dashboard.php');
}else
{
$error = 'No record exists with email'.' '.$emailtxt.' '.'and Matric/Reg Number'.$matricno ; 
}
}
?>
<?php include('header.php'); ?>
<br>
        <div class="container">
            <div class="row">

             <hr />
                                          

                <div class="col-md-offset-4 col-md-4">

                    <?php
                    if($error!='')
                        {                                    
                            echo '<h5 class="text-danger text-center">'.$error.'</h5>';
                        }
                    ?> 
                    <div class="form-login">
                    <center><img src="img/logo1.png"></center>
                    <h4 class="">Fees Payment System</h4>
                    <hr>
                    <form role="form" action="login.php" method="post">
                    <input type="text" pattern=".{9,}" name="matricno" class="form-control input-sm chat-input" placeholder="matric number" />
                    </br>
                    <input type="email" name="emailtxt" class="form-control input-sm chat-input" placeholder="Email" />
                    </br>
                    <div class="wrapper">
                    <span class="group-btn">     
                        <button class="btn btn-primary btn-md" type="submit" name="login"> login <i class="fa fa-sign-in"></i></button>
                    </span>
                    <br>
                   
                    </div>
                    </form>
                    </div>
                
                </div>
            </div>
        </div>



 
<br>
<br>
<script src="js/jquery-1.10.2.js"></script>   
    <!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
<script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
<script src="js/custom1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<?php include('footer.php'); ?>
</body>
</html>
