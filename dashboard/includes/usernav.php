<!-- 1]line 9 link 2]styles 11-26 3]32 4]4 added fa icons -->







<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .lightfont{
    color: white;
  }

 .fontsize1{
  font-size: 20px;
 }

 .fontsize2{
  font-size: 30px;
 }

#whiteicn{
  color: white;
}

</style>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading lightfont" style="padding-bottom: 11px; font-size: 30px">Blackboard 2.0 </div>
      <div class="list-group list-group-flush">
        <a href="../user/index.php" class="list-group-item list-group-item-action bg-dark lightfont" ><i class="fa fa-lg fa-home" aria-hidden="true">&nbsp&nbsp&nbsp</i>Dashboard</a>
        <a href="../user/notes.php" class="list-group-item list-group-item-action bg-dark lightfont"><i class="fa fa-lg fa-eye" aria-hidden="true">&nbsp&nbsp&nbsp</i>View Notes</a>
        <a href="../user/uploadnote.php?section=<?php echo $_SESSION['username']; ?>" class="list-group-item list-group-item-action bg-dark lightfont"><i class="fa fa-lg fa-upload" aria-hidden="true">&nbsp&nbsp&nbsp</i>Upload Note</a>
        <a href="../user/viewprofile.php?name=<?php echo $_SESSION['username']; ?>" class="list-group-item list-group-item-action bg-dark lightfont"><i class="fa fa-lg fa-user" aria-hidden="true">&nbsp&nbsp&nbsp</i>View Profile</a>
        <a href="../user/userprofile.php?section=<?php echo $_SESSION['username']; ?>" class="list-group-item list-group-item-action bg-dark lightfont"><i class="fa fa-lg fa-pencil" aria-hidden="true">&nbsp&nbsp&nbsp</i>Edit Profile</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn" id="menu-toggle"><i id="whiteicn" class="fa fa-3x fa-toggle-on" aria-hidden="true"></i></button>&nbsp &nbsp
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <h1 class="page-header fontsize2" style="color: white;">
               Welcome <span style="font-size: 40px"><?php echo $_SESSION['name']; ?></span>
            </h1>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0 fontsize1">
            <li class="nav-item active lightfont">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
