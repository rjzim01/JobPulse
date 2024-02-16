@include('template.DashBoard.Company.0_Company_Top')

  @include('template.DashBoard.Company.0_Company_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Jobs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item active">{{ $job->title }}</li>
          <li class="breadcrumb-item active">Applicants</li>
          <li class="breadcrumb-item">{{ $user->name }}</li>
        </ol>
      </nav>
    </div>

    <br>

    <div class="card">
      
      <div class="card-body">
        
        <!-- Preview and save button -->
        <div class="row border" style="margin: 2px 0px 3px 0px;">
          <div class="col-md-9 mt-2">
            <h3>Candidate for <strong>{{ $job->title }}</strong></h3>
          </div>
          <div class="col-auto ms-4">
              <button type="button" class="btn btn-success mt-2 mb-2 ps-4 pe-4">Select</button>
          </div>
          <div class="col-auto">
              <button type="submit" class="btn btn-primary mt-2 mb-2 ps-4 pe-4">Reject</button>
          </div>
        </div>
      
        <div class="border p-3">
            <!-- Basic Demographic Information Information Section -->
            @include('template.DashBoard.Candidate.Modal.1_basic')

            <!-- Educational Information Section -->
            @include('template.DashBoard.Candidate.Modal.2_education')

            <!-- Professional Trainings(if any) -->
            @include('template.DashBoard.Candidate.Modal.3_training')

            <!-- Job Experiences (if any) -->
            @include('template.DashBoard.Candidate.Modal.4_job')

            <!-- Skills (add skills by comma) -->
            @include('template.DashBoard.Candidate.Modal.5_skill')
            
            <!-- Extra Information -->
            @include('template.DashBoard.Candidate.Modal.6_extra')

        </div>

      </div>
    </div>

</main>

@include('template.DashBoard.Company.0_Company_Bottom')