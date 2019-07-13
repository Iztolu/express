<!--Carousel Wrapper-->
<style type="text/css">
    html,
    body,
    .carousel {
        height: 60vh;
    }

    @media (max-width: 740px) {
        html,
        body,
        .carousel {
            height: 100vh;
        }
    }

    @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        .carousel {
            height: 100vh;
        }
    }

</style>
<div id="carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example" data-slide-to="1"></li>
      <li data-target="#carousel-example" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <!--Mask-->
        <div class="view">
            <div class="full-bg-img flex-center mask rgba-purple-light white-text">
              <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                <li>
                  <h1 class="font-weight-bold display-3 text-uppercase">Express</h1>
                </li>
                <li>
                  <p class="font-weight-bold display-4 text-capitalize py-4">Bringing you a better transport scheme</p>
                </li>
                <!-- <li class="list-inline-item">
                  <a target="" href="#" class="btn btn-unique btn-lg btn-rounded mr-0">Sign in</a>
                </li>
                <li class="list-inline-item">
                  <a target="" href="#" class="btn btn-cyan btn-lg btn-rounded ml-0">Sign up</a>
                </li> -->
              </ul>
            </div>
          </div>
          <!--/.Mask-->
        <div class="view hm-black-light">            
          <div class="mask"></div>
        </div>
        <!-- <div class="carousel-caption">
          <h3 class="h3-responsive">Yeah, so carousels are a bit "meh"</h3>
          <p>But...</p>
        </div> -->
      </div>
      <div class="carousel-item">
          <div class="view">
              <div class="full-bg-img flex-center mask rgba-purple-light white-text">
                  <ul class="animated fadeInDown col-md-12 list-unstyled list-inline">
                      <li>
                          <p class="font-weight-bold display-4 text-capitalize py-4">You never know until you've
                              taken a ride</p>
                      </li>
                  </ul>
              </div>
          </div>
        <!--Mask color-->
        <div class="view hm-black-strong">
          <div class="mask"></div>
        </div>
        <!-- <div class="carousel-caption">
          <h3 class="h3-responsive">Your client will love it</h3>
          <p>and be amazed by your technical ability</p>
        </div> -->
      </div>
      <div class="carousel-item">
        <!--Mask color-->
          <div class="view">
              <div class="full-bg-img flex-center mask rgba-purple-light white-text">
                  <ul class="animated fadeInRight col-md-12 list-unstyled list-inline">
                      <li>
                          <p class="font-weight-bold display-4 text-capitalize py-4">What are you waiting for?</p>
                      </li>
                  </ul>
              </div>
          </div>
        <div class="view hm-black-slight">
          <div class="mask"></div>
        </div>
        <!-- <div class="carousel-caption">
          <h3 class="h3-responsive">Be prepared</h3>
          <p>to have money thrown at you!</p>
        </div> -->
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>