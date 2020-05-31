<?php
include ('../includes/connection.php');
include ('../includes/adminheader.php');
?>

<div id="wrapper">
    <?php include '../includes/usernav.php';?>
        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">

<?php 
if (isset($_GET['name'])) {
    $user = mysqli_real_escape_string($conn , $_GET['name']);
    $query = "SELECT * FROM users WHERE username= '$user' ";
    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
    if (mysqli_num_rows($run_query) > 0 ) {
    while ($row = mysqli_fetch_array($run_query)) {
	$name = $row['name'];
	$email = $row['email'];
	$course = $row['course'];
	$role = $row['role'];
	$bio = $row['about'];
	$image = $row['image'];
    $joindate = $row['joindate'];
    $gender = $row['gender'];
}
}
else {
	$name = "N/A";
	$email = "N/A";
	$course = "N/A";
	$role = "N/A";
	$bio = "N/A";
	$image = "profile.jpg";
    $gender = "N/A";
    $joindate = "N/A";
}

?>


<br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-lg-6">  
                        <img src="../profilepics/<?php echo $image; ?>" height = "300" width = "300" alt="" class="img-rounded img-responsive"/>
                    </div>
                    <div class="col-sm-8 col-md-12">
                        <hr><h2>
                           <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp<?php echo $name; ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <i class="fa fa-globe" aria-hidden="true"></i> <?php echo $course; ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <i class="fa fa-book" aria-hidden="true"></i> <?php echo $role; ?></h2><hr>
                        

                        <center>
                            <p class="text-left"><strong>Department: </strong><?php echo $course; ?></p>
                            <hr>
                            <p class="text-left"><strong>Role: </strong><?php echo $role; ?></p>
                            <hr>
                            <p class="text-left"><strong>Gender: </strong><?php echo $gender; ?></p>
                            <hr>
                            <p class="text-left"><strong>Email: </strong><?php echo $email; ?></p>
                            <hr>
                            <p class="text-left"><strong>Join Date: </strong><?php echo $joindate; ?></p>
                            <hr>
                            <p class="text-left"><strong>Bio: </strong><br><?php echo $bio; ?></p>
                            <hr>
                        </center>
                        <!--
                        <p>
                            <font color= "brown" > Department: </font> <?php echo $course; ?>
                            <br/>
                            <font color= "brown" > Role: </font> <?php echo $role; ?>
                            <br/>
                            <font color= "brown" > Gender: </font> <?php echo $gender; ?>
                            <br/>
                            <font color="brown">  Email: </font> <?php echo $email; ?>
                            <br />
                            <font color="brown"> Join Date: </font> <?php echo $joindate; ?>
                            <br/>
                            <font color="brown" > Bio: </font> <?php echo $bio; ?>
                        </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<?php } else {
    header("location:index.php");
    } ?>
