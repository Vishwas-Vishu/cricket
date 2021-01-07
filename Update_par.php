<?php
    session_start();
    require("function.php");
    $connection = mysqli_connect ("localhost","root","");
    $db = mysqli_select_db ($connection,"cricket");
    $par_id = "";
    $name = "";
    $gender = "";
    $age = "";
    $city = "";
    $contact = "";
    $r_d = "";   
    $query = "select * from paticipant where par_id = $_GET[id]";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $par_id = $row['par_id'];
        $name = $row['name'];
        $gender = $row['gender'];
        $age = $row['age'];
        $city = $row['city'];
        $contact = $row['contact'];
        $r_d = $row['r_d'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Participant</title>
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
        <li class="nav-item "><a class="nav-link" href="gallary.php">Gallary</a></li>
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
            <li><a class="dropdown-item" href="ashow_coach.php">Show Participant with Course</a></li>
          </ul>
        </li>
        <li class="nav-item "><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-sign-out fa-lg"></i>
            Logout</a></li> &nbsp
      </ul>
    </div>
  </nav>
  <h1 class="display-4" style="text-align:center">Update Participants</h1>
  <div class="">
    <div class="container pd">
      <div class="row col-12">
        <div class="offset-1 col-6">
          <form action="" method="post">
            <div class="form-group">
              <label for="Name">Name:</label>
              <input type="text" name="name" class="form-control" placeholder="Name" id="Name" required=""
                value="<?php echo $name?>">
            </div>
            <div class="form-group my-2">
              <label> Gender : </label> &nbsp
              <input type="radio" id="male" name="gender" value="male" required="">
              <label for="male"> Male </label> &nbsp
              <input type="radio" id="female" name="gender" value="female" required="">
              <label for="female"> Female </label><br>
            </div>
            <div class="form-group">
              <label>Age :</label>
              <input type="number" name="age" class="form-control" required="" placeholder="Age" required=""
                value="<?php echo $age?>"> <br>
            </div>
            <div class="form-group">
              <label for="city"> Your City:</label>
              <input type="text" name="city" class="form-control" placeholder="your city" id="city" required=""
                value="<?php echo $city?>">
            </div>
            <div class="form-group my-2">
              <label for="numb"> Contact Number:</label>
              <input type="number" name="contact" class="form-control" placeholder="Phone Number" id="numb" required=""
                value="<?php echo $contact?>">
            </div>
            <div class="form-group">
              <label>Registered date : </label>
              <input type="text" name="r_d" class="form-control" value="<?php echo date("yy-m-d");?>" required=""
                readonly>
            </div> <br>
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-2">Update Participant</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cricket");
        $query = "update paticipant set name = '$_POST[name]', gender = '$_POST[gender]', age = '$_POST[age]', city = '$_POST[city]',contact = $_POST[contact],r_d = '$_POST[r_d]' where par_id = $_GET[id]";
        $query_run = mysqli_query($connection,$query);

    ?>
<script type="text/javascript">
alert("Participant updated successfully...");
window.location.href = "ashow_Participant.php";
</script>

<?php

    }
?>