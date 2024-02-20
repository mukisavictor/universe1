<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Delicious Cakes</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!------fontawesome link--------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" />
</head>

<body>
  <div class="container">
    <div class="form-box">
      <h1 id="title">Sign Up</h1>
      <form action="login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
          ?<?php } ?>
          <div class="input-group">
            <div class="input-field" id="nameField">
              <i class="fa-solid fa-user"></i>
              <input type="text" name="uname" placeholder="Name" />
            </div>
            <div class="input-field">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fa-solid fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <p>Lost Password <a href="#">Click Here!</a></p>
          </div>
          <div class="btn-field">
            <button type="submit" id="signupBtn">Sign Up</button>
            <button type="button" id="signinBtn" class="disable">
              Sign In
            </button>
          </div>
      </form>
    </div>
  </div>

  <script>
    let signupBtn = document.getElementById("signupBtn");
    let signinBtn = document.getElementById("signinBtn");
    let nameField = document.getElementById("nameField");
    let title = document.getElementById("title");
    signinBtn.onclick = function() {
      nameField.style.maxHeight = "0";
      title.innerHTML = "Sign In";
      signupBtn.classList.add("disable");
      signinBtn.classList.remove("disable");
    };
    signupBtn.onclick = function() {
      nameField.style.maxHeight = "60px";
      title.innerHTML = "Sign Up";
      signupBtn.classList.remove("disable");
      signinBtn.classList.add("disable");
    };
  </script>
</body>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "");

?>