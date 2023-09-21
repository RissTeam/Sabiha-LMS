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
    <link rel="stylesheet" href="{{url('home./css/style.css')}}" />
    <link rel="stylesheet" href="{{url('home./css/courses.css')}}" />
  </head>
  <body>

@include('home.layout.header')


    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
    

    <div class="container-fluid most-feature-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="most-feature-sction-heading-2">
              <h1>Most Feature Courses</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Imperdiet tempus felis vitae sit est quisque.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- card1 -->
          @foreach ($feature_courses as $feature_courses)
          <div class="col-md-4 pt-4 pt-md-0">
            <div class="most-feature-card most-feature-card2">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="imgs/{{$feature_courses->course_image}}" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>{{$feature_courses->course_title}}</h2>
                <div class="row pt-3">
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-comment pe-2"></span>{{$feature_courses->comment}}
                      </p>
                      <p>
                        <span class="fa-regular fa-calendar-days pe-2"></span
                        >{{$feature_courses->time}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <div class="comments-sec">
                      <p>
                        <span class="fa-regular fa-clock pe-2"></span>{{$feature_courses->date}}
                      </p>
                      <p><span class="fa-regular fa-heart pe-2"></span>{{$feature_courses->save}}</p>
                    </div>
                  </div>
                </div>
                <div class="row tutor-row">
                  <div class="col-md-7 col-8">
                    <div class="tutor-img-sec">
                      <p>
                        <img
                          src="imgs/{{$feature_courses->profile_image}}"
                          alt=""
                          class="pe-2"
                        />{{$feature_courses->profile_name}}
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>${{$feature_courses->price}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


      @endforeach



         
        </div>
        
      </div>
    </div>
    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->

    <!-- ===================  FREE COURSES  SECTION START HERE================== -->

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="free-courses-main-heading-page">
            <h1>Free Courses</h1>
            <p>
              Explore free courses! Elevate your mind and liberate your
              emotional burden.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- card1 -->


        @foreach ($free_courses as $free_courses)
        <div class="col-md-6">
          <div class="main-card-body free-courses">
            <div class="most-feature-card-img-div">
              <img src="imgs/{{$free_courses->image}}" alt="" />
            </div>
            <div class="rating-stars d-flex">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
              <span class="review">4.8 (120 Reviews)</span>
            </div>
            <div class="row pt-3">
              <div class="col-md-6 col-6">
                <div class="comments-sec">
                  <p>
                    <span class="fa-regular fa-clock pe-2"></span>{{$free_courses->time}}
                  </p>
                  <p>
                    <span class="fa-regular fa-thumbs-up pe-2"></span>{{$free_courses->likes}}
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-6">
                <div class="comments-sec">
                  <p><span class="fa-regular fa-heart pe-2"></span>{{$free_courses->save}}</p>
                  <p>
                    <span class="fa-regular fa-comments pe-2"></span>{{$free_courses->comment}}
                  </p>
                </div>
              </div>
            </div>
            <h2>{{$free_courses->title}}</h2>
            <p>
            {{$free_courses->desc}}
            </p>
            <a href="{{url('course_overview_page',$free_courses->id)}}"
              ><button class="btn">Read More</button></a
            >
          </div>
        </div>

        @endforeach

      </div>
     
    </div>

    <!-- ===================  FREE COURSES SECTION END HERE================== -->

    <!-- newsletter section -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row news-letter-row">
            <div class="col-md-6">
              <div class="news-letter-sec">
                <h2>Get weekly updates and seasonal free course access.</h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="news-letter-sec">
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Email Here"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2"
                  />
                  <span class="input-group-text" id="basic-addon2"
                    >Subscribe</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('home.layout.footer')
