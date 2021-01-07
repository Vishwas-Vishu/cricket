<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super 11 Cricket academy</title>
  <!-- bootstrap link -->
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/newStyle.css">
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-sm" style="background-color: #0DA2A6;">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="Images/cricket.jpeg" alt="" class="rounded-circle border" height="60"
          width="60">
        Super 11 Cricket academy</a>
      <ul class="nav navbar-nav navbar navbar-right">
        <li class="nav-item active"><a type="button" class="nav-link btn" href="index.php"><span
              class="fa fa-sign-in fa-lg "></span>User Login </a></li>
        <li class="nav-item "><a type="button" class="nav-link btn" href="admin_login.php"><span
              class="fa fa-sign-in fa-lg "></span>Admin Login </a></li>
      </ul>
    </div>
  </nav>

  <!-- <h1 class="display-3 my-2" style="text-align:center">!Welcome to Super 11 Cricket Academy</h1> -->

  <!-- <div id="carouselExampleControls" class="carousel slide ca " data-bs-ride="carousel" data-interval="1000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/ground.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/ground2.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/cricketers.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>-->

  <div id="image" class="p-5" style="background:url(ground.jpeg) no-repeat center fixed">
    <div class="container hg p-2">
      <div class="row col-12">
        <div class="offset-1 col-6">
          <h5 style="color:antiquewhite">User login</h5> <br>
          <form action="" method="post">
            <div class="form-group">
              <label for="userid" style="color:antiquewhite">Enter Email :</label>
              <input type="text" name="mail" class="form-control" placeholder="Enter Email" required="">
            </div>
            <div class="form-group my-2">
              <label for="password" style="color:antiquewhite"> Password :</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg my-1">Login</button>
          </form>
        </div>
        <?php
                session_start();
                if(isset($_POST['login']))
                {
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"cricket");
                    $query = "select * from users where mail = '$_POST[mail]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        if($row['mail'] == $_POST['mail'])
                        {
                            if ($row['password'] == $_POST['password']) 
                            {
                                $_SESSION['mail'] = $row['mail'];
                                header("Location:gallary.php");
                            }
                        
                            else
                            {
                            ?>
        <div class="alert alert-danger" role="alert">
          Wrong Entry—please Try Again!
        </div>
        <?php
                            }
                        }
                        
                    }
                }
            ?>
        <div class="offset-1 col-6 pd">
          <a type="button" class="btn btn-warning btn-lg" href="admin_login.php"> Admin Login</a> &nbsp &nbsp
          <a type="button" class="btn btn-warning btn-lg" href="register_User.php"> New User Sign Up</a>
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