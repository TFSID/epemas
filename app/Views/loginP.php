
    <title>Login Form</title>
  </head>
  <body>
    <div class="container h-100 d-flex justify-content-center">
      <form class="form-signin" method="POST" action="Login/authP">
        <h1 class="text-center mb-4">Login Petugas</h1>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="username" type="text" class="form-control" placeholder="username" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input name="password" type="password" class="form-control" placeholder="password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="text-center mt-3">Don't have an account? <a href="register">Sign up</a></p>
      </form>
    </div>
  </body>
</html>
