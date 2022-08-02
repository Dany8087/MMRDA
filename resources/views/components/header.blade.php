<header>
  <div class="row">
    <div class="header-left col-md-10 col-12" >
        <h2>Hi, <span>{{Session::get('username')}}</span></h2>
        <ul>
        <li>Home <i class="fas fa-angle-right"></i></li>
          <li><a class="active">Dashboard</a></li>
        </ul>

    </div>
    <div class="header-right col-md-2 col-12" style="margin-top:20px;">
      <ul>
        <li class="img-li dropdown">
          <a class="dropdown-toggle" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false"><img src="images/default-profile-picture1.jpg" alt="user photo" /></a>
                      <ul class="dropdown-menu profile-ul" aria-labelledby="dropdownProfile">
                        <li><a class="dropdown-item" href="adminProfile"><i class="fas fa-user"></i> Admin Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                      </ul>
        </li>
      </ul>

    </div>
    </div>
  </header>