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

    <form action="{{ Route('CompanyJobsStore') }}" method="post">
      @csrf

      <div class="form-group">
        <label >Job Category</label>
        {{-- <input type="text" class="form-control" name="category" > --}}
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

</main>

@include('template.DashBoard.Company.0_Company_Bottom')