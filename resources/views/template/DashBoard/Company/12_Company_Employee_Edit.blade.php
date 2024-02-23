@include('template.DashBoard.Company.0_Company_Top')

  @include('template.DashBoard.Company.0_Company_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Company</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Create</li>
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

                <form method="POST" action="{{ route('CompanyEmployeeUpdate', ['userId' => $user->id]) }}">
                  @csrf

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Employee Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Roll As</label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                          <select class="form-select" name="roll">
                            <option value="{{ $user->roll }}">
                              @if( $user->roll === 'Company_Manager') Manager
                              @else Editor
                              @endif
                            </option>
                            <option value="Company_Manager">Manager</option>
                            <option value="Company_Editor">Editor</option>
                          </select>
                        </div>
                        {{--  --}}
                        
                        {{--  --}}
                    </div>
                  </div>
                  {{-- 
                  <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Company</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="company_identifier" value="{{ $user->company_identifier }}">
                    </div>
                  </div> 
                  --}}
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