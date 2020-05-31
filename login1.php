<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
    session_start();
    if (isset($_POST['login'])) {
      $username  = $_POST['username'];
      $password = $_POST['password'];
      mysqli_real_escape_string($conn, $username);
      mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn , $query) or die (mysqli_error($conn));
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $user = $row['username'];
        $pass = $row['password'];
        $name = $row['name'];
        $email = $row['email'];
        $role= $row['role'];
        $course = $row['course'];
        if (password_verify($password, $pass )) {
          $_SESSION['id'] = $id;
          $_SESSION['username'] = $username;
          $_SESSION['name'] = $name;
          $_SESSION['email']  = $email;
          $_SESSION['role'] = $role;
          $_SESSION['course'] = $course;
          header('location: dashboard/');
        }
        else {
          echo "<script>alert('invalid username/password');
          window.location.href= 'login.php';</script>";

        }
      }
    }
    else {
          echo "<script>alert('invalid username/password');
          window.location.href= 'login.php';</script>";

        }
    }
?>
<br><br><br>
<style type="text/css">img {width:100%;}</style>
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 text-white text-center" style="background-color: #343c44">
                <div class=" " >
                    <div class="card-body">
                        <img src="images/login3.png" style="width:30%">
                        <h2 class="py-3" >Login</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore.</p>
                        <a href="signup.php" style="color: white;">Not yet registered?</a>
                        <a href="#Refister" style="color: white;">Forgot password?</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border" style="text-align: center;">
                <h4 class="pb-4">Please fill with your details</h4>
                <form  style="display: inline-block;" method="POST">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                          <input id="username" name="username" placeholder="username" class="form-control" type="text">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input id="password" name="password" placeholder="password" class="form-control" required="required" type="text">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="button" class="btn login login-submit" name="login" value="login" style="background-color: #343c44; color: white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php include 'includes/footer.php';?>