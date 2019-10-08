<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Anwesha CA | Login</title>
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
            
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>

            <meta name="viewport" content="width=device-width">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/login.css">
    <link href="./images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="./images/favicon.ico" rel="apple-touch-icon">
</head>

<body>
  <div class="card-container">
    <div class="card" id="cards">
      <div class="front">
            <form action="#">
                    <h1>Create Account</h1>
                    <span>or use your email for registration</span>
                    <input class="not-radio" type="text" placeholder="Name" />
                    <input class="not-radio" type="email" placeholder="Email" />
                    <input class="not-radio" type="password" placeholder="Password" />
                    Want to apply as CA?
                    <label>
                    <input type="radio" name="ca" value="yes"> YES
                    <input type="radio" name="ca" value="no"> NO<br></label>
                    <button>Sign Up</button>
                    <p id="carded">Already have a account?</p>
            </form>
      </div>
      <div class="back">
            <form action="#">
                    <h1>Sign in</h1>
                    <span>or use your account</span>
                    <input class="not-radio" type="email" placeholder="Email" />
                    <input class="not-radio" type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                    <p id="card">Don't have an account?</p>
            </form>
      </div>
    </div>
  </div>
</body>
<script src="./js/login.js"></script>
</html>