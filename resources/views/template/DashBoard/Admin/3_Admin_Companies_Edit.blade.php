@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Companies</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item">Edit</li>
        </ol>
      </nav>
    </div>

    <br>

    <form action="{{ Route('AdminCompaniesEditStore', ['id'=>$companies->id]) }}" method="post">
      @csrf
      <div class="form-group">
        <label for="attendance_date">Company Name</label>
        <input type="text" class="form-control" name="name" value="{{ $companies->name }}" readonly>
      </div>

      <br>

      <div class="form-group">
          <label for="course">Status</label>
          <select class="form-control" name="status" id="course">
              <option value="">Select Status Current as ->{{ $companies->status }}</option>
              <option value="Active">Active</option>
              <option value="Pending">Pending</option>
          </select>
      </div>

      <br>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</main>

@include('template.DashBoard.Admin.0_Admin_Bottom')