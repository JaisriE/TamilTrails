<?php
$logged=0;
$invalid=0;
$registered=0;

if(isset($_GET['msg']) && $_GET['msg'] == 'registered'){
  $registered=1;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'server.php';

  $name=$_POST['name'];
  $password=$_POST['pswd'];

  $sql="SELECT * FROM signup WHERE Name='$name' AND Password='$password'";
  $result=mysqli_query($con,$sql);

  if($result){
    $num=mysqli_num_rows($result);

    if($num>0){
      $logged=1;
      header("Location: index.php?msg=loggedin");
      exit();
    }
    else{
      $invalid=1;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>
<body style="background-color:#FFEBE6;">
<?php
if($registered){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin:10px;">
  <strong>Success!</strong> Account created! Please sign in.
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>';
}
?>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 350px;">
        <h3 class="text-center mb-3">🍂 Tamil Trails 🍂</h3>
        <p class="text-center mb-3">Sign In</p>
        <hr>
        <?php
        if($invalid){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error</strong> Invalid user.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        }
        ?>
        <form method="post" action="signIn.php">
            <div class="mb-3">
                <label>User Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="pswd">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>

            <div class="text-center mt-3">
                <p>Don't have an account? <a href="signUp.php">Create Account</a></p>
            </div>

        </form>
    </div>

</div>

</body>
</html>