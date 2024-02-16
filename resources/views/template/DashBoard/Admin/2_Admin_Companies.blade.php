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
          <strong style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px;">Sorting</strong>
        </h4>

        <table class="table table-bordered table-custom">
          <thead>
            <tr>
              <th>Company Name</th>
              <th>Status</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            @php
                
            @endphp
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

</main>

@include('template.DashBoard.Admin.0_Admin_Bottom')