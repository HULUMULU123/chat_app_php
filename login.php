<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Realtime ChatApp</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Realtime Chat App</header>
        <form action="#">
          <div class="error-txt">This is an error message</div>

          <div class="field input">
            <label for="">Email Address</label>
            <input type="text" placeholder="Email address" />
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="text" placeholder="Enter yout password" />
            <i class="fas fa-eye"></i>
          </div>

          <div class="field input button">
            <input type="submit" placeholder="Continue to chat" />
          </div>
          <div class="link">Not yet signed up? <a href="#">Signup now</a></div>
        </form>
      </section>
    </div>
    <script src="/javascript/pass-show-hide.js"></script>
  </body>
</html>
