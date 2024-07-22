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
          <div class="link">Already signed up? <a href="#">Login now</a></div>
        </form>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
  </body>
</html>