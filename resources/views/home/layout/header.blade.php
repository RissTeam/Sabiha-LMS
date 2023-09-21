
    <!-- ===================  NAVBAR START HERE================== -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 p-0 main-navbar">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container m-0">
              <div class="img-div">
                <a href="http://">
                  <img src="../imgs/navbar_logo.png" alt="navbar logo here" />
                </a>
              </div>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span><i class="fa-solid fa-bars"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('courses')}}">Courses</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('about_sabiha_page')}}"
                      >Sabiha News</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('FAQ_page')}}">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('contact_us_page')}}"
                      >Contact Us</a
                    >
                  </li>
                </ul>
                <div class="dropdown">
                  <button
                    class="btn btn-secondary dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Log in
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- ===================  NAVBAR END HERE================== -->
