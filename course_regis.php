<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Register</title>
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
            <li><a class="dropdown-item" href="coaches.php">Add Course To The Participant</a></li>
            <li><a class="dropdown-item" href="ashow_parCoach.php">Show Participant with Course</a></li>
          </ul>
        </li>
        <li class="nav-item "><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-sign-out fa-lg"></i>
            Logout</a></li> &nbsp
      </ul>
    </div>
  </nav>
  <div class="paralax" style="
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: screen;
    background-image: url('Images/pull.jpeg'); background-color: rgb(162, 204, 178); min-height: 750px;">
    <h1 class="display-4 pt-2" style="text-align:center;font-weight:500  ">Course Register</h1>
    <div class="">
      <div class="container pd">
        <div class="row col-12">
          <div class="offset-1 col-6">
            <form action="" method="POST">
              <label for="course" style="font-weight:500;font-size:20px">Select Course:</label>
              <select class="form-select" aria-label="Default select example" id="course" name="course">
                <option selected>--Select Course--</option>
                <option value="Annual Academy">Annual Academy</option>
                <option value="Weekend Academy">Weekend Academy</option>
                <option value="Full Day Coaching Programme">Full Day Coaching Programme</option>
                <option value="Sports Psychology and Counseling">Sports Psychology and Counseling</option>
                <option value="Summar Camp">Summar Camp</option>
                <option value="Net Hire">Net Hire</option>
              </select>
              <div class="form-group mt-4" style="font-weight:500;font-size:20px">
                <label for="par">Participant ID :</label>
                <select class="form-control" name="par_id" id="par">
                  <option>-Select Participant ID-</option>
                  <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"cricket");
                            $query = "CALL `get_pid`()";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                  <option><?php echo $row['par_id'];?></option>
                  <?php
                            }
                        ?>
                </select> <br>
              </div>
              <label for="batch" style="font-weight:500;font-size:20px">Batch:</label>
              <select class="form-select" aria-label="Default select example" name="batch" id="batch">
                <option selected>Batch:</option>
                <option value="Morning Batch">Morning Batch</option>
                <option value="Afternoon Batch">Afternoon Batch</option>
                <option value="Full Day">Full Day</option>
              </select>
              <div class="form-group mt-4">
                <label for="coach" style="font-weight:500;font-size:20px">Assign Coach :</label>
                <select class="form-control" name="c_name" id="coach">
                  <option>-Select Coach here-</option>
                  <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"cricket");
                            $query = "CALL `get_coach`()";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                  <option><?php echo $row['c_name'];?></option>
                  <?php
                            }
                        ?>
                </select> <br>
              </div>
              <label for="fees" style="font-weight:500;font-size:20px">Fees:</label>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">₹</span>
                <input type="number" class="form-control" placeholder="Fees" name="fees"
                  aria-describedby="addon-wrapping" id="fees">
              </div>
              <div class="form-group mt-4">
                <label for="add" style="font-weight:500;font-size:20px">Select User Email:</label>
                <select class="form-control" name="mail" id="add">
                  <option>-Select User with mail-</option>
                  <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"cricket");
                            $query = "select mail from users";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                  <option><?php echo $row['mail'];?></option>
                  <?php
                            }
                        ?>
                </select> <br>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-lg mt-2">Confirm</button>
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
        $query = "insert into courses values(null,'$_POST[course]', $_POST[par_id],'$_POST[batch]','$_POST[c_name]','$_POST[fees]','$_POST[mail]')";
        $query_run = mysqli_query($connection,$query);
    ?>
<script type="text/javascript">
alert("Selected Course Succesfully...");
window.location.href = "ashow_parCoach.php";
</script>
<?php
    }
?>