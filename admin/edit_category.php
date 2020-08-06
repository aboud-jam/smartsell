<?php include '../include/admin_header.php'; ?>
<?php include '../include/connection.php'; ?>

<?php
// when user click on button
if (isset($_POST["submit"])) {
    //get data from web form
    $category=$_POST["category"];
    


// //connection
//     $connection=mysqli_connect("localhost","root","","smartsell");

//     if (!$connection) {
//         die("can not connect to the server");
    $query="update category set cat_name = '$category'
            
            where cat_id = {$_GET['cat_id']}";
mysqli_query($connection,$query);
    }



    $query="select * from category where cat_id={$_GET['cat_id']}";
    $result=mysqli_query($connection,$query);
    $adminset=mysqli_fetch_assoc($result);

?>



<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Credit categeory</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">update category </h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">category type</label>
                                                <input value="<?php echo $adminset['cat_name']?>"  id="cc-pament" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false">
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
