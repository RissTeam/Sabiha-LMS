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
    <link rel="stylesheet" href="{{url('home./css/style.css')}}" />
    <link rel="stylesheet" href="{{url('home./css/courses.css')}}" />
    <link rel="stylesheet" href="{{url('home./css/course-overview-page.css')}}" />
  </head>
  <body>
    <!-- ===================  NAVBAR START HERE================== -->
    @include('home.layout.header')
    
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
              <a href="course-overview-page.html"><h3 class="active">Overview</h3> </a>
            </div>
            <div class="col-md-2 col-6">
              <a href="course-detail-review-page.html"><h3>Reviews</h3> </a>
            </div>
            <div class="col-md-8 d-none d-md-block"></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="course-overview">
                <h2>Course Overview</h2>
                <p>
                  t is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it has a more-or-less
                  normal distribution of letters, as opposed to using 'Content
                  here, content here', making it look like readable English.
                  Many desktop publishing packages and web page editors now use
                  Lorem Ipsum as their default model text, and a search for
                  'lorem ipsum' will uncover many web sites still in their
                  infancy.
                </p>
                <p>
                  Various versions have evolved over the years, sometimes by
                  accident, sometimes on purpose (injected humour and the like).
                </p>
              </div>
            </div>
          </div>
          <div class="row course-overview">
            <h2>What You Will Learn</h2>

            <div class="col-md-6">
              <div class="">
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>Become a UX
                  designer
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>Create quick
                  wireframes
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>Build a UX
                  project from beginning
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>Learn to design
                  websites & mobile app
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>Build & test a
                  full website design
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>How to use
                  premade UI kits
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="">
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>You will be
                  able to add UX designer to your CV
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>Downloadable
                  exercise files
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>Create your
                  first UX brief & persona
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>You will be
                  able to add UX designer to your CV
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>All the
                  techniques used by UX professionals
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>You will be
                  able to talk correctly with other UX design
                </p>
              </div>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="course-overview">
                <h2>Requirements</h2>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>You will need a
                  copy of Figma. A free trial can be downloaded from Figma.
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>No previous
                  design experience is needed
                </p>
                <p>
                  <i class="fa-regular fa-circle-check pe-3"></i>No previous
                  Figma skills are needed
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="psychology-card">
            <div class="card-content">
              <div class="card-img-div">
                <img src="/imgs/psychology-card-img.png" alt="" />
              </div>
              <div class="sale-price">
                <h4>$100.00</h4>
                <p>
                  $150.00<span><button class="btn ms-3">40% OFF</button></span>
                </p>
              </div>
              <div class="buy-button">
                <button class="btn"><a href="./checkout-page.html">  <i class="fa-solid fa-bag-shopping pe-2"></i>Add to Cart</a>
                
                </button>
                <button class="btn mt-3"><a href="./payment-method-page.html">Buy Now</a></button>
              </div>
              <div class="video-link-card">
                <h2>Next part</h2>
                <a href="./imgs/12b78bcb6390433ab02297a14e3d0dca.mp4"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 2</p></a
                >
                <a href="./imgs/1a4180eb247843b5bc3f206da61bef06.mp4"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 3</p></a
                >
                <a href="./imgs/24bdda3a3f90432bb04724138220f385.mp4"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 4</p></a
                >
                <a href="./imgs/3c9535413d014d768a618121d032f7d1.mp4"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 5</p></a
                >
                <a href="./imgs/7834fd0778964f32bb746d02e9fae9d6.mp4"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 6</p></a
                >
                <a href="./imgs/8b3491a5648e41949d52b85bb98959a3.mp4"
                  ><p><span class="fa-solid fa-video pe-2"></span>Part 7</p></a
                >
                <a href="./imgs/be60524537f64630b050abb7d916441d.mp4"
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
                  <img src="/imgs/most-feature-card1.png" alt="" />
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
                  <img src="/imgs/most-feature-card2.png" alt="" />
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
                  <img src="/imgs/most-feature-card3.png" alt="" />
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

    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
    @include('home.layout.footer')
