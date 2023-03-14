
    <title>Registration Form</title>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container h-100 d-flex justify-content-center">
      <form class="form-signup" method="POST" action="register/verify" >
        <h1 class="text-center mb-4">Sign Up</h1>
        <div class="form-group">
          <!-- NIK -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="nik" class="form-control" placeholder="nik" required>
          </div>
          <!-- Username -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
          <!-- Email -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <!-- Full Name -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
          </div>
          <!-- No Telpon -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="telp" class="form-control" placeholder="Nomor Telpon" required>
          </div>
          <!-- Password -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
          </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="text-center mt-3">Already have an account? <a href="login">Sign in</a></p>
      </form>
    </div>
  </body>
</html>
