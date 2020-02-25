<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">
 <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>
    <script src="../js/main.js"></script>
</head>

<body>


<?php
include "../config/connection.php";
?>

<?php

session_start();

        $username=$_POST["username1"];
        $password=$_POST["password1"];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($conn,$username);
        $password = mysqli_real_escape_string($conn,$password);

    if(empty($username) || empty($password)){
        ?>
        <div class="alert alert-danger" role="alert">
        <i class='fa fa-times-circle'></i> Invalid username or password
            </div>
        <?php
    }else{

    $query=$conn->query("SELECT * from account where username='$username' and password='$password' and category='startup'");
    if($query->num_rows ==1){

      $sql4="SELECT * from account where username like '$username'";
      $result4=$conn->query($sql4);

        if ($row4 = $result4->fetch_assoc()) {
            $username_real=$row4['username'];
            $password_real=$row4['password'];

        }

          if ($username===$username_real and $password===$password_real){
                
                 $_SESSION['start_up_data_2020']=$username;
                  ?>
                  <div class="alert alert-success" role="alert">
                  <i class='fa  fa-check-circle'></i> Login successfull. Redirecting . . .
                      </div>
                  <?php
                  echo "<script>location.href='account/index.php'</script>";    
              }else{
                   ?>
                   <div class="alert alert-danger" role="alert">
                   <i class='fa fa-times-circle'></i> Invalid Username or Password 
                    </div>
                   <?php
                   echo "<script>location.href='login.php'</script>";   
             }

          }
          else{

                 $query1=$conn->query("SELECT * from account where username='$username' and password='$password' and category='investor'");
                        if($query1->num_rows ==1){

                    $sql5="SELECT * from account where username like '$username'";
                    $result5=$conn->query($sql5);

                      if ($row5 = $result5->fetch_assoc()) {
                          $username_real1=$row5['username'];
                          $password_real1=$row5['password'];

                      }

                if ($username===$username_real1 and $password===$password_real1){
                            
                        
                         $_SESSION['investor_data_2020']=$username;
                            ?>
                            <div class="alert alert-success" role="alert">
                            <i class='fa  fa-check-circle'></i> Login successfull. Redirecting . . .
                                </div>
                            <?php
                            echo "<script>location.href='investor/index.php'</script>";    
                        }else{
                             ?>
                             <div class="alert alert-danger" role="alert">
                             <i class='fa fa-times-circle'></i> Invalid Username or Password 
                              </div>
                             <?php
                             echo "<script>location.href='login.php'</script>";   
                       }
                    }
              else{

                 $query1=$conn->query("SELECT * from admin where username='$username' and password='$password'");
                        if($query1->num_rows == 1){

                    $sql5="SELECT * from admin where username like '$username'";
                    $result5=$conn->query($sql5);

                      if ($row5 = $result5->fetch_assoc()) {
                          $username_real1=$row5['username'];
                          $password_real1=$row5['password'];

                      }

                if ($username===$username_real1 and $password===$password_real1){
                            
                        
                         $_SESSION['admin_data_2020']=$username;
                            ?>
                            <div class="alert alert-success" role="alert">
                            <i class='fa  fa-check-circle'></i> Login successfull. Redirecting . . .
                                </div>
                            <?php
                            echo "<script>location.href='master/index.php'</script>";    
                        }else{
                             ?>
                             <div class="alert alert-danger" role="alert">
                             <i class='fa fa-times-circle'></i> Invalid Username or Password 
                              </div>
                             <?php
                             echo "<script>location.href='login.php'</script>";   
                       }
                    }
                    
                    else{
                      ?>
                      <div class="alert alert-danger" role="alert">
                      <i class='fa fa-times-circle'></i> Wrong Password or Username.
                       </div>
                      <?php
                    }
                  }
                }
              }
                


?>

</body>
</html>