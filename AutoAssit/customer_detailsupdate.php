 
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php
        $username = "root";
        $password = "";
        $hostname = "localhost";
        $db = "autoassit";


        $conn = mysqli_connect($hostname, $username, $password, $db)
                or die("Unable to connect to MySQL");

             $result = mysqli_query($conn, "SELECT * FROM `customer`");
     
            while ($row = @mysqli_fetch_assoc($result)) {
            if ($_POST['nic'] || $_POST['email']) {
                if ($_POST['action'] == 'Deactivate') {
               // UPDATE user SET active='1' WHERE user_id='$_POST[nic]'
               // $result = mysqli_query($conn, "DELETE FROM user WHERE user_id='$_POST[nic]'");
                 $result = mysqli_query($conn, "UPDATE customer SET active='0' WHERE nic='$_POST[nic]'");
//                 $result = mysqli_query($conn, "DELETE FROM detail WHERE nic='$_POST[nic]'");
               
                 header("location:cusdetails.php");
                $to=$_POST['email'];
                $message='This is regarding to inform that your Account is deactivated from our system because of your unauthorized activities.plz inform to the administration to active your account.';
                $headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .         
            'MIME-Version: 1.0'. "\r\n".  
            'Content-Type:text/html;charset=utf-8';
            $result1= mail($to, "Hello..We are Auto Assist System.", $message,$headers);
           // var_dump($result1);
            }  else if ($_POST['action'] == 'Active') {
                
                $result = mysqli_query($conn, "UPDATE customer SET active='1' WHERE nic='$_POST[nic]'");
//                 $result = mysqli_query($conn, "DELETE FROM detail WHERE nic='$_POST[nic]'");
               
                 header("location:cusdetails.php");
                $to=$_POST['email'];
                $message='This is regarding to inform that your Account is activated now.';
                $headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .         
            'MIME-Version: 1.0'. "\r\n".  
            'Content-Type:text/html;charset=utf-8';
            $result1= mail($to, "Hello..We are Auto Assist System.", $message,$headers);
            }
                
            }
        }


        mysqli_close($conn);
        ?> 
    </body>
</html>

