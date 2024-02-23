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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
          <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                  @if(Auth::user()->roll === 'Company')
                  <h4><a style="color: black;" href="{{ route('CompanyEmployeeCreate') }}">Create Employee</a></h4>
                  @else
                  <h4>Employee</h4>
                  @endif
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                  <tr class="bg-light">
                      <th>No</th>
                      <th>Email</th>
                      <th>Roll</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="tableList">

                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



</main>


<script>
  
  getList();

  async function getList() {

    let res=await axios.get("/api/Company/Employee");

    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();

    res.data.forEach(function (item,index) {
        let role = item['roll'] === 'Company_Manager' ? 'Manager' : 'Editor';
        let row=`<tr>
                    <td>${index+1}</td>
                    <td>${item['email']}</td>
                    <td>${role}</td>
                    <td>
                        <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>`
        tableList.append(row)
    })

    $('.editBtn').on('click', async function () {
      
      // Get the data-id attribute of the clicked button
      let userId = $(this).data('id');
      
      // Redirect the user to the edit route with the company ID as a parameter
      window.location.href = `/Company/Employee/${userId}`;
    })
    
    $('.deleteBtn').on('click',function () {

        let companyId = $(this).data('id');
        window.location.href = `/AdminCompanies/delete/${companyId}`;

    })

    new DataTable('#tableData',{
        order:[[0,'desc']],
        lengthMenu:[5,10,15,20,30]
    });
  }

</script>


@include('template.DashBoard.Company.0_Company_Bottom')