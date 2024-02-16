@include('template.DashBoard.Company.0_Company_Top')
@include('template.DashBoard.Company.0_Company_Side')
    
<main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
        <h1>Company Information</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            </ol>
        </nav>
    </div>

    <br>

    <div class="card">
        <div class="card-body p-3">
            <form action="{{ route('CompanyInfoUpdate') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Preview and save button -->
                <div class="row" style="padding: 0px 0px 0px 0px;">
                    <div class="col-md-2 justify-content-end d-flex">
                        <img height="100px" width="100px" class="rounded-circle" id="imagePreview" src="{{ !empty($companyInfo->logo) ? url('upload/companyLogo/' . $companyInfo->logo) : url('upload/companyLogo/default_company_logo.svg') }}">
                    </div>
                    <div class="col-md-4" style="padding: 30px 40px 0px 40px;">
                        <input type="file" id="imageUpload" name="logo" accept="image/*" onchange="previewImage(event)">Company Logo
                    </div>
                    <div class="col-md-6 justify-content-end d-flex" style="padding: 0px 0px 0px 0px;">
                        <button type="submit" class="btn btn-primary" style="margin: 30px 300px 30px 0px;">Save</button>
                    </div>
                </div>

                <br>
                
                <div class="p-3">
                        
                    <div class="row">
                        <div class="col-md-2">
                            <label class="form-label">Company Name</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control"  value="{{ optional($companyInfo)->name }}" name="name">
                        </div>
                    </div>

                    {{-- <button type="submit" class="btn btn-primary" style="margin: 30px 0px 0px 0px;">Save</button> --}}

                </div>
                
            </form>
        </div>
    </div>
    
</main>

<script>

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
        var output = document.getElementById('imagePreview');
        output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

</script> 

@include('template.DashBoard.bottom')