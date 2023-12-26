<?php
if(isset($_SESSION['forgot_code']) && !isset($_SESSION['auth_temp'])){
    $action = 'verifycode';
}elseif(isset($_SESSION['forgot_code']) && isset($_SESSION['auth_temp'])){
    $action = 'changepassword';
}else{
    $action= 'forgotpassword';
}
            ?>
            <style>
             .otp-Form {
    width: 474px;
    height: 424px;
    background-color: rgb(255, 255, 255);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 8px 85px;
    gap: 20px;
    position: relative;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.082);
    border-radius: 18px;
}

.mainHeading {
  font-size: 1.1em;
  color: rgb(15, 15, 15);
  font-weight: 700;
}

.otpSubheading {
  font-size: 0.7em;
  color: black;
  line-height: 17px;
  text-align: center;
}

.inputContainer {
  width: 100%;
  display: flex;
  flex-direction: row;
  gap: 10px;
  align-items: center;
  justify-content: center;
}

.otp-input {
  background-color: rgb(228, 228, 228);
  width: 110px;
  height: 30px;
  text-align: center;
  border: none;
  border-radius: 7px;
  caret-color: rgb(127, 129, 255);
  color: rgb(44, 44, 44);
  outline: none;
  font-weight: 600;
}

.otp-input:focus,
.otp-input:valid {
  background-color: rgba(127, 129, 255, 0.199);
  transition-duration: .3s;
}

.verifyButton {
  width: 100%;
  height: 30px;
  border: none;
  background-color: rgb(127, 129, 255);
  color: white;
  font-weight: 600;
  cursor: pointer;
  border-radius: 10px;
  transition-duration: .2s;
}

.verifyButton:hover {
  background-color: rgb(144, 145, 255);
  transition-duration: .2s;
}

.exitBtn {
  position: absolute;
  top: 5px;
  right: 5px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.171);
  background-color: rgb(255, 255, 255);
  border-radius: 50%;
  width: 25px;
  height: 25px;
  border: none;
  color: black;
  font-size: 1.1em;
  cursor: pointer;
}

.div {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #222; /* Dark background color */
  color: #fff; /* Light text color */
}
.resendNote {
  font-size: 0.7em;
  color: black;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
}

.resendBtn {
  background-color: transparent;
  border: none;
  color: rgb(127, 129, 255);
  cursor: pointer;
  font-size: 1.1em;
  font-weight: 700;
}
            </style>
            <div class="login">
<form class="otp-Form" method="post" action="assets/php/actions.php?<?=$action?>">

    <span class="mainHeading">Forgot Your Password?</span>
    <?php
    if ($action == 'forgotpassword') {
    ?>
        <p class="otpSubheading">Enter your email</p>
        <div class="inputContainer">
            <input required="required" type="email" class="otp-input" id="email" name="email" placeholder="Email">
        </div>
        <?=showError('email')?>
        <button class="verifyButton" type="submit">Send Verification Code</button>
    <?php
    }
    ?>

    <?php
    if ($action == 'verifycode') {
    ?>
        <p class="otpSubheading">Enter 6 Digit Code Sent to You - <?=$_SESSION['forgot_email']?></p>
        <div class="inputContainer">
            <input required="required" maxlength="6" type="text" class="otp-input" id="otp-input1" name="code" placeholder="######">
        </div>
        <?=showError('email_verify')?>
        <button class="verifyButton" type="submit">Verify Code</button>
    <?php
    }
    ?>

    <?php
    if ($action == 'changepassword') {
    ?>
        <p class="otpSubheading">Enter your new password - <?=$_SESSION['forgot_email']?></p>
        <div class="inputContainer">
            <input required="required" type="password" class="otp-input" id="otp-input1" name="password" placeholder="New Password">
        </div>
        <?=showError('password')?>
        <button class="verifyButton" type="submit">Change Password</button>
    <?php
    }
    ?>

    <p class="resendNote">Didn't receive the code?</p>
    <a href="?login" class="text-decoration-none mt-5"><i class="bi bi-arrow-left-circle-fill"></i> Go Back
                    To
                    Login</a>
</form>
