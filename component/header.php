<!--- Header include----->

 <header id="header" class="header d-flex align-items-center bg-light d-block" style="position:sticky;top: 0; z-index: 1000;height: 80px;">
    <div class="d-flex align-items-center justify-content-between" style="margin-right: 20px;margin-left: 20px;">
      <a href="home.php">
        <label class="" style="color: red;">Logo</label>
      </a>
    </div>

    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>

        <li class="nav-item dropdown pe-3 d-block">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/pfp.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">teste</span>
          </a>

          <!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  profile">
            <li class="dropdown-header">
              <h6>User</h6>
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