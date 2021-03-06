<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>

        <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom:65px;
                border-radius: 0;

            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #d3d3d3;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;} 
            }
                               body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 110px;
    padding-top: 3px;
}

.main-login{
 	background-color: #FFFFFF;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow:10px 10px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 10px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
.container {

    width: 600px;
    background: #fff;
    color: #555;
    border: 3px solid #ccc;
        border-top-color: rgb(204, 204, 204);
        border-top-style: solid;
        border-top-width: 3px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    border-radius: 10px;
    border-top: 3px solid #ddd;
    padding: 1em 2em;
    margin: 0 auto;
    -webkit-box-shadow: 3px 7px 5px #000;
    -moz-box-shadow: 3px 7px 5px #000;
    -ms-box-shadow: 3px 7px 5px #000;
    box-shadow: 3px 7px 5px #000;

}
.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
        </style>
    </head>
    <body>

        <?php
        
        $password = $confirm_password ="";
        $password_err = $confirm_password_err ="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = "root";
            $password = "";
            $hostname = "localhost";
            $db = "autoassit";
            $conn = mysqli_connect($hostname, $username, $password, $db)
                    or die("Unable to connect to MySQL");

            $nic=$_POST['uid'];
            $oname = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $uname = $_POST['uname'];
            $pass =$_POST['password'];
           // $tp = $_POST['tp'];
            $enc= base64_encode($pass);

if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
            
      if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){     
           $password= password_hash($password, PASSWORD_DEFAULT);
            if (isset($_POST['submit'])) {
                
                if (!empty($_POST['type'])) {
                    $query="START TRANSACTION;";
                    $result = mysqli_query($conn, $query);
                            $query1= "INSERT INTO detail values(NULL,'" . $nic . "','" . $oname . "','" . $address . "','" . $email . "')";
                            // $query2="INSERT INTO users values(NULL,'" . $uname . "','" . $pass . "',0)";
                              $query2="INSERT INTO user values(NULL,'" . $nic . "','" . $uname . "','" . $password . "',0)";
                             $result1 = mysqli_query($conn, $query1);
                            $result2= mysqli_query($conn, $query2);
                    foreach ($_POST['type'] as $selected) {

                        if ($selected == 'Garaj') {                            
                              $query3 ="INSERT INTO section values(NULL,'" . $nic . "','Garaj',0)";                 
                            $result3= mysqli_query($conn, $query3);
                        }
                        if ($selected == 'Service Center') {
                             $query4 ="INSERT INTO section values(NULL,'" . $nic . "','Srevice_Center',0)";                 
                            $result4= mysqli_query($conn, $query4);
                        }
                        if ($selected == 'Sparepart') {
                             $query5 ="INSERT INTO section values(NULL,'" . $nic . "','Sparepart_center',0)";                 
                            $result5= mysqli_query($conn, $query5);
                        }
                    
                    }
                    $query6="COMMIT;";
                    $result6= mysqli_multi_query($conn, $query6);
                }
                
            }
           
             
            if ($result) {
                
                echo'<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Thank you for contacting with us.we send your details to administration to check.</p>
            <hr>
            <p class="mb-0">After checking the details that you entered, we send you to a message to inform about.</p>
        </div>';
            } else {
                echo "Error occured". mysqli_error($conn);
                

            }
        }
            mysqli_close($conn);
        }
        ?>



        <a class="navbar-brand logo" href="home.php"><img src="image/logo1.png" alt="logo"></a>
        <!--<nav class="nav nav-pills nav-justified navbar navbar-expand-lg navbar navbar-dark bg-dark">-->
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-light navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="upmenu">

            </div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="nav navbar-nav" id="navbarontop">
                            <li class="active"><a href="home.php">HOME</a> </li>
				<li>
                                    <a href="garajsearch.php">Garaj</a>
 
				</li>
				<li>
                                    <a href="sevicesearch.php">SERVICE CENTER</a>
 
				</li>
				<li>
                                    <a href="spsearch.php">SPAREPART CENTER</a>
 
				</li>
				<li>
                                    <a href="contact.php">CONTACT US</a>
 
				</li>
				<li>
					<a href="#">ABOUT US</a>
 
				</li>
<!--				<div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>-->
			</ul>

<!--                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>-->
<!--                <ul class="nav navbar-nav navbar-right">
          <li><a href="../register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>-->
            </div>
        </nav>








       
                <div class="col-sm-2 sidenav">
