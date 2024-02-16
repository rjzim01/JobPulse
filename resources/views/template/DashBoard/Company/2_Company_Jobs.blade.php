@include('template.DashBoard.Company.0_Company_Top')

  @include('template.DashBoard.Company.0_Company_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Jobs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
        </ol>
      </nav>
    </div>

    <br>

    <h4 style="text-align:left;">
      <strong style="cursor: pointer; background: rgb(233, 233, 233); padding: 0px 10px 0px 10px;">
        <a href="{{ route('CompanyJobsCreate') }}" style="color: black;">Create Job</a>
      </strong>
    </h4>

    <h4 style="text-align:right;">
      <strong style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px;">Sorting</strong>
    </h4>

    <div class="text-center">

      <table class="table table-bordered table-custom">
        <thead>
          <tr>
            <th>Job Title</th>
            <th>Published Date</th>
            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          @php
              
          @endphp
          @foreach($jobs as $job)
            <tr>
              <td>{{ $job->title }}</td>
              <td>{{ $job->created_at }}</td>
              <td class="text-center">
                <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                  <a href="{{ route('CompanyJobView', ['jobId'=>$job->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">View</a>
                </span>
                <span class="rounded" style="padding: 5px 10px 5px 10px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 0px 0px 2px;">
                  <a href="{{ route('CompanyJobDelete', ['jobId'=>$job->id]) }}" style="text-decoration: none; color:rgb(0, 0, 0);">Delete</a>
                </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-end">
        {{$jobs->links()}}
      </div>

    </div>

</main>

@include('template.DashBoard.Company.0_Company_Bottom')