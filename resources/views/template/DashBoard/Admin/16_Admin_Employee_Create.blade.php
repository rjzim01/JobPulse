@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Employee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
    </div>

    <br>

    <div class="card">
      <div class="card-header bg-secondary text-white">
          Employee Create
      </div>
      <div class="card-body">
          <div class="row">
              <div class="col-md-8 p-4">

                <form method="POST" action="{{ route('AdminEmployeeStore') }}">
                  @csrf

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Employee Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="email" class="form-control" name="email">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Roll As</label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                          <select class="form-select" name="roll">
                            <option value=""></option>
                            <option value="Manager">Manager</option>
                            <option value="Editor">Editor</option>
                          </select>
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

@include('template.DashBoard.Admin.0_Admin_Bottom')