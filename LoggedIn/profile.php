
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../css/offcanvas.css" rel="stylesheet">
    <link href="../css/hamburgers.css" rel="stylesheet">
    <link href="../css/profile.css" rel="stylesheet" >
    <style>
      @import url('https://fonts.googleapis.com/css?family=Varela+Round');
      a {
        font-family: 'Varela Round', sans-serif;
        font-size: 40px;
      }
      .bg-own {
        background: #8e44ad !important;
      }

      .navbar-brand {
      display: inline-block;
      padding-top: 0rem;
      padding-bottom: 0rem;
      margin-right: 1rem;
      font-size: 1.25rem;
      line-height: inherit;
      white-space: nowrap;
      }

      .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
      color: #ffc107!important;
      }

      tr:nth-child(even){
        background-color: gray;
      }

      .game-green {
        background: #1abc9c !important;
      }
      .title {
        font-family: "Varela round";
      }

    </style>

    <title>off-canvas</title>
  </head>
        <body class="bg-light">
          <nav class="navbar fixed-top navbar-dark bg-dark bg-own ">
            <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="40" height="40" alt="">
          </a>
            <button class="hamburger hamburger--slider navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
              <span class="hamburger-box">
              <span class="hamburger-inner navbar-toggler-icon"></span>
              </span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav mr-auto mt-5 text-center">
                <li class="nav-item">
                  <a class="nav-link" href="#">Leaderboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="game.php">Game</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Logout</a>
                </li>
              </ul>
            </div>
          </nav>



          <section class="index__profile vh-100 pt-5 game-green">
                <img src="../img/trophy.png" alt="game-avatar" class=" rounded mx-auto d-block h-25  game-green" >
                <h1 class="text-warning text-center title">Leaderboard</h1>

              <!--  
              <div class ="container">
                <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Score</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Carl</td>
                  <td>?</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Guled</td>
                  <td>?</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Anna</td>
                  <td>?</td>
                </tr>
              </tbody>
              </table>
              -->

<div class = "container">
<table class="table bg-white w-75 mt-5 mx-auto rounded">
  <thead class="thead-dark rounded">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Score</th>      
    </tr>
  </thead>
     <?php
        $conn = mysqli_connect("localhost", "root", "", "catchcoins");
        // Check connection
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Username, Score FROM accounts ORDER BY Score DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
          echo "<tr><td>" .  
            $row["Username"] . "</td><td>" .
            $row["Score"] . "</td></tr>";
          }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
      ?>
</table>

</div>
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/offcanvas.js"></script>
  </body>
</html>
