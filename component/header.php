<!--- Header include----->

 <header id="header" class="header d-flex align-items-center bg-light" style="position:sticky;top: 0;">
    <div class="d-flex align-items-center justify-content-between" style="margin-right: 20px;">
      <a href="home.php">
        <label class="" style="color: red;">Logo</label>
      </a>
    </div>

    <!-- End Logo -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="home.php">
        <input type="text" name="searchname" placeholder="Search" title="Enter search keyword">
        <button type="submit" name="search" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
        <div class="dropdown"><button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">States</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="">test</a>
          </div>
        </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/pfp.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">teste</span>
          </a>

          <!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  profile">
            <li class="dropdown-header">
              <h6><?=$row['u_name']?></h6>
              <span>Wellcome</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="booked.php">
                <i class="bi bi-person"></i>
                <span>My Booking</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="acc.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#" onclick="help()">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>          
          </ul>
        </li>
      </ul>
    </nav>
  </header>

<br><br>

<script type="text/javascript">
  function help(){
    alert('Cant help lol');
  }
</script>