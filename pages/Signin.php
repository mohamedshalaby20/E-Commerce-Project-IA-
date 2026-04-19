<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MA Store|login</title>
  <link rel="icon" href="../assets/images/ma_logo.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<style>
  body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    background-image: url(./assets/images/ma2.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .overlay {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  form {
    color: white;
    font-size: 22px;
    font-weight: 600;
    background-color: rgba(0, 247, 255, 0.349);
    padding: 25px 35px;
    border-radius: 12px;
  }

  input,
  button {
    font-size: 18px;
    margin: 8px 0;
    padding: 8px 12px;
  }

  h2 {
    font-size: 30px;
    margin-bottom: 15px;
  }
</style>
</head>

<body>
  <a href="../index.php" class="return"><i class="fa-solid fa-arrow-left"></i></a>
  <div class="overlay">
    <form>
      <h2 style="font-size:30px; margin-bottom:15px; display:flex; align-items:center; gap:8px;">
        <img src="../assets/images/ma_logo.png" alt="logo" style="width:120px; height:120px; object-fit:contain; margin-right:5px;">
        Login
      </h2>

      <label>Email</label><br>
      <input type="text" name="un" required><br>

      <label>Password</label><br>
      <input type="password" name="psw1" required><br>

      <button type="submit" name="login">Sign in</button>

      <p style="font-size:18px; margin-top:10px; color: black;">
        Not yet a member? <a href="Signup.php" style="color:#28ffcd; font-size: 20px; text-decoration: none;">Sign up</a>
      </p>
    </form>
  </div>
</body>

</html>