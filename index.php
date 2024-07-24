<?php 
session_start();
if(isset($_SESSION['unique_id'])){
  header("location: users.php");
}?>


<?php include_once "php/header.php";?>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Realtime Chat App</header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt">This is an error message</div>
          <div class="name-details">
            <div class="field input">
              <label for="">First name</label>
              <input type="text" placeholder="First name" name="fname" required />
            </div>
            <div class="field input">
              <label for="">Last name</label>
              <input type="text" placeholder="Last name" name="lname" required/>
            </div>
          </div>
          <div class="field input">
            <label for="">Email Address</label>
            <input type="text" placeholder="Email address" name="email" required/>
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter yout password" name="password" required/>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field input image">
            <label for="">Select image</label>
            <input type="file" name="image" />
          </div>
          <div class="field input button">
            <input type="submit" placeholder="Continue to chat" />
          </div>
          <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </form>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
  </body>
</html>
