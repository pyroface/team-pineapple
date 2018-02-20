<?php            $conn = mysqli_connect("localhost", "root", "", "catchcoins");
            //echo ("yo!!!!");
            if(isset($_POST['loginButton'])) {
                // username and password sent from form 
                
                $myusername = mysqli_real_escape_string($conn, $_REQUEST['usr']);
                $mypassword = mysqli_real_escape_string($conn, $_REQUEST['pwd']); 
                //echo ("<div id='yo'>" + $myusername + $mypassword +"</div>");
                $sql = "SELECT * FROM accounts WHERE Username = '$myusername' AND Password = '$mypassword'";
                
                $result = $conn->query($sql);

                //$mysqli_result = mysqli_query($conn,$sql);
                //$row = mysqli_fetch_array($mysqli_result,MYSQLI_ASSOC);
           
                //$count = mysqli_num_rows($mysqli_result);
           
                // If result matched $myusername and $mypassword, table row must be 1 row
             
                if($result->num_rows === 1) {
                 
                    $_SESSION['usr'] = $myusername;
                    $ID = $result->fetch_assoc()['ID'];
                    header("location: Loggedin/game.php?currentUser=$ID");
                }
                else {
                    $error = "Your Login Name or Password is invalid";
                }
                  
            }
            // close connection
            mysqli_close($conn);
        
        ?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/landingpage.css">

        <link rel="shortcut icon" href="img/logo.ico">
        <link rel="shortcut icon" href="img/logo.png" sizes="16x16">
        <link rel="shortcut icon" href="img/logo.png" sizes="32x32">
        <link rel="shortcut icon" href="img/logo.png" sizes="96x96">
        <link rel="apple-touch-icon" href="img/logo.png" sizes="180x180">
        <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">

        <title>Catchcoins💰</title>
        <style>
            /* ---------- landing-page-styling ---------- */

.pageBody {
    background: linear-gradient(#AFE0FF, #FFEE94);
    overflow: hidden;
}

.page-text-section {
    height: 100vh;
}

.page-text-div {
    margin: 10em;
}

.page-text-div p {
    margin-top: 2em;
    padding: 0;
}

.signUp {
    margin-right: 0.5em;
}

.page-text-section h1{
    font-family: 'Bungee', cursive;
}

/* ------------ for mobile view ------------- */

@media only screen and (max-width: 756px) {
    .page-text-div {
        margin: 5em 0em;
        text-align: center;
    }

    .SignUpButton {
        text-align: center;
    }

    .bild {
        display: none;
    }

    .SignUpButton {
        margin-top: 20%;
    }

}

/* ------------ for mobile view end ------------- */

.bild {
    position: absolute;
    top: 10%;
    clip-path: inset(0px 0px 100px 0px);
}



/* ---------- landing-page-styling end ---------- */

.onTop {
    z-index: 100;
}

.modal-backdrop {
    z-index: -1;
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
   /*  text-transform: uppercase; */
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

        </style>
    </head>

    <body class="pageBody">

        <section class="col-md-6 col-sm-12 page-text-section">
            <div class="page-text-div">
                <h1 class="text-black normal">CATCH💰COINS</h1>   
                <p class="text-black">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Curabitur quis lectus tempus, mattis diam vitae, facilisis nisl. 
                    Quisque eleifend, mi a consequat suscipit, metus massa auctor sapien, 
                    eget blandit risus leo eu orci. 
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                </p>
                <div class="SignUpButton">
                    <input type="button" name="" value="SIGN UP" class="btn btn-warning signUp" data-toggle="modal" data-target="#signUpModal" />
                    <input type="button" name="" value="SIGN IN" class="btn btn-primary signIn" data-toggle="modal" data-target="#signInModal" />
                  <!--   <input type="button" name="" value="SIGN IN" class="btn btn-primary signIn" data-toggle="modal" data-target="#exampleModal" /> -->
                </div>                
                <img class="bild img-fluid ml-75" src="img/mobile.png">
            </div>
        </section>

         <!-- [ Modal #1 ] -->
         <div class="modal fade" id="signUpModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                  <div class="modal-header">
               <!--      <h4 class="modal-title caps mx-auto"><strong>Create Account</strong></h4> -->
                        <label class="display-4 mx-auto pl-5">Create!!!</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form autocomplete="off" method="post">
                      <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" name="username" id="usr" placeholder="Enter username..." required />
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password"id="pwd" placeholder="Enter password..." required />
                      </div>
<!--                       <div class="imageupload panel panel-default">
                        <label for="image">Profile Image</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                              <label class="custom-file-label" for="inputGroupFile02">Upload image</label>
                            </div>
                          </div> -->
<!--                         <div class="file-tab panel-body">
                          <label class="btn btn-default btn-file">
                          </label>
                        </div> -->
                    
                      <button type="submit" name="create" class="btn btn-warning">Create</button>
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- End of Modal #1 -->


            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto pl-5 text-black" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <img src="img/pwa.gif" alt="">
                <p class="normal">
                   To gain the best experinece of the game save it to your home screen!!!  
                </p>
      </div>
    </div>
  </div>
</div> -->

<!-- ends -->




        <?php
        // SIGN IN PHP CODE
        if(isset($_POST['create'])) {
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysqli_connect("localhost", "root", "", "catchcoins");
            
            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            
            // Escape user inputs for security
            $name = mysqli_real_escape_string($link, $_REQUEST['username']);
            $password= mysqli_real_escape_string($link, $_REQUEST['password']);
            $image = mysqli_real_escape_string($link, $_REQUEST['image']);
            
            // attempt insert query execution
            $sql = "INSERT INTO accounts (Username, Password, Image) VALUES ('$name', '$password', '$image')";
            if(mysqli_query($link, $sql)){
                echo "Records added successfully.";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }

        }   
        // close connection
        // mysqli_close($conn);
        

            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname = "catchcoins";
        
            // Create connection
            //$conn = new mysqli($server, $username, $password, $dbname);

        ?>

        

            <!-- [ Modal #2 ] -->
            <div class="modal fade" id="signInModal" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                  <div class="modal-header">
         <!--            <h4 class="modal-title caps  mx-auto pl-5"><strong>Sign In</strong></h4> -->
                   <label class="display-4 mx-auto pl-5">Sign In</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form autocomplete="off" method="post">
                      <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" name="usr"  placeholder="Enter username..." required />
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="pwd"  placeholder="Enter password..." required />
                      </div>
                      <button type="submit" name="loginButton" class="btn btn-primary">Sign In</button>                            
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- Modal #2 -->
      
            <?php
               /*  $server = "localhost";
                $username = "root";
                $password = "";
                $dbname = "catchcoins";

                // Create connection
                $conn = new mysqli($server, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                } 
                echo "Connected successfully"; */

                /* $sql = "INSERT INTO users (username, password)
                VALUES ('Kanya', '56473');"; */

             /*    if(isset($_POST['save']))
                {
                $sql = "INSERT INTO users (username, password)
                VALUES ('".$_POST["username"]."','".$_POST["password"]."')";

                $result = mysqli_query($conn,$sql);
                } */

               
            ?>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

</html>

