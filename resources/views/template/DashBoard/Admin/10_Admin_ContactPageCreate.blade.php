@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Pages</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Contact Page</li>
          <li class="breadcrumb-item">Create</li>
        </ol>
      </nav>
    </div>

    <br>

    <div class="border p-3">
      <form action="{{ route('ContactPageStoreAdmin') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>

        <div class="form-group">
          <label>Contact Page Title</label>
          <input type="text" name="title" value="{{ optional($contactPageData)->title }}" class="form-control" style="width: 50%;">
        </div>
        
        <br>
        
        <div class="form-group">
          <label for="aboutContent">Address</label>
          <input type="text" class="form-control" name="address" value="{{ optional($contactPageData)->address }}">
        </div>

        <br>

        <div class="form-group">
          <label for="aboutContent">Phone</label>
          <input type="text" class="form-control" name="phone" value="{{ optional($contactPageData)->phone }}">
        </div>

        <div class="form-group">
          <label for="aboutContent">Email</label>
          <input type="text" class="form-control" name="email" value="{{ optional($contactPageData)->email }}">
        </div>

        <br>

        <label>Contact Banner Image</label>
        <div class="content" style="text-align: center; margin:10px 0px 10px 0px; padding: 10px 10px 10px 10px; background: rgb(253, 253, 253); min-height: 100px;">
          <img id="imagePreview" src="{{ url('upload/contactBanner/' . optional($contactPageData)->background_image)  }}" style="display: block;" height="95vh" width="100%">
        </div>

        <div class="mt-3">
          Page Banner Image <input type="file" id="imageUpload" name="background_image" accept="image/*" onchange="previewImage(event)">
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