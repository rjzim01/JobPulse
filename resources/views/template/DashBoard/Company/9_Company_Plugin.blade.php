@include('template.DashBoard.Company.0_Company_Top')

  @include('template.DashBoard.Company.0_Company_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Plugin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
        </ol>
      </nav>
    </div>

    <br>

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title text-center">Blogs</h5>
                  <div class="row">
                    <div class="d-flex justify-content-end">
                      <span id="toggle_button_blog" class="bg-light border rounded ps-1 pe-1" style="cursor: pointer;">Deactivate</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title text-center">Employee</h5>
                    <div class="row">
                      <div class="d-flex justify-content-end">
                        <span id="toggle_button_employee" class="bg-light border rounded ps-1 pe-1" style="cursor: pointer;">Deactivate</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

</main>

<script>

  function toggle_sidebar_visibility(buttonId, navId) {
    var btn = document.getElementById(buttonId);
    var nav = document.getElementById(navId);
    if (btn.textContent === 'Deactivate') {
        btn.textContent = 'Active';
        nav.style.display = 'none';
    } else {
        btn.textContent = 'Deactivate';
        nav.style.display = 'block';
    }
  }

  document.getElementById("toggle_button_employee").addEventListener("click", function() {
    toggle_sidebar_visibility("toggle_button_employee", "side_bar_employee");
  });

  document.getElementById("toggle_button_blog").addEventListener("click", function() {
    toggle_sidebar_visibility("toggle_button_blog", "side_bar_blog");
  });

</script>

@include('template.DashBoard.Company.0_Company_Bottom')