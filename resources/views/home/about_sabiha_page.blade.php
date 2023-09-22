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
    <link rel="stylesheet" href="{{url('home./css/about_sabiha_page.css')}}">
  </head>
  <body>
@include('home.layout.header')

    <!-- ===================  MAIN HEADER SECTION START HERE================== -->
    <div class="container-fluid sabiha-page-bg">
      <div class="row">
        <div class="col-md-12">
          <div class="sabiha-news-page-header-content">
            <h1>Sabiha News</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  MAIN HEADER SECTION END HERE================== -->
    <!-- ===================  SABIHA PAGE ABOUT SECTION START HERE================== -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="sabiha-page-content-body">
            <h2>About Sabiha Abdulkader</h2>
            <p>Greeting from Sabiha Abdulkader! Your internationally certified psychologist and trusted mental coach was born in the United Arab Emirates. With a wealth of experience spanning various sectors, I'm here to provide you with top-notch guidance and support.
            </p>
              <p class="pt-2"> With a passion for empowering individuals, I bring a wealth of experience in family and psychological counselling, mental health, Neuro-linguistic programming, business coaching, and female development. My expertise is backed by a professional certified trainer from the esteemed International Academy for Training and Development in the United Kingdom.</p>
              <p class="pt-2">  Currently, I'm working as a sought-after professional trainer at both the ASASCO Center and the Canadian Global Center. And the excitement doesn't stop there. I'm gearing up to take my insights and expertise to even greater heights, with plans to deliver engaging training sessions at the prestigious Dubai Knowledge Authority and The Hague University in Britain.</p>
              <p class="pt-2"> But that is not all! With a hobby-turned-passion, I've completed multiple professional make-up courses and now proudly serve as a professional make-up artist in Dubai.</p>
              <p class="pt-2">     
             
                Whether you're on a quest for personal growth or seeking expert guidance, I'm here to guide you every step of the way. Let's team up and unleash your full potential – your journey to success starts now!</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="sabiha-page-img-div">
            <img src="./imgs/sabiha-page-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  SABIHA PAGE ABOUT SECTION START HERE================== -->
    <!-- ===================  SABIHA PAGE newsletter SECTION START HERE================== -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row sabiha-page-newslatter">
          <div class="col-md-8 col-12">
            <div class="newslatter-heading">
              <h2>Your mental well-being is important! Access consulting and coaching videos here, completely free</h2>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="sabiha-news-latter-btn">
              <button class="btn "><a href="./courses.html">Courses<i class="fa-solid fa-arrow-right ps-2"></i></a></button>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    <!-- ===================  SABIHA PAGE newsletter SECTION end HERE================== -->

    @include('home.layout.footer')