<!--                    <div class="well">
                        <p><img src="image-1706.jpg" alt="img" width="400" height="300"></p>
                    </div>
                    <div class="well">
                        <p></p>
                    </div>-->
                </div>
        
         <div class="container-fluid text-center">    
             <div class="row content">
                     
                
                  <div class="col-sm-8 text-left" > 
                    <!--<div class="jumbotron" style="background-color:#ffffff;">-->
                  <form class="form-horizontal" action="Registration.php" method="post">
                 <h1 class="title" align='center'>Registration</h1>
<!--                    <h1>Registration</h1>
                    <hr>-->
           
                       
                    <div class="container">
<!--			<div class="row main">-->
<!--				<div class="panel-heading">

	            </div> -->
		
                            <div id="container">
<!--                    <div class="main-login main-center">-->
                   
<!--                        <div class="form-row">-->
                    <div class="form-group">
				<label for="name" class="cols-sm-2 control-label">User NIC</label>
					<div class="cols-sm-10">
					<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                              <input type="text" class="form-control is-valid" name="uid" id="name"  placeholder="NIC" required/>
				</div>
				</div>
				</div>

                            <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control is-valid" name="name" id="name"  placeholder="Name" required/>
								</div>
							</div>
						</div>

                             <div class="form-group">
<!--                            <div class="col-md-4 mb-3">-->
                                <label for="validationServer02">Address</label>
                                <div class="cols-sm-10">
				<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control is-valid" id="validationServer02" placeholder="address" name="address" required>
                               	</div>
                                </div> 
                                </div>
                            <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                                        <input type="email" class="form-control is-valid" name="email" id="email"  placeholder="Email" required/>
								</div>
							</div>
						</div>

                        <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control is-valid" name="uname" id="username"  placeholder="Username" required/>
								</div>
							</div>
						</div>

 <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

<!--                        <div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control is-valid" name="password" id="password"  placeholder="Password"/>
								</div>
							</div>
						</div>
 <div class="form-group">
							<label for="confirm_password" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control is-valid" name="confirm_password" id="password"  placeholder="confirm_password"/>
								</div>
							</div>
						</div>-->

                                </div>
                            <div class="form-group">
				<label for="validationServer05">Select the type</label>
				<div class="cols-sm-10">
				<div class="input-group">
				
                                    <input type="checkbox" name="type[]" value="Garaj">Garaj&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="type[]" value="Service Center"> Service Center&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="type[]" value="Sparepart">Sparepart Center&nbsp;&nbsp;&nbsp;
				</div>
				</div>
				</div>


                               
<!--                                <div class="col-md-3 mb-3">-->
<!--                                    <label for="validationServer05">Select the type</label>
                                    
                                            
                                    <input type="checkbox" name="type[]" value="Garaj">Garaj<br>
                                    <input type="checkbox" name="type[]" value="Service Center"> Service Center<br>
                                    <input type="checkbox" name="type[]" value="Sparepart">Sparepart Center<br>-->
                                    
<!--                                </div>-->
                              
<!--                            </div>-->
<!--                            <div class="form-group">
                                
                                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required><br>
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                             
                            </div>-->
<!--<div class="form-group ">
			<button type="button" class="btn btn-primary btn-lg btn-block login-button" name="submit">Submit</button>
						</div>-->
                            
                        <div class="wrapper">
                           <button class="btn btn-primary" type="submit" name="submit">Submit 
                                                    </button>
                        </div>
                   
                        </div>
<!--                        </div>-->

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                
<!--                <div class="col-sm-2 sidenav">
                    <div class="well">
                        <p><img src="image-1706.jpg" alt="img" width="400" height="300"></p>
                    </div>
                    <div class="well">
                        <p></p>
                    </div>
                </div>-->
           
                      </form>
                         <!--</div>-->
        </div>
</div></div>

<!--<div class="bottommenu">
    <div class="bottomlogo">
        <span class="dotlogo">&bullet;</span><img src="image/logo1.png" alt="logo1"><span class="dotlogo">&bullet;</span>
    </div>

    <p>"Our main Objective is<br>
        add Value to our customer with our superb service"</p>
    <img src="image/line.png" alt="line"> <br>

    <div class="footer">
        <div class="copyright">
            &copy; Copy right 2018 | <a href="#">Privacy </a>| <a href="#">Policy</a>
        </div>
        <div class="atisda">
            <a href="#">Group Project II (Group No.13) </a> 
        </div>
    </div>
</div>-->

    </body>

</html>
