@include('template.DashBoard.Candidate.0_Candidate_Top')

  @include('template.DashBoard.Candidate.0_Candidate_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Jobs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item">{{ $job->title }}</li>
        </ol>
      </nav>
    </div>

    <br>

    <div class="card">
      <div class="card-header bg-secondary text-white">
          Job Details
      </div>
      <div class="card-body">
          <div class="row">
              <div class="col-md-8">
                  <h5 class="card-title">Job Title</h5>
                  <p class="card-text">{{ $job->title }}</p>
                  <h5 class="card-title">Job Description</h5>
                  <p class="card-text">{{ $job->description }}</p>
                  <h5 class="card-title">Job Benefits</h5>
                  <p class="card-text">{{ $job->benefits }}</p>
                  <h5 class="card-title">Job Location</h5>
                  <p class="card-text">{{ $job->location }}</p>
                  <h5 class="card-title">Job Deadline</h5>
                  <p class="card-text">{{ date('d F Y', strtotime(optional($job)->deadline)) }}</p>
              </div>
              <div class="col-md-4">
                  <div class="card" style="background: rgb(255, 255, 255)">
                      <div class="card-body">
                          <h5 class="card-title">Applied</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</main>

@include('template.DashBoard.Candidate.0_Candidate_Bottom')