<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Coaches</title>
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style.css">
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #0DA2A6" ;>
    <div class=" container">
      <a class="navbar-brand" href=""><img src="Images/cricket.jpeg" alt="" class="rounded-circle border" height="60"
          width="60">
        Super 11 Cricket Academy</a>
      <ul class="nav navbar-nav navbar navbar-right">
        <li class="nav-item active"><a class="nav-link" href="admin_dashboard.php"><i
              class="fa fa-home fa-lg"></i>Home</a></li>
        <li class="nav-item "><a class="nav-link" href="show_user.php">Show user</a></li>
        <li class="nav-item "><a class="nav-link" href="gallaryAdmin.php">Gallary</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Participant
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="participant.php">Add Participant</a></li>
            <li><a class="dropdown-item" href="ashow_Participant.php">Show Participant</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Coach
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="coaches.php">Add Coach</a></li>
            <li><a class="dropdown-item" href="ashow_coach.php">Show Coach</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Courses and Fees
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="course_regis.php">Add Course To The Participant</a></li>
            <li><a class="dropdown-item" href="ashow_parCoach.php">Show Participant with Course</a></li>
          </ul>
        </li>
        <li class="nav-item "><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-sign-out fa-lg"></i>
            Logout</a></li> &nbsp
      </ul>
    </div>
  </nav>
  <div class="parallax" style="
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: screen;
    background-image: url('Images/drive.jpeg'); background-color: rgb(241, 185, 178); min-height: 750px;">
    <h1 class="display-4 pt-2" style="text-align:center;font-weight:500">Add Coach</h1>
    <div class="">
      <div class="container pd">
        <div class="row col-12">
          <div class="offset-1 col-6">
            <form action="" method="POST">
              <div class="form-group my-2">
                <label for="Name" style="font-weight:500;font-size:20px"> Coach Name:</label>
                <input type="text" name="c_name" class="form-control" placeholder="Name" id="Name" required="">
              </div>
              <div class="form-group mt-4">
                <label style="font-weight:500;font-size:20px"> Gender : </label> &nbsp
                <input type="radio" id="male" name="gender" value="male">
                <label for="male" style="font-weight:500;font-size:20px"> Male </label> &nbsp
                <input type="radio" id="female" name="gender" value="female">
                <label for="female" style="font-weight:500;font-size:20px"> Female </label><br>
              </div>
              <div class="form-group mt-4">
                <label style="font-weight:500;font-size:20px">Age :</label>
                <input type="number" name="age" class="form-control" required="" placeholder="Age"> <br>
              </div>
              <div class="form-group mt-2">
                <label for="numb" style="font-weight:500;font-size:20px"> Contact Number:</label>
                <input type="number" name="contact" class="form-control" placeholder="Phone Number" max="9999999999"
                  id="numb" required="">
              </div>
              <div class="form-group mt-4">
                <label for="numb" style="font-weight:500;font-size:20px"> Coach role :</label>
                <input type="text" name="c_role" class="form-control" placeholder="Coach Role" id="numb" required="">
              </div>
              <div class="form-group mt-4">
                <label for="about" style="font-weight:500;font-size:20px">Experience:</label>
                <input type="text" name="about" class="form-control" required="" placeholder="Experience" id="about">
              </div>
              <div class="form-group mt-4">
                <label style="font-weight:500;font-size:20px">Joined date : </label>
                <input type="text" name="c_d" class="form-control" value="<?php echo date("yy-m-d");?>" required=""
                  readonly>
              </div> <br>
              <button type="submit" name="submit" class="btn btn-primary btn-lg mt-2">Add Coach</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container-fluid">
      <div class="row">

        <div class="offset-1 col-lg-2 align-self-center">
          <div class="text-center">
            <p>
              DBMS mini project <br>
              Dept of CSE.
            </p>
          </div>
        </div>

        <div class="offset-1 col-lg-3">
          <h6>Page creator</h6>
          <h7>About Team</h7><br>
          Vishwas D Raj <br>
          5th sem, ISE<br>
          DBIT Engineering Collage<br>
        </div>
        <div class="col-lg-3 col-sm-5 offset-1">
          &nbsp &nbsp &nbsp &nbsp<a href="" class="fa fa-linkedin"></a> &nbsp &nbsp
          <a href="" class="fa fa-github"></a>
        </div>

      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright
    </div>
    <!-- Copyright -->

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cricket");
        $query = "insert into coaches values(null,'$_POST[c_name]','$_POST[gender]','$_POST[age]','$_POST[contact]','$_POST[c_role]','$_POST[about]','$_POST[c_d]')";
        $query_run = mysqli_query($connection,$query);
    ?>
<script type="text/javascript">
alert("Coach added successfully!!!");
window.location.href = "ashow_coach.php";
</script>
<?php
    }
?>