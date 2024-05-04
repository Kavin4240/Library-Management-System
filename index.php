<?php
session_start();
include('connection.php');
if(isset($_REQUEST['login_btn']))
{
    $uname = $_POST['email'];
    $upwd = $_POST['pwd'];
    
    
    $select_query = mysqli_query($conn, "select user_name, id from tbl_users where emailid='$uname'");
    $username = mysqli_fetch_row($select_query);
    if(!empty($username))
    {
    $_SESSION['user_name'] =  $username[0]; 
    $_SESSION['id'] = $username[1];
    }
    $rows = mysqli_num_rows($select_query);
    
    if(true)
    {
       
       header("Location: dashboard.php"); 
    }
    else
    { ?>
    <script>
            alert("You have entered wrong emailid or password.");
        </script>
    
    <?php
        
    }
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Library Management System</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/custom_style.css?ver=1.1" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body class="bg-dark" style="background: url(img/library-img-bg.jpg) no-repeat;  background-size:cover">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">
       <h2><center style="color:coral;">User Login</center></h2>
      </div>
      <div class="card-body">
        <form name="login"  method="post" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          
          <input type="submit"  class="btn btn-primary btn-block" name="login_btn" value="Login">
        </form>
        
      </div>
    </div>
  </div>


</body>

</html>

        




