<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #222; /* Dark background color */
            color: #fff; /* Light text color */
        }

        .container {
            max-width: 350px;
            background: #121212; /* Dark background color */
            border-radius: 40px;
            padding: 25px 35px;
            border: 5px solid #121212; /* Dark border color */
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
            margin: 20px;
        }

        .heading {
            text-align: center;
            font-weight: 900;
            font-size: 20px;
            color: #12B1D1; /* Highlighted color */
        }

        .form {
            margin-top: 20px;
        }

        .form .input {
            width: 100%;
            background: #333; /* Dark background color */
            border: none;
            padding: 15px 20px;
            border-radius: 20px;
            margin-top: 15px;
            box-shadow: #121212 0px 10px 10px -5px; /* Dark box shadow */
            color: #fff; /* Light text color */
        }

        .form .input::-moz-placeholder {
            color: #777; /* Lighter placeholder text color */
        }

        .form .input::placeholder {
            color: #777; /* Lighter placeholder text color */
        }

        .form .input:focus {
            outline: none;
            border-inline: 2px solid #12B1D1; /* Highlighted border color */
        }

        .form .forgot-password {
            display: block;
            margin-top: 10px;
            margin-left: 10px;
        }

        .form .forgot-password a {
            font-size: 11px;
            color: #12B1D1; /* Highlighted color */
            text-decoration: none;
        }

        .form .login-button {
            display: block;
            width: 40%;
            font-weight: bold;
            background: #12B1D1; /* Highlighted color */
            color: #fff; /* Light text color */
            padding-block: 15px;
            margin: 20px auto;
            border-radius: 20px;
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
            border: none;
            transition: all 0.2s ease-in-out;
        }

        .form .login-button:hover {
            transform: scale(1.03);
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
        }

        .form .login-button:active {
            transform: scale(0.95);
            box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="heading">
                <img class="mb-4" src="assets/images/together.png" alt="" height="60"><br>Sign In
            </div>
            <form action="assets/php/actions.php?login" class="form" method="post">
                <input required="" class="input" type="text" name="username_email" value="<?=showFormData('username_email')?>" placeholder="Username/Email Address">
                <?=showError('username_email')?>
                <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
                <?=showError('password')?>
                <?=showError('checkuser')?>
                <span class="forgot-password"><a href="?forgotpassword&newfp">Forgot Password ?</a></span> 
                <input class="login-button" type="submit" value="Sign In">
                
                <a href="?signup" class="text-decoration-none">Create New Account</a>
            </form>
            <div class="social-account-container">
                <span class="title">Or Sign in with</span>
                <div class="social-accounts">
                    <button class="social-button google">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
                            <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                        </svg>
                    </button>
                    <button class="social-button apple">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                        </svg>
                    </button>
                    <button class="social-button twitter">
                        <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
