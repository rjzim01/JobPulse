@include('template.Page.0_top')

  <style>

    #about1 {
      background: url("upload/aboutBanner/{{ optional($aboutPageData)->company_about_banner_image ? $aboutPageData->company_about_banner_image : 'defaultAbout.jpg' }}") top center;
    }
  
    @media (min-width: 1024px) {
      #about1 {
        background-attachment: fixed;
      }
    } 

  </style>

  <section id="about1" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ optional($aboutPageData)->company_title }}</h1>
      <h2>We are team of talented people to make your dream job find easy.</h2>
    </div>
  </section>


  <main id="main">

    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="content">
            <h3 style="padding: 5px 0px 5px 0px;">Company History</h3>
          </div>
          
          <div class="content" style="padding: 10px 10px 10px 10px; background: rgb(235, 235, 235); min-height: 250px;">
            <h6>{{ optional($aboutPageData)->company_history }}</h6>
          </div>
        </div>
      </div>

      <br>
      <br>

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="content">
            <h3 style="padding: 5px 0px 5px 0px;">Our Vision</h3>
          </div>
          
          <div class=" content" style="padding: 10px 10px 10px 10px; background: rgb(235, 235, 235); min-height: 250px;">
            <h6>{{ optional($aboutPageData)->company_vision }}</h6>
          </div>
        </div>

      </div>

      <br>
      <br>

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="content">
            <h3 style="padding: 5px 0px 5px 0px; text-align: center;">Companies belive in us</h3>
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

    </section>

  </main>
  
@include('template.Page.0_bottom')