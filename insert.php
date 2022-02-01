<?php include('includes/header.php'); ?>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <h3>Insert Product Data</h3>
            <hr>
            <form action="code.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <input type="number" name="phoneno" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="save_puch_data">save Data </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>