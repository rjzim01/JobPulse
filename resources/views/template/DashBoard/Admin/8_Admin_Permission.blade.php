@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>All User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
          <div class="card px-5 py-5">
            {{-- <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>All User</h4>
                </div>
            </div> 
            <hr class="bg-dark "/>
            --}}
            <table class="table" id="tableData">
                <thead>
                  <tr class="bg-light">
                      <th>No</th>
                      <th>Name</th>
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

    let res=await axios.get("/Api/Admin/Roll");

    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();

    res.data.forEach(function (item,index) {
        let row=`<tr>
                    <td>${index+1}</td>
                    <td>${item['name']}</td>
                    <td>${item['roll']}</td>
                    <td>
                        <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>`
        tableList.append(row)
    })

    $('.editBtn').on('click', async function () {
      
      // Get the data-id attribute of the clicked button
      let Id = $(this).data('id');
      
      // Redirect the user to the edit route with the company ID as a parameter
      window.location.href = `/AdminRoll/edit/${Id}`;
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

@include('template.DashBoard.Admin.0_Admin_Bottom')