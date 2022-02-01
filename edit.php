<?php include('includes/header.php'); ?>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <h3>Edit and Update Product Data</h3>
            <hr>
            <?php
            $token = $_GET['token'];
            include('includes/dbconfig.php');
            $ref = "contact/";
            $getdata = $database->getReference($ref)->getchild($token)->getValue();
            ?>
            <form action="code.php" method="post">
                <input type="hidden" name="token" value="<?php echo $token; ?>">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" value="<?php echo $getdata['username']; ?>" placeholder="Enter Username">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="<?php echo $getdata['email']; ?>" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <input type="number" name="phoneno" class="form-control" value="<?php echo $getdata['phoneno']; ?>" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="update_data">Update Data </button>
                    <hr>
                    <a href="index.php" class="btn btn-danger btn-block">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>