<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>twitter</title>
</head>
<body>
  <div class="header">
  </div>
  <div class="main">
  <div class="left-side">
  <img src="assets/image/ahmad.png" alt="">
  </div>
  <div class="rigth-side">
  <div class="error"></div>
  <h1>create an account</h1>
  <div>An awesome collection of designs that will help you tell your story.</div>
  <form action="sign.php" method="post" name="user-sign-up">
     <div class="sign-up-form">
     <div class="sign-up-name">
     <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">
     <input type="text" name="last-name" id="last-name" class="text-field" placeholder="Last Name">
     </div>
     <div class="sign-wrap-mobile">
     <input type="text" name="email-mobile" id="up-email" placeholder="Mobile number or email address" class="text-input">
     </div>
     <div class="sign-up-password">
     <input type="password" name="up-password" id="up-password" id="up-password" class="text-input">
     </div>
     <div class="sign-up-birthday">
     <div class="bday">Birthday</div>
     <div class="forn-birthday">
     <select name="birth-day" id="days" class="select-body"></select>
     <select name="birth-month" id="months" class="select-body"></select>
     <select name="birth-year" id="years" class="select-body"></select>
     </div>
     </div>
     <div class="gender-warp">
     <input type="radio" name="gen" id="fem" value="female" class="m0">
     <label for="fem" class="gender">Female</label>
     <input type="radio" name="gen" id="male" value="male" class="m0">
     <label for="male" class="gender">Male</label>
     </div>
     <div class="term">
     By clicking sign up, you agree to our terms, Data policy and Cookie policy.
     </div>
     <input type="submit"value="sign up" class="sign-up">
     </div>
  </form>
  </div>
  </div>
</body>
</html>