<div class="mb-3">
    <h4 style="cursor: pointer" class="mb-3" data-bs-toggle="collapse" data-bs-target="#personalInformation6" aria-expanded="false" aria-controls="personalInformation6">Extra Information</h4>
    <div class="collapse border p-3" id="personalInformation6">

        <div class="row">
            <div class="col-md-2">
                <label class="form-label">Current Salary</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="currentSalary" value="{{ optional($experienceData)->currentSalary }}" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label class="form-label">Expected Salary</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="expectedSalary" value="{{ optional($experienceData)->expectedSalary }}" class="form-control">
            </div>
        </div>

    </div>
</div>