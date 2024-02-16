@include('template.Page.0_top')

  <style>

    #about1 {
      background: url("upload/contactBanner/{{ optional($contactPageData)->background_image ? $contactPageData->background_image : 'defaultAbout.jpg' }}") top center;
    }
  
    @media (min-width: 1024px) {
      #about1 {
        background-attachment: fixed;
      }
    } 

  </style>

  <section id="about1" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ optional($contactPageData)->title }}</h1>
      <h2>Stay connected with us, we are always ready to searve you.</h2>
    </div>
  </section>


  <main id="main">

    <section id="about" class="about">

      <br>
      <br>
      
      <div class="container" data-aos="fade-up">
        <div class="row" style="padding: 30px; background: rgb(235, 235, 235); min-height: 250px;">

            <div class="col-md-6">
              <h4 style="padding: 5px 0px 5px 0px;">Contact Us</h4>
              <div class="row">
                <div class="col-md-6 border" style="background: rgb(255, 255, 255);">
                  <h6>Address: {{ optional($contactPageData)->address }}</h6>
                  <h6>Phone: {{ optional($contactPageData)->phone }}</h6>
                  <h6>Email: {{ optional($contactPageData)->email }}</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h4 style="padding: 5px 0px 5px 0px;">Get in touch</h4>
              <form action="" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Your Email" name="email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea class="form-control" placeholder="Message" name="message"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success" style="margin: 10px 0px 0px 0px;">Send Message</button>
                  </div>
                </div>
            </div>

        </div>
      </div>

      <br>
      <br>
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