
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
    <link rel="stylesheet" href="../css/game.css">
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
  
      * {
    font-family: 'Chela One', cursive;
    color: white;
    letter-spacing: 2px;
}
.container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.container h1 {
    font-size: 90px;
    color: white;
    text-shadow: 2px 2px darkgrey;
    margin-left: -20px;
}

#background {
    background: url(../pictures/cityPicture1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    overflow: hidden;
    z-index: 1;
}
.dev-footer {
    margin: -80px 0 0 0;
    height: 80px;
    text-align: center;
    padding: 10px 0 0 0px;
    width: 100%;
}
.dev-footer p {
    margin: 0;
    padding: 0;
    color: white;
    text-transform: uppercase;
    text-shadow: 2px 2px darkgrey;
    font-family: Arial, Helvetica, sans-serif;
}
/* BOOTSTRAP BUTTON STYLING */
/* .btn {
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #ffffff;
    background-color: #ffc01f;
} */


/* ==================================================================================
MODAL STYLING
================================================================================== */


.modal-dialog .modal-content {
    text-align: center;
    background-color: #9b59b6; 
    border: 2px solid;
    border-radius: .8em;
    text-transform: uppercase;
    text-shadow: 2px 2px #9b59b6;
}

.modal-dialog .modal-header {
    justify-content: center;
    border-bottom: 2px solid #9b59b6;
    text-transform: uppercase;
    text-shadow: 2px 2px #9b59b6;
}

.modal-body {
    display: flex;
    justify-content: center;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-shadow: 2px 2px #9b59b6;
}

.modal-body h2 {
    font-size: 50px;
    text-transform: uppercase;
    text-shadow: 2px 2px #9b59b6;
}

.modal-body h3 {
    font-size: 1.25rem;
    text-transform: uppercase;
    text-shadow: 2px 2px #9b59b6;
}

.modal-body input{
    display: flex;
    justify-content: center;
    width: 100%;
    border: 2px solid;
    border-radius: .8em;
    background: #27ae60;
    text-align: center;
    text-transform: uppercase;
}

/* .modal-body button {
    background:#9b59b6;
    border: 2px solid;
    border-radius: 0.8em;
    text-transform: uppercase;
} */

*:focus {
    outline: none !important;
}
*:active {
    outline: none !important;
}

.text-black {
    color: #212529;
}
.normal {
    letter-spacing: normal;
    word-wrap: normal;
}

.swal-modal {
  background-color: rgba(63,255,106,0.69);
  border: 3px solid white;
}

.swal-title {
  margin: 0px;
  font-size: 16px;
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.21);
  margin-bottom: 28px;
  color: #fff;
}

  

    </style>

    <title>Catchcoins</title>
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
                  <a class="nav-link" href="profile.php">Leaderboard<span class="sr-only">(current)</span></a>
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


        <!-- index__map start -->

        <section class="index__map col-12 p-2 map">
            <!--<script src="../js/app_js.js">
            </script> -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title mx-auto pl-5 text-black" id="exampleModalLabel">Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <img src="../img/pwa.gif" alt="">
                      <p class="normal">
                        To gain the best experinece of the game save it to your home screen!!!  
                      </p>
                  </div>
                </div>
              </div>
            </div>

       
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2zN8wobSAuw_ejpGz9ll31ZMQL-iV7JE&libraries=geometry" type="text/javascript"></script>
          </section>
<!--           <div id="clockdiv">
           <div>
             <span class="minutes"></span>
             <div class="smalltext">Minutes</div>
           </div>
           <div>
             <span class="seconds"></span>
             <div class="smalltext">Seconds</div>
           </div> -->
           <script src="../js/app_js.js">
             </script>
         </div>
  
          <!-- index__map ends -->
  
  
            


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/offcanvas.js"></script>
    <script>
    $('#exampleModal').modal('show')
    </script>
  </body>
</html>