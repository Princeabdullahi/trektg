<style>
   .container {
  position: relative;
  max-width: 500px;
  width: 100%;
  background: #FCEDDA;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.container header {
  font-size: 1.2rem;
  color: #000;
  font-weight: 600;
  text-align: center;
}

.container .form {
  margin-top: 15px;
  display: flex; /* Make the form a flex container */
  flex-direction: column; /* Stack child elements vertically */
  align-items: center; /* Center-align child elements horizontally */
}

.form .input-box {
  width: 100%;
  margin-top: 10px;
}

.input-box label {
  color: #000;
}

.form :where(.input-box input, .select-box) {
  position: relative;
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #808080;
  margin-top: 5px;
  border: 1px solid #EE4E34;
  border-radius: 6px;
  padding: 0 15px;
  background: #FCEDDA;
}

.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
  display: flex;
  column-gap: 15px;
}

.form .gender-box {
  margin-top: 10px;
}

.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form .gender {
  column-gap: 5px;
}

.gender input {
  accent-color: #EE4E34;
}

.form :where(.gender input, .gender label) {
  cursor: pointer;
}

.gender label {
  color: #000;
}

.address :where(input, .select-box) {
  margin-top: 10px;
}

.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #808080;
  font-size: 1rem;
  background: #FCEDDA;
}

.form button {
  height: 40px;
  width: 100%;
  color: #000;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #EE4E34;
}

.form button:hover {
  background: #EE3E34;
}

/* Style for the container that holds the checkbox and label */
.form-check {
  display: flex;
  align-items: center;
}

/* Style for the checkbox input */
.form-check-input {
  width: 20px;
  height: 20px;
  margin-right: 10px;
  border: 2px solid #333; /* Border color for the checkbox */
  border-radius: 4px;
  cursor: pointer;
}

/* Style for the checkbox input when checked */
.form-check-input:checked {
  background-color: #333; /* Background color when checked */
}

/* Style for the label text next to the checkbox */
.form-check-label {
  font-size: 16px;
  color: #333;
}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="login">
<section class="container">
    <header>Registration Form</header>
    <form class="form"  method="post" action="assets/php/actions.php?signup">
        <div class="column">
            <div class="input-box">
                <label for="first_name">First Name</label>
                <input required="" placeholder="Enter first name" type="text" name="first_name" value="<?=showFormData('first_name')?>">
            </div>
            <div class="input-box">
                <label for="last_name">Last Name</label>
                <input required="" placeholder="Enter last name" type="text" name="last_name" value="<?=showFormData('last_name')?>">
            </div>
        </div>
        <div class="column">
        <div class="input-box">
                <label for="email">Email Address</label>
                <input type="email" required="" name="username" id="username" value="<?=showFormData('username')?>" placeholder="Enter username">
            </div>
            <div class="input-box">
                <label for="username">Email Username</label>
                <input required="" placeholder="Enter username" type="text">
            </div>
        </div>
        <div class="gender-box">
        <div class="input-box">
                <label for="birth_date">Birth Date</label>
                <input required="" placeholder="Enter birth date" type="date" name="birth_date">
            </div>
            <label>Gender</label>
            <div class="gender-option">
                <div class="gender">
                    <input checked="" name="gender" id="check-male" type="radio" value="Male">
                    <label for="check-male">Male</label>
                </div>
                <div class="gender">
                    <input name="gender" id="check-female" type="radio" value="Female">
                    <label for="check-female">Female</label>
                </div>
                <div class="gender">
                    <input name="gender" id="check-other" type="radio" value="Prefer not to say">
                    <label for="check-other">Prefer not to say</label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="input-box">
                <label for="password">Password</label>
                <input required="" name="password" placeholder="Enter Password" id="password" type="password">
                <div id="cpassword-warning" style="color: red;"></div>
            </div>
            <div class="input-box">
                <label for="cpassword">Confirm Password</label>
                <input required="" name="cpassword" placeholder="Confirm Password" id="cpassword" type="password">
                <div id="cpassword-warning" style="color: red;"></div>
            </div>
        </div>
        <script>
    // Get the password and confirm password input elements
    const passwordInput = document.getElementById('password');
    const cpasswordInput = document.getElementById('cpassword');

    // Get the warning divs
    const passwordWarning = document.getElementById('password-warning');
    const cpasswordWarning = document.getElementById('cpassword-warning');

    // Add an input event listener to the password input
    passwordInput.addEventListener('input', function () {
        const password = this.value;
        const validPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{6,}$/.test(password);

        // Check if the password meets the requirements
        if (!validPassword) {
            passwordWarning.textContent = 'Password must be at least 6 characters and include at least one uppercase letter, one lowercase letter, and one special character (!@#$%^&*).';
        } else {
            passwordWarning.textContent = '';
        }
    });

    // Add an input event listener to the confirm password input
    cpasswordInput.addEventListener('input', function () {
        const confirmPassword = this.value;

        // Check if the passwords match
        if (passwordInput.value !== confirmPassword) {
            cpasswordWarning.textContent = 'Passwords do not match.';
        } else {
            cpasswordWarning.textContent = '';
        }
    });
</script>

        <div class="input-box address">
            <label for="bio">Bio</label>
            <input type="text" name="bio" value="<?=showFormData('bio')?>" placeholder="Bio">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="agreeCheckbox" required>
            <label class="form-check-label" for="agreeCheckbox">
                I agree to the <a href="?privacy">Privacy Policy</a> and <a href="?terms">Terms and Conditions</a>
            </label>
        </div>
        <button type="submit">Sign Up</button>
        <a href="?login" class="text-decoration-none">Login Here</a>
    </form>
    <div class="social-account-container">
        <span class="title">Or Sign in with</span>
        <div class="social-accounts">
          <button class="social-button google">
            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
              <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
            </svg></button>
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

</section>
