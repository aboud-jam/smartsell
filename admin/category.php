
<?php include '../include/admin_header.php'; ?>
<?php include '../include/connection.php'; ?>


<?php

if (isset($_POST["submit"])) {
   $category=$_POST["category"];


   $insert="insert into category(cat_name) values('$category')";
mysqli_query($connection,$insert);
} 








  ?>


  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">add page</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">add category</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                           <!--  <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">category id</label>
                                                <input id="email" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                            </div> -->
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">category name</label>
                                                <input id="password" name="category" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="row">
                                                
                                            </div>
                                            <div>
                                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Add</span>
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



 <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>name</th>
                                                
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>

                                        <?php

                            $select="select * from category";
                            $result=mysqli_query($connection,$select);

                                    while($row=mysqli_fetch_assoc($result)){

                                        echo "<tr>";
                                    echo "<td> {$row['cat_id']} </td>";
                                    echo "<td> {$row['cat_name']}</td>";
                                           
                                            
                                    echo "<td> <a href='edit_category.php?cat_id={$row["cat_id"]}'>Edit</a></td>";

                           echo "<td> <a href='delete_category.php?cat_id={$row["cat_id"]}'>delete</a></td>";
                         
                                                }

                                               
                                        ?>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
<?php include '../include/admin_footer.php'; ?>