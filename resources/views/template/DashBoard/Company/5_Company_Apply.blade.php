@include('template.DashBoard.Company.0_Company_Top')

  @include('template.DashBoard.Company.0_Company_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Jobs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item active">{{ $job->title }}</li>
          <li class="breadcrumb-item">Applicants</li>
        </ol>
      </nav>
    </div>

    <div class="text-center">

        <h4 style="text-align:right;">
          <strong style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px;">Sorting</strong>
        </h4>

        <table class="table table-bordered table-custom">
          <thead>
            <tr>
              <th>Applicant Name</th>
              <th>Applying Date</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            @php
                
            @endphp
            @foreach($users as $user)
              <tr>
                <td>{{ $user->user->name }}</td>
                <td>{{ $user->created_at }}</td>
                <td class="text-center">
                  <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                    <a href="{{ route('CompanyApplyUser', ['jobId'=>$user->job_id, 'userId'=>$user->user->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">View</a>
                  </span>
                  <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                    <a href="#" style="text-decoration: none;  color:rgb(55, 55, 55);">Reject</a>
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="d-flex justify-content-end">
          {{$users->links()}}
        </div>

    </div>

</main>

@include('template.DashBoard.Company.0_Company_Bottom')