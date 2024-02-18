@include('template.DashBoard.Candidate.0_Candidate_Top')

  @include('template.DashBoard.Candidate.0_Candidate_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Jobs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
        </ol>
      </nav>
    </div>

    <div class="text-center">

        <h4 style="text-align:right;">
          <strong id="jobsSortByNameBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Title</strong>
          <strong id="jobsSortByDateBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Date</strong>
        </h4>

        <div id="jobs" style="display: block">
          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>Job Title</th>
                <th>Applying Date</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($jobs as $job)
                <tr>
                  <td>{{ $job->jobs->title }}</td>
                  <td>{{ date('d F Y', strtotime(optional($job)->created_at)) }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('JobView', ['jobId'=>$job->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">View</a>
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

        <div id="jobsSortByName" style="display: none">
          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>Job Title</th>
                <th>Applying Date</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($jobsSortByName as $job)
                <tr>
                  <td>{{ $job->jobs->title }}</td>
                  <td>{{ date('d F Y', strtotime(optional($job)->created_at)) }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('JobView', ['jobId'=>$job->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">View</a>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div class="d-flex justify-content-end">
            {{$jobsSortByName->links()}}
          </div>
        </div>

        <div id="jobsSortByDate" style="display: none">
          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>Job Title</th>
                <th>Applying Date</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($jobsSortByDate as $job)
                <tr>
                  <td>{{ $job->jobs->title }}</td>
                  <td>{{ date('d F Y', strtotime(optional($job)->created_at)) }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('JobView', ['jobId'=>$job->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">View</a>
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

  document.getElementById("jobsSortByNameBtn").addEventListener("click", function() {
    work("jobs", "jobsSortByName", "jobsSortByDate", "jobsSortByNameBtn");
  });

  document.getElementById("jobsSortByDateBtn").addEventListener("click", function() {
    work("jobs", "jobsSortByDate", "jobsSortByName", "jobsSortByDateBtn");
  });

</script>

@include('template.DashBoard.Candidate.0_Candidate_Bottom')