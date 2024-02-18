@include('template.Page.0_top')

  <style>

    #blog1 {
      background: url("upload/blogBanner/{{ optional($blogPageData)->bg_img ? $blogPageData->bg_img : 'defaultBlog.jpg' }}") top center;
    }
  
    @media (min-width: 1024px) {
      #blog1 {
        background-attachment: fixed;
      }
    } 

  </style>

  <section id="blog1" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ optional($blogPageData)->title }}</h1>
      <h2>We are team of talented people to make your dream job find easy.</h2>
    </div>
  </section>


  <main id="main">

  </main>
  
@include('template.Page.0_bottom')