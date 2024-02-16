<div class="mb-3">
    <h4 style="cursor: pointer" class="mb-3" data-bs-toggle="collapse" data-bs-target="#personalInformation2" aria-expanded="false" aria-controls="personalInformation2">Educational Information</h4>
    <div class="collapse border p-3" id="personalInformation2">

        <div class="row ms-3 me-3">
            <label class="form-label">Bachelor/Hons</label>
            <div class="row border p-1">
                <div class="row" data-bs-toggle="collapse" data-bs-target="#personalInformation21" aria-expanded="false" aria-controls="personalInformation21">
                    <div class="col-md-2">
                        <label class="form-label">Degree Type</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Univeristy Name</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Department</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Passing Year</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">CGPA</label>
                    </div>
                </div>
                <div class="row collapse" id="personalInformation21">
                    <div class="col-md-2">
                        <input type="text" name="versityDegree" value="{{ optional($profileEducationData)->versityDegree }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="versityInstitute" value="{{ optional($profileEducationData)->versityInstitute }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="versityDepartment" value="{{ optional($profileEducationData)->versityDepartment }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="versityYear" value="{{ optional($profileEducationData)->versityYear }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="versityResult" value="{{ optional($profileEducationData)->versityResult }}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-1 ms-3 me-3">
            <label class="form-label">HSC</label>
            <div class="row border p-1">
                <div class="row" data-bs-toggle="collapse" data-bs-target="#personalInformation22" aria-expanded="false" aria-controls="personalInformation22">
                    <div class="col-md-2">
                        <label class="form-label">Degree Type</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">College Name</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Group</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Passing Year</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">GPA</label>
                    </div>
                </div>
                <div class="row collapse" id="personalInformation22">
                    <div class="col-md-2">
                        <input type="text" name="hscDegree" value="{{ optional($profileEducationData)->hscDegree }}"  class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscInstitute" value="{{ optional($profileEducationData)->hscInstitute }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscDepartment" value="{{ optional($profileEducationData)->hscDepartment }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscYear" value="{{ optional($profileEducationData)->hscYear }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscResult" value="{{ optional($profileEducationData)->hscResult }}" class="form-control">
                    </div>
                </div>
            </div>
        </div> 
       
        
        <div class="row mt-1 ms-3 me-3">
            <label class="form-label">SSC</label>
            <div class="row border p-1">
                <div class="row" data-bs-toggle="collapse" data-bs-target="#personalInformation23" aria-expanded="false" aria-controls="personalInformation23">
                    <div class="col-md-2">
                        <label class="form-label">Degree Type</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">School Name</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Group</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Passing Year</label>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">GPA</label>
                    </div>
                </div>
                <div class="row collapse" id="personalInformation23">
                    <div class="col-md-2">
                        <input type="text" name="sscDegree" value="{{ optional($profileEducationData)->sscDegree }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscInstitute" value="{{ optional($profileEducationData)->sscInstitute }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscDepartment" value="{{ optional($profileEducationData)->sscDepartment }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscYear" value="{{ optional($profileEducationData)->sscYear }}" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscResult" value="{{ optional($profileEducationData)->sscResult }}" class="form-control">
                    </div>
                </div>
            </div>
        </div> 
       

    </div>
</div>