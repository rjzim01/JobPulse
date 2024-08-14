@include('template.DashBoard.Admin.0_Admin_Top')

@include('template.DashBoard.Admin.0_Admin_Side')

<main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
        <h1>Pages</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">About Page</li>
                <li class="breadcrumb-item">Create</li>
            </ol>
        </nav>
    </div>

    <br>

    <div class="border p-3">
        <form action="{{ route('AboutPageStoreAdmin') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            <div class="form-group">
                <label>Page Title</label>
                <input type="text" name="company_title" value="{{ optional($aboutPageData)->company_title }}"
                    class="form-control" style="width: 50%;">
            </div>

            <br>

            <div class="form-group">
                <label for="aboutContent">Company History</label>
                <textarea class="form-control" name="company_history" rows="3" placeholder="Company History">{{ optional($aboutPageData)->company_history }}</textarea>
            </div>

            <br>

            <div class="form-group">
                <label for="aboutContent">Company Vision</label>
                <textarea class="form-control" name="company_vision" rows="3" placeholder="Company Vision">{{ optional($aboutPageData)->company_vision }}</textarea>
            </div>

            <br>

            <label>About Banner Image</label>
            <div class="content"
                style="text-align: center; margin:10px 0px 10px 0px; padding: 10px 10px 10px 10px; background: rgb(253, 253, 253); min-height: 100px;">
                <img id="imagePreview"
                    src="{{ url('upload/aboutBanner/' . optional($aboutPageData)->company_about_banner_image) }}"
                    style="display: block;" height="95vh" width="100%">
            </div>

            <div class="mt-3">
                Page Banner Image <input type="file" id="imageUpload" name="company_about_banner_image"
                    accept="image/*" onchange="previewImage(event)">
            </div>

        </form>
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

@include('template.DashBoard.Admin.0_Admin_Bottom')
