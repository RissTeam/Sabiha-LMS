<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SABIHA || ABDULKADER_LMS</title>

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
    <link rel="stylesheet" href="./css/checkout-page.css" />
    <link rel="stylesheet" href="./css/payment-method-page.css" />
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
                    <a class="nav-link" aria-current="page" href=""
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./courses.html">Courses</a>
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
    <!-- =================MY CART SECTION START HERE========= -->
    <div class="container-fluid checkout-cart-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12 cart-section">
            <h1>Payment Method</h1>
          </div>
        </div>
        <div class="row">
          <!-- form -->
          <div class="col-md-8">
            <div class="row payment-row pt-3">
              <div class="col-md-6 col-6">
                <div class="road-map">
                  <i class="fa-solid fa-credit-card"></i>
                  <p>Payment Method</p>
                </div>
              </div>
              <div class="col-md-6 col-6">
                <div class="road-map">
                  <i class="fa-solid fa-credit-card review-roadmap"></i>
                  <p>Review</p>
                </div>
              </div>
            </div>
            <div class="payment-method">
              <h3>Select a payment method</h3>
              <form class="row g-3 main-form">
                <div class="mb-0 mb-md-3">
                  <input
                    type="radio"
                    id="html"
                    name="fav_language"
                    value="HTML"
                    class="me-2"
                  />
                  <label for="html" class="debate-card">Debit/Credit Card</label><br />
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label"
                    >Card Number</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress"
                    placeholder="3897 22XX 1900 3890"
                  />
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Card Nam</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress2"
                    placeholder="Robert Fox"
                  />
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label"
                    >Expiry Date
                  </label>
                  <input
                    type="email"
                    class="form-control"
                    id="inputEmail4"
                    placeholder="09/26"
                  />
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">CVV</label>
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword4"
                  />
                </div>
                <div class="col-12 add-card-button">
                  <button type="submit" class="btn ">
                    Add Card
                  </button>
                </div>
                <div class=" google-pay-radio">
                  <input
                    type="radio"
                    id="html"
                    name="fav_language"
                    value="HTML"
                  />
                  <label for="html" class="google-pay ms-3">Google Pay</label><br />
                </div>
                <div class="mb-3 google-pay-radio">
                  <input
                    type="radio"
                    id="html"
                    name="fav_language"
                    value="HTML"
                  />
                  <label for="html" class="google-pay ms-3">Paypal</label><br />
                </div>

                <div class="col-12 add-card-button">
                  <button type="submit" class="btn ">
                    Continue
                  </button>
                </div>
              </form>
            </div>
          </div>

          <!-- card -->
          <div class="col-md-4 my-cart-crd">
            <div class="cart-card">
              <div class="cart-cardbody">
                <h3>Subtotal <span class="float-end">$160.00</span></h3>

                <div class="input-section pb-3">
                  <p class="mb-0 pt-3">Enter Discount Code</p>
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="FLAT50"
                      aria-label="Recipient's username"
                      aria-describedby="button-addon2"
                    />
                    <button
                      class="btn btn-outline-secondary"
                      type="button"
                      id="button-addon2"
                    >
                      Apply
                    </button>
                  </div>
                </div>
                <h4>TAX <span class="float-end">$5.00</span></h4>

                <h2>Grand Total <span class="float-end">$165.00</span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =================MY CART SECTION END HERE========= -->

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
            <a href="./terms-and-condition-page.html" class="pe-0 pe-md-5"
              ><p>Terms of Use</p></a
            >
            <a href="./privacy-police-page.html" class="ps-5 ps-md-0"
              ><p>Privacy Policy</p></a
            >
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
  </body>
</html>
