<?php

require_once('../shared/header.php'); 
$id = $_GET['id'];

$sql = "SELECT * FROM rider WHERE id = $id";
$row = mysqli_fetch_assoc(mysqli_query($con, $sql));

$sql2 = "SELECT * FROM login_details WHERE id = $id";
$row2 = mysqli_fetch_assoc(mysqli_query($con, $sql2));
?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2">Update Rider</h2>
        <div class="col-md-5">
            <form class="mt-5" action="../../controller/queries/updateRider.php" method="post">
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Contact No.</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" value="<?php echo $row['age'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Blood Group</label>
                        <input type="text" class="form-control" name="blood" value="<?php echo $row['blood'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row2['email'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $row2['password'] ?>">
                    </div>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']; ?>"/>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>



<?php require_once('../shared/footer.php') ?>