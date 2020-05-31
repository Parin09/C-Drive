<!--1]line 9 2]16 class -->

<?php include '../includes/connection.php';?>
<?php include '../includes/adminheader.php';?>

<body>
  <?php include '../includes/usernav.php';?>
      <div class="container-fluid">
        <h3 class="mt-4"> Dashboard > Uploaded Files</h3><hr>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <form action="" method="post">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Type </th>
                                    <th>Uploaded on</th>
                                    <th>Uploaded by </th>
                                    <th>Status</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM uploads ORDER BY file_uploaded_on DESC";
                                    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    if (mysqli_num_rows($run_query) > 0) {
                                    while ($row = mysqli_fetch_array($run_query)) {
                                        $file_id = $row['file_id'];
                                        $file_name = $row['file_name'];
                                        $file_description = $row['file_description'];
                                        $file_type = $row['file_type'];
                                        $file_date = $row['file_uploaded_on'];
                                        $file_uploader = $row['file_uploader'];
                                        $file_status = $row['status'];
                                        $file = $row['file'];

                                        echo "<tr>";
                                        echo "<td>$file_name</td>";
                                        echo "<td>$file_description</td>";
                                        echo "<td>$file_type</td>";
                                        echo "<td>$file_date</td>";
                                        echo "<td><a href='viewprofile.php?name=$file_uploader' target='_blank'> $file_uploader </a></td>";
                                        echo "<td>$file_status</td>";
                                        echo "<td><a href='../../allfiles/$file' target='_blank' style='color:green'>View </a></td>";
                                        echo "</tr>";
                                    }
                                  }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
