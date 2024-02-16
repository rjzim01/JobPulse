@include('template.Page.0_top')

  <style>

    #home1 {
      background: url("upload/homeBanner/{{ optional($homePageData)->bg_img ? $homePageData->bg_img : 'defaultHome.jpg' }}") top center;
    }

    @media (min-width: 1024px) {
      #home1 {
        background-attachment: fixed;
      }
    } 

  </style>

  <section id="home1" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ $homePageData->title }},<br>Find Your Dream Job</h1>
      <h2>{{ $homePageData->sub_title }}</h2>
      
      @if (Auth::user())
        @if (Auth::user()->role === 'admin' )
          <a class="btn-get-started" href="#">
            <span>Get Started</span>
          </a>
        @else
          <a class="btn-get-started" href="#">
            <span>Get Started</span>
          </a>
        @endif
      @else
          <a href="#" class="btn-get-started">Get Started</a>
      @endif
    </div>
  </section>

  <main id="main">

    <section id="companie" class="companie">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="content">
            <h3 style="padding: 5px 0px 5px 0px; text-align: center;">Top Companies</h3>
          </div>
          
          <div class="content" style="padding: 10px; background: rgb(235, 235, 235);">
            <div class="row">
                @foreach ($company as $index => $companies)
                  @if($index < 6)
                    <div class="col-md-2">
                      <div class="d-flex justify-content-center align-items-center overflow-hidden">
                        <img height="100px" width="100px" src="{{ !empty($companies->logo) ? url('upload/companyLogo/' . $companies->logo) : url('upload/companyLogo/default_company_logo.svg') }}" class="slide-from-left">
                      </div>
                    </div>
                  @else
                      @break 
                  @endif
                @endforeach
            </div>
          </div>

        </div>
      </div>

      <br>
      <br>
      <br>
      <br>

      <div class="container" data-aos="fade-up">
        <div class="text-center">
          <h3>Recent Published Jobs</h3>
        </div>
    
        <div class="container">
          <div class="row m-3 justify-content-center text-center">
            <div class="col-md-2 py-3 border" style="background: rgb(235, 235, 235);">Developers ({{ $developerJob }})</div>
            <div class="col-md-2 py-3 border" style="background: rgb(235, 235, 235);">Designers ({{ $designerJob }})</div>
            <div class="col-md-2 py-3 border" style="background: rgb(235, 235, 235);">Marketers ({{ $marketingJob }})</div>
            <div class="col-md-2 py-3 border" style="background: rgb(235, 235, 235);">UI/UX ({{ $uiuxJob }})</div>
            <div class="col-md-2 py-3 border" style="background: rgb(235, 235, 235);">Others ({{ $otherJob }})</div>
          </div>
        </div>
    
        <div class="m-3 p-3 border" style="background: rgb(235, 235, 235);">

          <div class="search-box m-3 text-end">
            <input type="text" placeholder="Search Jobs">
          </div>
      
          @foreach ($jobs as $job)
              
          <div class="row m-3 p-4 border" style="background: rgb(255, 255, 255);">
            <div class="col-5">
              <div class="row">
                <div class="col-md-4 font-weight-bold">{{ $job->title }}</div>
                <div class="col-md-2 bg-light ms-3 me-1 mb-1">Php</div>
                <div class="col-md-2 bg-light mb-1">Css</div>
              </div>
              <div class="row">
                <div class="col-md-2 bg-light">sql</div>
                <div class="col-md-2 bg-light ms-1 me-1">Javascript</div>
                <div class="col-md-2 bg-light ms-1 me-1">Vue</div>
                <div class="col-md-2 bg-light">React</div>
              </div>
            </div>
            <div class="col-7 justify-content-end text-end">
              @if (Auth::check())
                @if (Auth::user()->roll === 'Candidate')
                    @if (Auth::user()->jobs->contains('id', $job->id))
                        <div>Applied</div>
                    @else
                        <div><a href="{{ route('ApplyJob', ['id' => $job->id]) }}">Apply</a></div>
                    @endif
                @else
                    <div>Only Candidate can Apply</div>
                @endif
              @else
                  <div><a href="{{ route('login') }}">Sign in to Apply</a></div>
              @endif          
              <div>1000$</div>
            </div>
          </div>

          @endforeach

          <div class="d-flex justify-content-end">
            {{ $jobs->links() }}
          </div>

        </div>

      </div>

    </section>
    
  </main>
  
@include('template.Page.0_bottom')