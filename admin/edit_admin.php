<?php include '../include/admin_header.php'; ?>
<?php include '../include/connection.php'; ?>

<?php
// when user click on button
if (isset($_POST["submit"])) {
    //get data from web form
    $email    =$_POST["email"];
    $password =$_POST["password"];
    $fullname =$_POST["fullname"];


// //connection
//     $connection=mysqli_connect("localhost","root","","smartsell");

//     if (!$connection) {
//         die("can not connect to the server");
    $query="update admin set admin_email = '$email',
            admin_password='$password',
            admin_fullname='$fullname'
            where admin_id = {$_GET['admin_id']}";
mysqli_query($connection,$query);
    }



    $query="select * from admin where admin_id={$_GET['admin_id']}";
    $result=mysqli_query($connection,$query);
    $adminset=mysqli_fetch_assoc($result);

?>



<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Credit admin</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">add admin</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">admin email</label>
                                                <input value="<?php echo $adminset['admin_email']?>"  id="cc-pament" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">admin password</label>
                                                <input  value="<?php echo $adminset['admin_password']?>" id="cc-name" name="password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label  for="cc-number" class="control-label mb-1">admin full name</label>
                                                <input value="<?php echo $adminset['admin_fullname']?>" id="cc-number" name="fullname" type="tel" class="form-control cc-number identified visa" 
                                                  >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                          
                                            <div>
                                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php include '../include/admin_footer.php'; ?>
