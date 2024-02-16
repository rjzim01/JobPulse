@include('template.DashBoard.Candidate.0_Candidate_Top')
@include('template.DashBoard.Candidate.0_Candidate_Side')
    
<main id="main" class="main" style="min-height: 610px">

    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
            </ol>
        </nav>
    </div>

    <br>

    <div class="card p-3">
        <div class="card-body p-3">
            <form action="{{ route('users-profile.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Preview and save button -->
                <div class="row" style="padding: 0px 0px 0px 0px;">
                    <div class="col-md-2 justify-content-end d-flex">
                        <img height="100px" width="100px" class="rounded-circle" id="imagePreview" src="{{ !empty($profileData->photo) ? url('upload/userProfile/' . $profileData->photo) : url('upload/person.svg') }}">
                    </div>
                    <div class="col-md-4" style="padding: 30px 40px 0px 40px;">
                        <input type="file" id="imageUpload" name="photo" accept="image/*" onchange="previewImage(event)">
                    </div>
                    <div class="col-md-6 justify-content-end d-flex" style="padding: 0px 0px 0px 0px;">
                        <button type="submit" class="btn btn-primary" style="margin: 30px 300px 30px 0px;">Save</button>
                    </div>
                </div>
                
                <div class="p-3">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">First Name</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control"  value="{{ optional($profileDetailData)->first_name }}" name="first_name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Last Name</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" value="{{ optional($profileDetailData)->last_name }}" name="last_name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" value="{{ optional($profileDetailData)->email }}" name="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Current Password</label>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="password" class="form-control" id="old_password" name="old_password">
                                <button type="button" class="btn btn-outline-secondary" id="toggle_old_password">
                                    <i id="eye_icon" class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">New Password</label>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="password" class="form-control" id="new_password" name="new_password">
                                <button type="button" class="btn btn-outline-secondary" id="toggle_new_password">
                                    <i id="new_eye_icon" class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Confirm Password</label>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                <button type="button" class="btn btn-outline-secondary" id="toggle_confirm_password">
                                    <i id="confirm_eye_icon" class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                
            </form>
        </div>

    </div>
    
</main>

<script>
    function togglePasswordVisibility(inputId, iconId) {
        var input = document.getElementById(inputId);
        var icon = document.getElementById(iconId);
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    }

    // Add event listener to the toggle button
    document.getElementById("toggle_old_password").addEventListener("click", function() {
        togglePasswordVisibility("old_password", "eye_icon");
    });

    document.getElementById("toggle_new_password").addEventListener("click", function() {
        togglePasswordVisibility("new_password", "new_eye_icon");
    });

    document.getElementById("toggle_confirm_password").addEventListener("click", function() {
        togglePasswordVisibility("confirm_password", "confirm_eye_icon");
    });

    ////////////////////////////////////////////////////////////////////////////////////////////
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