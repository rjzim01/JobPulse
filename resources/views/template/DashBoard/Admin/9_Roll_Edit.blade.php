@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Roll Permission</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item active">Edit</li>
          <li class="breadcrumb-item">{{ $user->name }}</li>
        </ol>
      </nav>
    </div>

    <br>

    <form action="{{ Route('AdminRollPermissionStore', ['id'=>$user->id]) }}" method="post">
      @csrf
      <div class="form-group">
        <label for="attendance_date">User Name</label>
        <input type="text" class="form-control" value="{{ $user->name }}" readonly>
      </div>

      <br>

      <div class="form-group">
          <label for="course">Roll</label>
          <select class="form-control" name="roll">
              <option value="">Select Roll Current as ->{{ $user->roll }}</option>
              @if (Auth::user()->roll === 'Admin')
                <option value="Editor">Editor</option>
                <option value="Manager">Manager</option>
                <option value="Company">Company</option>
                <option value="Candidate">Candidate</option>
              @elseif(Auth::user()->roll === 'Manager')
                <option value="Editor">Editor</option>
                <option value="Candidate">Candidate</option>
              @endif
              
          </select>
      </div>

      <br>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</main>

@include('template.DashBoard.Admin.0_Admin_Bottom')