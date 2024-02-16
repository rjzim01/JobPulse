<div class="mb-3">
    <h4 class="mb-3">Basic Demographic Information</h4>
    <div class="border p-3">

        <div class="row">

            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Full Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->full_name }}" name="full_name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Date of Birth</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->date_of_birth }}" name="date_of_birth">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Father Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->father_name }}" name="father_name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Mother Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->mother_name }}" name="mother_name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Blood Group</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->blood_group }}" name="blood_group">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Nid</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->nid }}" name="nid">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Passport</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->passport }}" name="passport">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Phone</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->phone }}" name="phone">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Email</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->email }}" name="email" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Phone 2</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->phone2 }}" name="phone2">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Whatsapp</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->whatsapp }}" name="whatsapp">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Facebook</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->facebook }}" name="facebook">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Github</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->github }}" name="github">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Linkedin</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->linkedin }}" name="linkedin">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Dribble</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->dribble }}" name="dribble">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Portfolio</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ optional($profileDetailData)->portfolio }}" name="portfolio">
                    </div>
                </div>

            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <img style="height: 100px; width: 100px;" class="rounded-circle" src="{{ !empty($profileData->photo) ? url('upload/userProfile/' . $profileData->photo) : url('upload/person.svg') }}">
            </div>

        </div>
        
    </div>
</div>