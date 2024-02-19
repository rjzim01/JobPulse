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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
          <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>Customer</h4>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0 bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table border" id="tableData">
                <thead>
                  <tr class="bg-light">
                      <th>No</th>
                      <th>Name</th>
                      <th>Status</th>
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

    let res=await axios.get("/AdminCompanie");

    let tableList=$("#tableList");
    let tableData=$("#tableData");

    tableData.DataTable().destroy();
    tableList.empty();

    res.data.forEach(function (item,index) {
        let row=`<tr>
                    <td>${index+1}</td>
                    <td>${item['name']}</td>
                    <td>${item['status']}</td>
                    <td>
                        <button data-id="${item['id']}" class="btn editBtn btn-sm btn-outline-success">Edit</button>
                        <button data-id="${item['id']}" class="btn deleteBtn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>`
        tableList.append(row)
    })

    // $('.editBtn').on('click', async function () {
    //     let id= $(this).data('id');
    //     await FillUpUpdateForm(id)
    //     $("#update-modal").modal('show');
    // })

    new DataTable('#tableData',{
        order:[[0,'desc']],
        lengthMenu:[5,10,15,20,30]
    });
  }

</script>

@include('template.DashBoard.Admin.0_Admin_Bottom')