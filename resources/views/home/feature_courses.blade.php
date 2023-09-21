 <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
 <div class="container-fluid most-feature-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="most-feature-sction-heading">
              <h1>Most Feature Courses</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Imperdiet tempus felis vitae sit est quisque.
              </p>
              <div
                class="tab-shift-button d-flex text-align-center justify-content-center align-items-center"
              >
                <button class="btn active">Recent Courses</button>
                
                <button class="btn ms-md-5 ms-2">Featured Courses</button>
                <button class="btn ms-md-5 ms-2">Popular Courses</button>
              </div>
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










          <!-- card2 -->
          <!-- <div class="col-md-4 pt-4 pt-md-0">
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
                        />Sabiha
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
          </div> -->
          <!-- card3 -->
          <!-- <div class="col-md-4 pt-4 pt-md-0">
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
                        />Sabiha
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
          </div> -->
        </div>
        <!-- <div class="row pt-4">
       
          <div class="col-md-4">
            <div class="most-feature-card most-feature-card2">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="./imgs/most-feature-card4.png" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>Digital Social Media Marketing - How to Become Expert</h2>
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
                        />Sabiha
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>$70.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div class="col-md-4 pt-4 pt-md-0">
            <div class="most-feature-card most-feature-card2">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="./imgs/most-feature-card5.png" alt="" />
                </div>
                <div class="rating-stars d-flex">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked half"></span>&nbsp;&nbsp;
                  <span class="review">4.8 (120 Reviews)</span>
                </div>
                <h2>
                  Learn Java Script from Our Best Mentors - Complete Guide
                </h2>
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
                        />Sabiha
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>$120.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 pt-4 pt-md-0 card-6">
            <div class="most-feature-card most-feature-card2">
              <div class="main-card-body">
                <div class="most-feature-card-img-div">
                  <img src="./imgs/mos-feature-card6.png" alt="" />
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
                        />Sabiha
                      </p>
                    </div>
                  </div>
                  <div class="col-md-5 col-4">
                    <div class="tutor-content-sec">
                      <p>$50.00</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <!-- ===================  MOST FEATURE  SECTION START HERE================== -->
