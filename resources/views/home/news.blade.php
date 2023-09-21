 <!-- ===================  SABIHA  NEWS SECTION START HERE================== -->
 <div class="container-fluid background-class">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="news-section-main-heading">
              <h1>Sabiha Abdualkader News</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- card-1 -->


          @foreach ($news as $news)

          <div class="col-md-4">
            <div class="card">
              <div class="card-img-div">
                <img
                  src="imgs/{{$news->news_image}}"
                  alt="card1-img-here"
                  srcset=""
                />
              </div>
              <div class="card-content-div">
                <h3>{{$news->news_title}}</h3>
                <p>
                {{$news->news_desc}}
                </p>
                <a href="http://"><h6>Read more</h6></a>
              </div>
            </div>
          </div>
        
          @endforeach
          <!-- <div class="col-md-4">
            <div class="card">
              <div class="card-img-div">
                <img
                  src="./imgs/card-img-2.png"
                  alt="card1-img-here"
                  srcset=""
                />
              </div>
              <div class="card-content-div">
                <h3>Build prototypes with thousands of components.</h3>
                <p>
                  Leverage agile frameworks to provide a robust synopsis for
                  high level overviews. Iterative approaches.
                </p>
                <a href="http://"><h6>Read more</h6></a>
              </div>
            </div>
          </div>
         
          <div class="col-md-4">
            <div class="card">
              <div class="card-img-div">
                <img
                  src="./imgs/card-img-3.png"
                  alt="card1-img-here"
                  srcset=""
                />
              </div>
              <div class="card-content-div">
                <h3>Build prototypes with thousands of components.</h3>
                <p>
                  Leverage agile frameworks to provide a robust synopsis for
                  high level overviews. Iterative approaches.
                </p>
                <a href="http://"><h6>Read more</h6></a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- ===================  SABIHA  NEWS SECTION END HERE================== -->
