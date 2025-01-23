<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Timpla Inv.</title>
   <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="form-container">
   <form action="logphp.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
         <p class="problem"><?php echo $_GET['error'] ?></p>
      <?php } ?>
      <h3>login now</h3>
      <input type="email" name="email" placeholder="Enter your email">
      <input type="password" name="password" placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a>!</p>
      <p>Forgot <a href="#">password</a>?</p>
   </form>
</div>
</body>
</html>