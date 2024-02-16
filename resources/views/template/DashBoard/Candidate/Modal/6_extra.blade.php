<div class="mb-3">
    <h4 class="mb-3">Extra Information</h4>
    <div class="border p-3">

        <div class="row">
            <div class="col-md-2">
                <label class="form-label">Current Salary</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="currentSalary" value="{{ optional($experienceData)->currentSalary }}" class="form-control" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label class="form-label">Expected Salary</label>
            </div>
            <div class="col-md-5">
                <input type="text" name="expectedSalary" value="{{ optional($experienceData)->expectedSalary }}" class="form-control" readonly>
            </div>
        </div>

    </div>
</div>