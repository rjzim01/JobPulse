@include('template.DashBoard.Company.0_Company_Top')

  @include('template.DashBoard.Company.0_Company_Side')

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
              <div class="col-md-8 p-4">

                <form method="POST" action="{{ route('CompanyJobViewUpdate', ['jobId' => $job->id]) }}">
                  @csrf

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Title</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{ optional($job)->title }}" name="title">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Category</label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                          <select class="form-select" name="category">
                            <option value="{{ optional($job)->category }}">{{ optional($job)->category }}</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Developers">Developers</option>
                            <option value="Designers">Designers</option>
                            <option value="Marketers">Marketers</option>
                            <option value="UI/UX">UI/UX</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Type</label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                          <select class="form-select" name="type">
                            <option value="{{ optional($job)->type }}">{{ optional($job)->type }}</option>
                            <option value="Remote">Remote</option>
                            <option value="On-Site">On-Site</option>
                          </select>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Skill Required</label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">

                          <select class="form-select" name="skill1">
                            <option value="{{ optional($job)->skill1 }}">{{ optional($job)->skill1 }}</option>
                            <option value="Java">Java</option>
                            <option value="Php">Php</option>
                            <option value="Python">Python</option>
                            <option value="Javascript">Javascript</option>
                            <option value="C++">C++</option>
                            <option value="Bsc">Bsc</option>
                            <option value="Oop">Oop</option>
                            <option value="Git">Git</option>
                          </select>

                          <select class="form-select" name="skill2">
                            <option value="{{ optional($job)->skill2 }}">{{ optional($job)->skill2 }}</option>
                            <option value="Java">Java</option>
                            <option value="Php">Php</option>
                            <option value="Python">Python</option>
                            <option value="Javascript">Javascript</option>
                            <option value="C++">C++</option>
                            <option value="Bsc">Bsc</option>
                            <option value="Oop">Oop</option>
                            <option value="Git">Git</option>
                          </select>

                          <select class="form-select" name="skill3">
                            <option value="{{ optional($job)->skill3 }}">{{ optional($job)->skill3 }}</option>
                            <option value="Java">Java</option>
                            <option value="Php">Php</option>
                            <option value="Python">Python</option>
                            <option value="Javascript">Javascript</option>
                            <option value="C++">C++</option>
                            <option value="Bsc">Bsc</option>
                            <option value="Oop">Oop</option>
                            <option value="Git">Git</option>
                          </select>

                          <select class="form-select" name="skill4">
                            <option value="{{ optional($job)->skill4 }}">{{ optional($job)->skill4 }}</option>
                            <option value="Java">Java</option>
                            <option value="Php">Php</option>
                            <option value="Python">Python</option>
                            <option value="Javascript">Javascript</option>
                            <option value="C++">C++</option>
                            <option value="Bsc">Bsc</option>
                            <option value="Oop">Oop</option>
                            <option value="Git">Git</option>
                          </select>

                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Salary</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{ optional($job)->salary }}" name="salary">
                    </div>
                  </div>
          
                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Description</label>
                    </div>
                    <div class="col-md-9">
                      <textarea name="description" class="form-control" rows="5">{{ optional($job)->description }}</textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Benefits</label>
                    </div>
                    <div class="col-md-9">
                      <textarea name="benefits" class="form-control" rows="5">{{ optional($job)->benefits }}</textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Location</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{ optional($job)->location }}" name="location">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Deadline</label>
                    </div>
                    <div class="col-md-7">
                      <div class="input-group">
                        <input type="text" class="form-control" value="{{ date('d F Y', strtotime(optional($job)->deadline)) }}" readonly>
                        <input type="date" class="form-control" name="deadline">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-md-12 text-end"> <!-- or use "col-md-12 d-flex justify-content-end" -->
                        <input type="submit" value="Update" class="btn btn-success">
                    </div>
                  </div>

                </form>

              </div>
              
              <div class="col-md-4 p-4">
                  <div class="card" style="background: rgb(255, 255, 255)">
                      <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('CompanyApply', ['jobId' => $job->id]) }}">Applied (<strong>{{ $jobApply }}</strong>) </a></h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</main>

@include('template.DashBoard.Company.0_Company_Bottom')