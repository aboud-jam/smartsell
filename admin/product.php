<?php include '../include/admin_header.php'; ?>
<?php include '../include/connection.php'; ?>

<?php

if (isset($_POST['submit'])) {
    if ($_FILES['product_image']['error']==0) {
        
        $tmp_name=$_FILES['product_image']['tmp_name'];
        $image_name=$_FILES['product_image']['name'];
        $path="upload/";
        move_uploaded_file($tmp_name,$path.$image_name);

    }

    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $product_description=$_POST['product_description'];
    $product_image=$path.$image_name;
    $select_category=$_POST['select_category'];



    $insert="insert into product(pro_name,pro_price,pro_desc,pro_image,cat_id) values('$product_name','$product_price','$product_description','$product_image','$select_category')";
mysqli_query($connection,$insert);
   
}
?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Credit product</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">add product</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product_name</label>
                                                <input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">product_price</label>
                                                <input id="cc-name" name="product_price" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product_description</label>
                                                <input id="cc-number" name="product_description" type="tel" class="form-control cc-number identified visa" 
                                                  >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product_image</label>
                                                <input id="cc-number" name="product_image" type="file" class="form-control cc-number identified visa" 
                                                  >
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">category_name</label>
                                                <select name="select_category" class="form-control">
                                                    
                                                        <option>select category</option>
                                                        <?php

                                                        $select="select * from category";
                                                        $result=mysqli_query($connection,$select);
                                                        while ($row=mysqli_fetch_assoc($result)) {

                                                        echo "<option value={$row['cat_id']}>{$row['cat_name']}</option>";        

                                                        }


                                                        ?>

                                                </select> 
                                               
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div>
                                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save</span>
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



                    .<div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>name</th>
                                                <th>price</th>
                                                <th>descreption</th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           <?php

$select="select * from product";
$result=mysqli_query($connection,$select);
while ($row=mysqli_fetch_assoc($result)) {
    //fetch assoc to get data as array
    

echo "<tr>";
echo "<td>{$row["pro_id"]}</td>";
echo "<td>{$row["pro_name"]}</td>";
echo "<td>{$row["pro_price"]}</td>";
echo "<td>{$row["pro_desc"]}</td>";
echo "<td> <a href='edit_product.php?pro_id={$row["pro_id"]}'>edit</a></td>";
echo "<td> <a href='delete_product.php?pro_id={$row["pro_id"]}'>delete</a></td>";
echo "</tr>";



}

?>





                                        </tbody>
                                    </table>
                                </div>
                            </div>



                    <?php include '../include/admin_footer.php'; ?>