@include('template.DashBoard.Admin.0_Admin_Top')

  @include('template.DashBoard.Admin.0_Admin_Side')

  <main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
      <h1>Pages</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Blog Page</li>
          <li class="breadcrumb-item">Create</li>
        </ol>
      </nav>
    </div>

    <br>

    <div class="border p-3">
      <form action="{{ route('BlogPageStoreAdmin') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>

        <div class="form-group">
          <label>Blog Page Title</label>
          <input type="text" name="title" value="{{ optional($blogPageData)->title }}" class="form-control" style="width: 50%;">
        </div>
        
        <br>
        
        <div class="form-group">
          <label>Blog Sub Title</label>
          <input type="text" name="sub_title" value="{{ optional($blogPageData)->sub_title }}" class="form-control">
        </div>

        <br>

        <label>Blog Banner Image</label>
        <div class="content" style="text-align: center; margin:10px 0px 10px 0px; padding: 10px 10px 10px 10px; background: rgb(253, 253, 253); min-height: 100px;">
          <img id="imagePreview" src="{{ url('upload/blogBanner/' . optional($blogPageData)->bg_img)  }}" style="display: block;" height="95vh" width="100%">
        </div>

        <div class="mt-3">
          Page Banner Image <input type="file" id="imageUpload" name="bg_img" accept="image/*" onchange="previewImage(event)">
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