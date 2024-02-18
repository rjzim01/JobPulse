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
      <strong id="jobsSortByTitleBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Title</strong>
      <strong id="jobsSortByDateBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Date</strong>
    </h4>

    <div class="text-center">

      <div id="jobs" style="display: block">
        <table class="table table-bordered table-custom">
          <thead>
            <tr>
              <th>Job Title</th>
              <th>Published Date</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($jobs as $job)
              <tr>
                <td>{{ $job->title }}</td>
                <td>{{ date('d F Y', strtotime(optional($job)->created_at)) }}</td>
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

      <div id="jobsSortByTitle" style="display: none">

        <table class="table table-bordered table-custom">
          <thead>
            <tr>
              <th>Job Title</th>
              <th>Published Date</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($jobsSortByTitle as $job)
              <tr>
                <td>{{ $job->title }}</td>
                <td>{{ date('d F Y', strtotime(optional($job)->created_at)) }}</td>
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
          {{$jobsSortByTitle->links()}}
        </div>

      </div>

      <div id="jobsSortByDate" style="display: none">

        <table class="table table-bordered table-custom">
          <thead>
            <tr>
              <th>Job Title</th>
              <th>Published Date</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($jobsSortByDate as $job)
              <tr>
                <td>{{ $job->title }}</td>
                <td>{{ date('d F Y', strtotime(optional($job)->created_at)) }}</td>
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
          {{$jobsSortByDate->links()}}
        </div>

      </div>

    </div>

</main>

<script>

  function work(a, b, c, d) {

    var x = document.getElementById(a);
    var y = document.getElementById(b);
    var z = document.getElementById(c);
    var w = document.getElementById(d);

    if (x.style.display === 'block') {
      x.style.display = 'none';
      y.style.display = 'block';
      z.style.display = 'none';
      w.style.background = 'rgb(100, 100, 100)';
      w.style.color = 'white';
    } else {
      x.style.display = 'block';
      y.style.display = 'none';
      z.style.display = 'none';
      w.style.background = 'rgb(233, 233, 233)';
      w.style.color = 'black';
    }
    
  };

  document.getElementById("jobsSortByTitleBtn").addEventListener("click", function() {
    work("jobs", "jobsSortByTitle", "jobsSortByDate", "jobsSortByTitleBtn");
  });

  document.getElementById("jobsSortByDateBtn").addEventListener("click", function() {
    work("jobs", "jobsSortByDate", "jobsSortByTitle", "jobsSortByDateBtn");
  });

</script>

@include('template.DashBoard.Company.0_Company_Bottom')