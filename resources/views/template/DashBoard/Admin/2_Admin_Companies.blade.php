@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Companies</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
    </div>

    <div class="text-center">

        <h4 style="text-align:right;">
          <strong id="companiesSortByNameBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Name</strong>
          <strong id="companiesSortByStatusBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Status</strong>
        </h4>

        <div id="companies" style="display: block">

          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>Company Name</th>
                <th>Status</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>

            <tbody>
              @foreach($companies as $companie)
                <tr>
                  <td>{{ $companie->name }}</td>
                  <td>{{ $companie->status }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('AdminCompaniesEdit', ['id'=>$companie->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">Edit</a>
                    </span>
                    <span class="rounded" style="padding: 5px 10px 5px 10px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 0px 0px 2px;">
                      <a href="{{ route('AdminCompaniesDelete', ['id'=>$companie->id]) }}" style="text-decoration: none; color:rgb(0, 0, 0);">Delete</a>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>

          <div class="d-flex justify-content-end">
            {{$companies->links()}}
          </div>

        </div>

        <div id="companiesSortByName" style="display: none">

          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>Company Name</th>
                <th>Status</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>

            <tbody>
              @foreach($companiesSortByName as $companie)
                <tr>
                  <td>{{ $companie->name }}</td>
                  <td>{{ $companie->status }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('AdminCompaniesEdit', ['id'=>$companie->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">Edit</a>
                    </span>
                    <span class="rounded" style="padding: 5px 10px 5px 10px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 0px 0px 2px;">
                      <a href="{{ route('AdminCompaniesDelete', ['id'=>$companie->id]) }}" style="text-decoration: none; color:rgb(0, 0, 0);">Delete</a>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>

          <div class="d-flex justify-content-end">
            {{$companiesSortByName->links()}}
          </div>

        </div>

        <div id="companiesSortByStatus" style="display: none">

          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>Company Name</th>
                <th>Status</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>

            <tbody>
              @foreach($companiesSortByStatus as $companie)
                <tr>
                  <td>{{ $companie->name }}</td>
                  <td>{{ $companie->status }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('AdminCompaniesEdit', ['id'=>$companie->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">Edit</a>
                    </span>
                    <span class="rounded" style="padding: 5px 10px 5px 10px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 0px 0px 2px;">
                      <a href="{{ route('AdminCompaniesDelete', ['id'=>$companie->id]) }}" style="text-decoration: none; color:rgb(0, 0, 0);">Delete</a>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>

          <div class="d-flex justify-content-end">
            {{$companiesSortByStatus->links()}}
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

  document.getElementById("companiesSortByNameBtn").addEventListener("click", function() {
    work("companies", "companiesSortByName", "companiesSortByStatus", "companiesSortByNameBtn");
  });

  document.getElementById("companiesSortByStatusBtn").addEventListener("click", function() {
    work("companies", "companiesSortByStatus", "companiesSortByName", "companiesSortByStatusBtn");
  });

</script>

@include('template.DashBoard.Admin.0_Admin_Bottom')