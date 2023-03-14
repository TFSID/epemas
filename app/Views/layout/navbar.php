<body id="page-top">

        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand text-dark" href="/#page-top">E-PEMAS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto my-2 my-lg-0 gap-3">
          <?php if (session()->has('logged_in') && session()->get('logged_in')) : ?>
             <li class="nav-item">
          <a class="nav-link text-dark" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle text-dark"></i> Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item text-dark " href="dashboard">Dashboard</a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-dark" href="logout">Logout</a></li>
          </ul>
        </li>


            <?php else: ?>
          <li class="nav-item"><a class="btn btn-secondary btn-lg rounded" href="login">Login</a></li>
          <li class="nav-item"><a class="btn btn-secondary btn-lg rounded" href="register">Register</a></li>
          <?php endif; ?>

        </ul>
      </div>
      <div class="blur-bg"></div>
    </div>
  </nav>
  

  <!-- Page content goes here -->

  <script>
    // Change navbar background when scrolling
    window.addEventListener('scroll', function () {
      var navbar = document.getElementById("mainNav");
      if (window.scrollY >= 50) {
        navbar.classList.add("bg-blur");
      } else {
        navbar.classList.remove("bg-blur");
      }
    })
  </script>
  
  <style>
    .navbar {
      transition: background-color 0.5s ease;
      z-index: 9999;
    }
    .bg-blur {
      background-color: rgba(255, 255, 255, 0.7) !important;
      backdrop-filter: blur(5px);
    }
    .blur-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
    }
    .blur-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: inherit;
      filter: blur(10px);
      z-index: -1;
    }
    .blur-inner {
      width: 100%;
      height: 100%;
      background: inherit;
      backdrop-filter: blur(5px);
    }
  </style>