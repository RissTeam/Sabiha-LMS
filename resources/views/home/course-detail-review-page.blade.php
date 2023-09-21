<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SABIHA||ABDULKADER_LMS</title>

    <!-- ===================FONTAWSOME  FILE LINK================== -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- ===================BOOTSTRAP CSS FILE LINK================== -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!-- ===================  CUSTOME FILE LINK START HERE================== -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/courses.css" />
    <link rel="stylesheet" href="./css/course-overview-page.css" />
    <link rel="stylesheet" href="./css/course-detail-review-page.css" />
  </head>
  <body>
    <!-- ===================  NAVBAR START HERE================== -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 p-0 main-navbar">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container m-0">
              <div class="img-div">
                <a href="http://">
                  <img src="./imgs/navbar_logo.png" alt="navbar logo here" />
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
                    <a
                      class="nav-link"
                      aria-current="page"
                      href="index.html"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="./courses.html">Courses</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./about_sabiha_page.html"
                      >Sabiha News</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./FAQ-page.html">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact_us_page.html"
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

    <!-- =================== HEADER SECTION START HERE================== -->
    <div class="container-fluid detial-page">
      <div class="row">
        <div class="col-md-12">
          <div class="header-content-detail-page">
            <h6>play</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 p-0">
          <div class="vedio-section">
            <video autoplay muted loop id="myVideo">
              <source
                src="./imgs/course-detail-page-vedio.mp4"
                type="video/mp4"
              />
            </video>
          </div>
          <div class="content">
            <button id="myBtn" onclick="myFunction()">Pause</button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- =================== HEADER SECTION END HERE================== -->
    <!-- ===================LEARN PSYCHOLOGY SECTION START HERE================== -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="psychology-main-heading">
            <h2>Learn Psychology or improve your skills online today</h2>
            <p>
              It is a long established fact that a reader will be distracted by
              the readable content of a page <br />
              when looking at its layout.
            </p>
          </div>
          <div class="row overview-class">
            <div class="col-md-3 col-6">
              <div class="psychology-overview">
                <p>Review</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked "></span>&nbsp;&nbsp;
              </div>
            </div>
            <div class="col-md-2 col-6">
              <div class="psychology-overview">
                <p>Duration</p>
                <h6>05 hr 20 mins</h6>
              </div>
            </div>
            <div class="col-md-2 col-6">
              <div class="psychology-overview">
                <p>Language</p>
                <h6>English</h6>
              </div>
            </div>
            <div class="col-md-1 d-none d-md-block"></div>
            <div class="col-md-4 col-6">
              <div class="psychology-share-option-btn d-flex">
                <button class="btn heart">
                  <i class="fa-regular fa-heart"></i>
                </button>
                <button class="btn">
                  <i class="fa-solid fa-share-nodes pe-2"></i>Share
                </button>
              </div>
            </div>
          </div>
          <div class="row overview-link">
            <div class="col-md-2 col-6">
              <a href="./course-overview-page.html "><h3 >Overview</h3> </a>
            </div>
            <div class="col-md-2 col-6">
              <a href="./course-detail-review-page.html"><h3 class="active">Reviews</h3> </a>
            </div>
            <div class="col-md-8 d-none d-md-block"></div>
          </div>
         
        <div class="row">
          <div class="col-md-12">
            <div class="review-page-headings">
              <h5>Jason Smith</h5>
              <div class="row">
                <div class="col-md-6 col-6">
                  <div class="psychology-overview">
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked half-start "></span>&nbsp;&nbsp;
                  </div>
                </div>
                <div class="col-md-6 col-6">
                  <div class="div">
                    <h5>20 Feb 2022</h5>
                  </div>
                </div>
              </div>
              <p>This course definitely brings me more values than I expect. Thank you so much both of you guys!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="review-page-headings">
              <h5> Wilson Armela</h5>
              <div class="row">
                <div class="col-md-6 col-6">
                  <div class="psychology-overview">
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked half-start "></span>&nbsp;&nbsp;
                  </div>
                </div>
                <div class="col-md-6 col-6">
                  <div class="div">
                    <h5>20 Feb 2022</h5>
                  </div>
                </div>
              </div>
              <p>Super helpful class! I'm on my way to create a Digital Marketing Agency and I have found plenty of value inside this course. Highly recommend!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="review-page-headings">
              <h5> Ajax Simpson</h5>
              <div class="row">
                <div class="col-md-6 col-6">
                  <div class="psychology-overview">
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked pe-md-3 pe-0"></span>
                    <span class="fa fa-star checked half-start "></span>&nbsp;&nbsp;
                  </div>
                </div>
                <div class="col-md-6 col-6">
                  <div class="div">
                    <h5>20 Feb 2022</h5>
                  </div>
                </div>
              </div>
              <p>This class exceeded my expectations!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="more-review-button">
              <button class="btn">See More Review</button>
            </div>
          </div>
        </div>
        </div>
        <!-- card -->
        <div class="col-md-4">
          <div class="psychology-card review-card-main">
            <div class="card-content">
              <div class="card-img-div">
                <img src="./imgs/psychology-card-img.png" alt="" />
              </div>
              <div class="sale-price">
                <h4>$100.00</h4>
                <p>
                  $150.00<span><button class="btn ms-3">40% OFF</button></span>
                </p>
              </div>
              <div class="buy-button">
                <button class="btn">
                  <i class="fa-solid fa-bag-shopping pe-2"></i>Add to Cart
                </button>
                <button class="btn mt-3">Buy Now</button>
              </div>
              <div class="video-link-card">
                <h2>Next part</h2>
                <a href="http://"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 2</p></a
                >
                <a href="http://"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 3</p></a
                >
                <a href="http://"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 4</p></a
                >
                <a href="http://"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 5</p></a
                >
                <a href="http://"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 6</p></a
                >
                <a href="http://"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 7</p></a
                >
                <a href="http://"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 8</p></a
                >
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
    <!-- ===================LEARN PSYCHOLOGY SECTION END HERE================== -->

    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
    <div class="container-fluid most-feature-section related-course-detail-page">
      <div class="container">
        <div class="row mb-3 d-md-5">
          <div class="col-md-12">
            <div class="most-feature-sction-heading-2">
              <h1>Related Courses</h1>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <!-- card1 -->
          <div class="col-md-4">
            <div class="most-feature-card">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="./imgs/most-feature-card1.png" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>Education Software and PHP and JS System Script</h2>
                <div class="row pt-3">
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-comment pe-2"></span>Comments
                      </p>
                      <p>
                        <span class="fa-regular fa-calendar-days pe-2"></span
                        >20-06-2023
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-clock pe-2"></span>05 hr 20
                        mins
                      </p>
                      <p><span class="fa-regular fa-heart pe-2"></span>Save</p>
                    </div>
                  </div>
                </div>
                <div class="row tutor-row">
                  <div class="col-md-7 col-8">
                    <div class="tutor-img-sec">
                      <p>
                        <img
                          src="./imgs/most-feature-card-tutor-img.png"
                          alt=""
                          class="pe-2"
                        />Kristin Watson
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>$80.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card4 -->
          <div class="col-md-4 pt-4 pt-md-0">
            <div class="most-feature-card">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="./imgs/most-feature-card2.png" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>Learn UI/UX Design - A Complete New Course for Beginner</h2>
                <div class="row pt-3">
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-comment pe-2"></span>Comments
                      </p>
                      <p>
                        <span class="fa-regular fa-calendar-days pe-2"></span
                        >20-06-2023
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-clock pe-2"></span>05 hr 20
                        mins
                      </p>
                      <p><span class="fa-regular fa-heart pe-2"></span>Save</p>
                    </div>
                  </div>
                </div>
                <div class="row tutor-row">
                  <div class="col-md-7 col-8">
                    <div class="tutor-img-sec">
                      <p>
                        <img
                          src="./imgs/most-feature-card-tutor-img.png"
                          alt=""
                          class="pe-2"
                        />Eleanor Pena
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>$100.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- card5 -->
          <div class="col-md-4 pt-4 pt-md-0">
            <div class="most-feature-card">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="./imgs/most-feature-card3.png" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>The Complete Financial Analyst Training & Investing</h2>
                <div class="row pt-3">
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-comment pe-2"></span>Comments
                      </p>
                      <p>
                        <span class="fa-regular fa-calendar-days pe-2"></span
                        >20-06-2023
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-clock pe-2"></span>05 hr 20
                        mins
                      </p>
                      <p><span class="fa-regular fa-heart pe-2"></span>Save</p>
                    </div>
                  </div>
                </div>
                <div class="row tutor-row">
                  <div class="col-md-7 col-8">
                    <div class="tutor-img-sec">
                      <p>
                        <img
                          src="./imgs/most-feature-card-tutor-img.png"
                          alt=""
                          class="pe-2"
                        />Ralph Edwards
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>$65.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->

    <!-- ===================  FOOTER SECTION START HERE================== -->
    <div class="container-fluid footer">
      <div class="row">
        <div class="col-md-3 col-12">
          <div class="footer-logo-div">
            <img src="./imgs/footer-logo.png" alt="logo image here" />
          </div>
        </div>
        <div class="col-md-1 col-6">
          <div class="footer-links">
            <ul class="mb-0">
              <h5>Menu</h5>
              <a href="./index.html"><li>Home</li></a>
              <a href="./courses.html"><li>Courses</li></a>
              <a href="./FAQ-page.html"> <li>FAQ</li></a>
              <a href="./contact_us_page.html"><li>Contact</li></a>
            </ul>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-block"></div>
        <div class="col-md-2 col-6">
          <div class="footer-links">
            <ul class="mb-0">
              <h5>Explore links</h5>
              <a href="./about_sabiha_page.html"><li>About Sabiha</li></a>
              <a href="#"><li>Create an account</li></a>
              <a href="./courses.html"><li>Blog</li></a>
              <a href="./courses.html"><li>See More</li></a>
            </ul>
          </div>
        </div>
        <div class="col-md-1 d-none d-md-block"></div>
        <div class="col-md-3 col-12">
          <div class="social-icon">
            <a href=""> <i class="fa-brands fa-facebook-f"></i></a
            >&nbsp;&nbsp;&nbsp;
            <a href=""><i class="fa-brands fa-twitter"></i></a
            >&nbsp;&nbsp;&nbsp;
            <a href=""> <i class="fa-brands fa-instagram"></i></a>&nbsp;&nbsp;
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-12">
          <div class="footer-copyright">
            <p>Copyright © 2023 Sabiha. All Rights Reserved.</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="terms">
            <a href="./terms-and-condition-page.html" class="pe-0 pe-md-5"><p>Terms of Use</p></a>
            <a href="./privacy-police-page.html" class="ps-5 ps-md-0"><p>Privacy Policy</p></a>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  FOOTER SECTION END HERE================== -->

    <!-- ===================BOOTSTRAP JS FILE LINK================== -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <!-- <script>
      var video = document.getElementById("myVideo");

      var btn = document.getElementById("myBtn");

      function myFunction() {
        if (video.paused) {
          video.play();
          btn.innerHTML = "Pause";
        } else {
          video.pause();
          btn.innerHTML = "Play";
        }
      }
    </script> -->
  </body>
</html>
