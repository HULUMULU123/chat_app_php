<?php include_once "php/header.php";?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Realtime Chat App</header>
        <form action="#">
          <div class="error-txt">This is an error message</div>

          <div class="field input">
            <label for="">Email Address</label>
            <input type="text" name="email" placeholder="Email address" />
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter yout password" />
            <i class="fas fa-eye"></i>
          </div>

          <div class="field input button">
            <input type="submit" placeholder="Continue to chat" />
          </div>
          <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </form>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
  </body>
</html>
