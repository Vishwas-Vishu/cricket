<?php
    require("function.php");
?>

<!doctype html>
<html lang="en">

<head>
  <title>Admins dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
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
            <li><a class="dropdown-item" href="course_regis.php">Add Course To The Participant</a></li>
            <li><a class="dropdown-item" href="ashow_parCoach.php">Show Participant with Course</a></li>
          </ul>
        </li>
        <li class="nav-item "><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-sign-out fa-lg"></i>
            Logout</a></li> &nbsp
      </ul>
    </div>
  </nav>
  <h1 class="display-3 my-2" style="text-align:center">Welcome to Super 11 Cricket Academy</h1>

  <div class="col-auto">
    <div class="row">
      <div class=" offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total no of Users : <?php echo get_user_count(); ?></h6>
          <div class="card-body">
            <a type="button" class="btn btn-block btn-outline-warning" href="show_user.php">Show users</a>
          </div>
        </div>
      </div>

      <div class="offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total No of Participants : <?php echo get_par_count() ?></h6>
          <div class="card-body">
            &nbsp &nbsp
            <a type="button" class="btn btn-outline-primary" href="participant.php">&nbsp &nbsp Add Participant &nbsp
              &nbsp</a> &nbsp &nbsp
            <a type="button" class="btn btn-outline-warning" href="ashow_Participant.php">&nbsp &nbsp Show Participant
              &nbsp
              &nbsp</a>
          </div>
        </div>
      </div> <br> <br>

      <div class="offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total no of Coaches : <?php echo get_coach_count() ?></h6>
          <div class="card-body">
            &nbsp &nbsp
            <a type="button" class="btn btn-outline-primary" href="coaches.php">&nbsp &nbsp Add Coach &nbsp
              &nbsp</a> &nbsp &nbsp
            <a type="button" class="btn btn-outline-warning" href="ashow_coach.php">&nbsp &nbsp Show Coaches &nbsp
              &nbsp</a>
          </div>
        </div>
      </div>

      <div class="offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total no of Participants Taken Courses : <?php echo get_courses_count() ?></h6>
          <div class="card-body">
            &nbsp
            <a type="button" class="btn btn-outline-primary" href="course_regis.php">&nbsp Add Course to the Partcipant
              &nbsp
            </a> &nbsp &nbsp
            <a type="button" class="btn btn-outline-warning" href="ashow_parCoach.php"> Show Participant with Course</a>
          </div>
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