<div class="mb-3">
    <h4 style="cursor: pointer" class="mb-3" data-bs-toggle="collapse" data-bs-target="#personalInformation3" aria-expanded="false" aria-controls="personalInformation3">Professional Trainings(if any)</h4>
    <div class="collapse border p-3" id="personalInformation3">

        <div class="row ms-3 me-3">
            <div class="row border p-1">
                <div class="row" data-bs-toggle="collapse" data-bs-target="#personalInformation31" aria-expanded="false" aria-controls="personalInformation31">
                    <div class="col-md-4">
                        <label class="form-label">Training Name</label>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Inistitutaion Name</label>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Completion Year</label>
                    </div>
                </div>
                <div class="row collapse" id="personalInformation31">
                    <div class="col-md-4">
                        <input type="text" name="traningTitle1" value="{{ optional($trainingData)->traningTitle1 }}" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="instituteName1" value="{{ optional($trainingData)->instituteName1 }}" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="year1" value="{{ optional($trainingData)->year1 }}" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="row ms-3 me-3">
            <div class="row border p-1">
                <div class="row" data-bs-toggle="collapse" data-bs-target="#personalInformation32" aria-expanded="false" aria-controls="personalInformation32">
                    <div class="col-md-4">
                        <label class="form-label">Training Name</label>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Inistitutaion Name</label>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Completion Year</label>
                    </div>
                </div>
                <div class="row collapse" id="personalInformation32">
                    <div class="col-md-4">
                        <input type="text" name="traningTitle2" value="{{ optional($trainingData)->traningTitle2 }}" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="instituteName2" value="{{ optional($trainingData)->instituteName2 }}" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="year2" value="{{ optional($trainingData)->year2 }}" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="row ms-3 me-3">
            <div class="row border p-1">
                <div class="row" data-bs-toggle="collapse" data-bs-target="#personalInformation33" aria-expanded="false" aria-controls="personalInformation33">
                    <div class="col-md-4">
                        <label class="form-label">Training Name</label>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Inistitutaion Name</label>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Completion Year</label>
                    </div>
                </div>
                <div class="row collapse" id="personalInformation33">
                    <div class="col-md-4">
                        <input type="text" name="traningTitle3" value="{{ optional($trainingData)->traningTitle3 }}" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="instituteName3" value="{{ optional($trainingData)->instituteName3 }}" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="year3" value="{{ optional($trainingData)->year3 }}" class="form-control">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>