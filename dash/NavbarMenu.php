<nav class="navbar bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
	<img src="../image/iqp.png" onclick="parent.location='./'" class="img-responsive m-Icon"/>
		&nbsp;&nbsp;<b>e-Examz Portal</b>
	</a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <div style="opacity:0.9;" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
		<font class="r">Hi, <b><?php echo $_SESSION["IQGAMES_NAME_2018_VISION"];?></b></font>
		</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 list-group">
          
		  <li class="nav-item list-group-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
          </li>
		  
		  <li class="nav-item list-group-item" id="showprof">
			<a class="nav-link" href="#">
				<i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; <font class="r">Profile</font>
				<span class="badge text-bg-primary pull-right">0</span>
			</a>
		  </li>
		  
          <!---<li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>---->
		  
		  <li class="nav-item list-group-item" onclick="parent.location='logmeout'">
			<a class="nav-link" href="#">
				<i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp; <font class="r">Logout</font>
			</a>
		  </li>
		  
          <li class="d-none nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3 d-none" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
		<button class="btn btn-primary btn-sm mt-4"><i class="fa fa-cloud-download"></i>&nbsp;&nbsp;DOWN E-EXAMZ MANUAL</button>
		<button class="btn btn-danger btn-sm mt-2"><i class="fa fa-trash"></i>&nbsp;&nbsp;CLOSE YOUR ACCOUNT</button>
      </div>
    </div>
	
  </div>
</nav>
