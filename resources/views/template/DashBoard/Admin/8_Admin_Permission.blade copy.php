@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>User Permission</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
        </ol>
      </nav>
    </div>

    <div class="text-center">

        <h4 style="text-align:right;">
          <strong id="usersSortByNameBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Name</strong>
          <strong id="usersSortByRollBtn" style="background: rgb(233, 233, 233); color: black; padding: 0px 10px 0px 10px; cursor: pointer;">Roll</strong>
        </h4>

        <div id="users" style="display: block">

          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Roll</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->roll }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('AdminRollPermissionEdit', ['id'=>$user->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">Edit</a>
                    </span>
                    <span class="rounded" style="padding: 5px 10px 5px 10px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 0px 0px 2px;">
                      <a href="#" style="text-decoration: none; color:rgb(0, 0, 0);">Delete</a>
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

        <div id="usersSortByName" style="display: none">

          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Roll</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($usersSortByName as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->roll }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('AdminRollPermissionEdit', ['id'=>$user->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">Edit</a>
                    </span>
                    <span class="rounded" style="padding: 5px 10px 5px 10px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 0px 0px 2px;">
                      <a href="#" style="text-decoration: none; color:rgb(0, 0, 0);">Delete</a>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div class="d-flex justify-content-end">
            {{$usersSortByName->links()}}
          </div>

        </div>

        <div id="usersSortByRoll" style="display: none">

          <table class="table table-bordered table-custom">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Roll</th>
                <th>Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($usersSortByRoll as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->roll }}</td>
                  <td class="text-center">
                    <span class="rounded" style="padding: 5px 20px 5px 23px; background: rgb(0, 255, 0); cursor: pointer; margin: 0px 2px 0px 0px;">
                      <a href="{{ route('AdminRollPermissionEdit', ['id'=>$user->id]) }}" style="text-decoration: none;  color:rgb(55, 55, 55);">Edit</a>
                    </span>
                    <span class="rounded" style="padding: 5px 10px 5px 10px; background: rgb(255, 0, 0); cursor: pointer; margin: 0px 0px 0px 2px;">
                      <a href="#" style="text-decoration: none; color:rgb(0, 0, 0);">Delete</a>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          <div class="d-flex justify-content-end">
            {{$usersSortByRoll->links()}}
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

  document.getElementById("usersSortByNameBtn").addEventListener("click", function() {
    work("users", "usersSortByName", "usersSortByRoll", "usersSortByNameBtn");
  });

  document.getElementById("usersSortByRollBtn").addEventListener("click", function() {
    work("users", "usersSortByRoll", "usersSortByName", "usersSortByRollBtn");
  });

</script>

@include('template.DashBoard.Admin.0_Admin_Bottom')