<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA Store|Signup</title>
    <link rel="icon" href="../assets/images/ma_logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
  <style>
    body{
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background-image: url(../assets/images/ma2.jpg);   
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .overlay{
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form{
      color: white;
      font-size: 20px;
      font-weight: 600;
      background-color: rgba(0, 247, 255, 0.349);
      padding: 25px 35px;
      border-radius: 12px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="submit"]{
      font-size: 18px;
      margin: 8px 0;
      padding: 8px 12px;
    }

    h1{
      font-size: 30px;
      margin-bottom: 15px;
      text-align: center;
    }
  </style>

<body>
  <a href="login.php" class="return"><i class="fa-solid fa-arrow-left"></i></a>
  <div class="overlay">
    <form>
      <h1 style="font-size:30px; margin-bottom:15px; display:flex; align-items:center; gap:8px;">
  <img src="ma_logo.png" alt="logo"
       style="width:120px; height:120px; object-fit:contain; margin-right:5px;">
  sign up
       </h1>

      <label for="name">Name</label><br>
      <input type="text" name="un" required><br>

      <label for="email">Email</label><br>
      <input type="email" name="em" required><br>

      <label for="pass">Password</label><br>
      <input type="password" name="psw1" required><br>

      <label for="pass_confirmation">Repeat Password</label><br>
      <input type="password" name="psw2" required><br>

      <input type="submit" name="register" value="Register" >
    </form>
  </div>
</body>
</html>