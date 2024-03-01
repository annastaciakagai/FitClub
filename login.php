
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <style>
    body {
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
      line-height: 1.5;
      background-color: #111317;
    }

    h1 {
      color: #FFF;
    }

    .container {
      max-width: 600px;
      width: 30%;
      margin: 122px auto;
    }

    form {
      width: 100%;
    }

    label {
      font-weight: bold;
      margin-bottom: 15px;
      color: #FFF;
    }

    input,
    textarea {
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
      width: 85%;
      border: 2px solid #c1cdcd;
      background: #FFF;
      margin: 0 0 5px;
      padding: 10px;
    }

    fieldset {
      border: medium none !important;
      margin: 0 0 10px;
      min-width: 100%;
      padding: 0;
      width: 100%;
    }

    button {
      cursor: pointer;
      width: 90%;
      border: none;
      background: rgb(208, 147, 62);
      color: #000;
      margin: 0 0 5px;
      padding: 10px;
      font-size: 15px;
    }
    p{
		color: whitesmoke;
	}

    .register-link {
      display: block;
      margin-top: -23px;
      text-align: center;
      color: rgb(208, 147, 62);
    }

  </style>
</head>

<body>

  <div class="container">
    <h1>Login</h1>
    <form>
      <fieldset>
        <label>Email</label>
        <input type="email" name="loginEmail" placeholder="Email" required>
      </fieldset>
      <fieldset>
        <label>Password</label>
        <input type="password" name="loginPassword" placeholder="Password" required>
      </fieldset>
      <fieldset>
        <button type="submit" name="loginSubmit">Login</button>
      </fieldset>
    </form>

    <p>Don't have an account? <a href="register.html" class="register-link">Register here</a></p>
  </div>

</body>

</html>
