<html>
<head>
  <meta charset="utf-8" />
  <title>LOGIN</title>
  <link href="login/css/styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="align">
  <div class="grid">
    <form  action ="Validasi.php" class="form login">
  
      <div class="form_field">
        <label><i class="fa fa-user" style="color: #606468;"></i></label>
        <input type="text" name="username" class="form_input" placeholder="Username" required>
      </div>
      <div class="form_field">
        <label><i class="fa fa-lock" style="color: #606468;"></i></label>
        <input type="password" name="password" class="form_input" placeholder="Password" required>
      </div>
      <div class="form_field">
        <button class="submitButton" type="submit">Submit</button>
      </div>
    </form>
    <p class="text--center">Not a member? <a href="youtube.com">Register</a></p>
  </div>
</body>
</html>
