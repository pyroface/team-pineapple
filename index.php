
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

        <title>Hello, world!</title>
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
        </style>
    </head>

    <body class="pageBody">

        <section class="col-md-6 col-sm-12 page-text-section">
            <div class="page-text-div">
                <h1>CATCH COINS💰</h1>   
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Curabitur quis lectus tempus, mattis diam vitae, facilisis nisl. 
                    Quisque eleifend, mi a consequat suscipit, metus massa auctor sapien, 
                    eget blandit risus leo eu orci. 
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                </p>
                <div class="SignUpButton">
                    <input type="button" name="" value="SIGN UP" class="btn btn-warning signUp" data-toggle="modal" data-target="#signUpModal" />
                    <input type="button" name="" value="SIGN IN" class="btn btn-primary signIn" data-toggle="modal" data-target="#signInModal" />
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
                    <h4 class="modal-title caps"><strong>Create Account</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" name="username" class="form-control" id="usr" placeholder="Enter username..." required />
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password..." required />
                      </div>
                      <div class="imageupload panel panel-default">
                        <label for="image">Profile Image</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                              <label class="custom-file-label" for="inputGroupFile02">Upload image</label>
                            </div>
                          </div>
                        <div class="file-tab panel-body">
                          <label class="btn btn-default btn-file">
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- End of Modal #1 -->


            <?php
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
        
        // close connection
        mysqli_close($link);
        ?>

            <!-- [ Modal #2 ] -->
            <div class="modal fade" id="signInModal" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                  <div class="modal-header">
                    <h4 class="modal-title caps"><strong>Sign In</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" class="form-control" id="usr" placeholder="Enter username..." required />
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password..." required />
                      </div>
                      <button type="submit" name="save" class="btn btn-primary">Sign In</button>                            
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- Modal #2 -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

</html>

