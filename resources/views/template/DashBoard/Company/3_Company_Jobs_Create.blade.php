@include('template.DashBoard.Company.0_Company_Top')

  @include('template.DashBoard.Company.0_Company_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Jobs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </nav>
    </div>

    <br>
{{-- 
    <form action="{{ Route('CompanyJobsStore') }}" method="post">
      @csrf

      <div class="form-group">
        <label >Job Category</label>
        <select class="form-select" name="category">
          <option value="">Select Category</option>
          <option value="Software Engineer">Software Engineer</option>
          <option value="Developers">Developers</option>
          <option value="Designers">Designers</option>
          <option value="Marketers">Marketers</option>
          <option value="UI/UX">UI/UX</option>
          <option value="Others">Others</option>
        </select>
      </div>

      <br>

      <div class="form-group">
        <label >Job Type</label>
        <select class="form-select" name="type">
          <option value="">Select Type</option>
          <option value="Remote">Remote</option>
          <option value="On-Site">On-Site</option>
        </select>
      </div>

      <br>

      <div class="form-group">
        <label >Job Title</label>
        <input type="text" class="form-control" name="title" >
      </div>

      <br>

      <div class="form-group">
        <label >Job Description</label>
        <input type="text" class="form-control" name="description" >
      </div>

      <br>

      <div class="form-group">
        <label >Job Benifits</label>
        <input type="text" class="form-control" name="benefits" >
      </div>

      <br>

      <div class="form-group">
        <label >Job Location</label>
        <input type="text" class="form-control" name="location" >
      </div>

      <br>

      <div class="form-group">
        <label >Job Apply Deadline</label>
        <input type="date" class="form-control" name="deadline" >
      </div>

      <br>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
--}}

    <div class="card">
      <div class="card-header bg-secondary text-white">
          Job Create
      </div>
      <div class="card-body">
          <div class="row">
              <div class="col-md-8 p-4">

                <form method="POST" action="{{ route('CompanyJobsStore') }}">
                  @csrf

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Title</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Category</label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                          <select class="form-select" name="category">
                            <option value=""></option>
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
                            <option value=""></option>
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
                            <option value=""></option>
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
                            <option value=""></option>
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
                            <option value=""></option>
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
                            <option value=""></option>
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
                        <input type="text" class="form-control" name="salary">
                    </div>
                  </div>
          
                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Description</label>
                    </div>
                    <div class="col-md-9">
                      <textarea name="description" class="form-control" rows="5"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Benefits</label>
                    </div>
                    <div class="col-md-9">
                      <textarea name="benefits" class="form-control" rows="5"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Location</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="" name="location">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Job Deadline</label>
                    </div>
                    <div class="col-md-5">
                      <div class="input-group">
                        <input type="date" class="form-control" name="deadline">
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-md-12 text-end">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                  </div>

                </form>

              </div>
          </div>
      </div>
  </div>

</main>

@include('template.DashBoard.Company.0_Company_Bottom')