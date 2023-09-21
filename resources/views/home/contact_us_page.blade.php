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
    <link rel="stylesheet" href="{{url('home./css/contact_us_page.css')}}">
  </head>
  <body>
@include('home.layout.header')


    <!-- ===================  MAIN HEADER SECTION START HERE================== -->
    <div class="container-fluid main-contact-us-page-header-img">
      <div class="row">
        <div class="col-md-12">
          <div class="main-contact-us-page-header-heading">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  MAIN HEADER SECTION END HERE================== -->

    <!-- ===================  GET IN TOUCH SECTION START HERE================== -->
    <div class="container-fluid">
      <div class="row get-in-touch-row justify-content-center">
        <div class="col-md-5">
          <div class="get-in-touch-body">
            <h2>Get in Touch</h2>
            <p>Join my free courses, and solve problems with expert coaching</p>
            <div class="contact-div d-flex contact-div-1">
              <span class="fa-solid fa-phone"></span>
              <div class="contact-number-div ps-3">
                <h5>Phone Number</h5>
                <li>(319) 555-0115</li>
              </div>
            </div>
            <div class="contact-div d-flex">
              <span class="fa-solid fa-envelope"></span>
              <div class="contact-number-div ps-3">
                <h5>Email</h5>
                <a href="http://"><li>Saiha@gmail.com</li></a>
              </div>
            </div>
            <div class="contact-div d-flex">
              <span class="fa-solid fa-share-nodes"></span>
              <div class="contact-number-div ps-3">
                <h5>Follow Us</h5>
                <a href=""> <i class="fa-brands fa-facebook"></i></a
                >&nbsp;&nbsp;&nbsp;
                <a href=""> <i class="fa-brands fa-instagram"></i></a
                >&nbsp;&nbsp;
                <a href=""><i class="fa-brands fa-twitter"></i></a
                >&nbsp;&nbsp;&nbsp;
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="email-form">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Enter Your Name"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Email</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Enter Your Email"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Phone Number</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Enter Phone Number"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Add Reason</label
                >
                <select
                  class="form-select"
                  aria-label="Default select example"
                  aria-placeholder="Select Reason"
                >
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Message</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  placeholder="Enter Your Message"
                ></textarea>
              </div>
              <button type="submit" class="btn">Send Enquiry</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  GET IN TOUCH SECTION END HERE================== -->

    @include('home.layout.footer')
