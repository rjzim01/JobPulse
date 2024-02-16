<div class="mb-3">
    <h4 class="mb-3">Educational Information</h4>
    <div class="border p-3">

        <div class="row ms-3 me-3">
            <label class="form-label">Bachelor/Hons</label>
            <div class="row border p-1">
                <div class="row">
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
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" value="{{ optional($profileEducationData)->versityDegree }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" value="{{ optional($profileEducationData)->versityInstitute }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" value="{{ optional($profileEducationData)->versityDepartment }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" value="{{ optional($profileEducationData)->versityYear }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" value="{{ optional($profileEducationData)->versityResult }}" class="form-control" readonly>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-1 ms-3 me-3">
            <label class="form-label">HSC</label>
            <div class="row border p-1">
                <div class="row">
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
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="hscDegree" value="{{ optional($profileEducationData)->hscDegree }}"  class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscInstitute" value="{{ optional($profileEducationData)->hscInstitute }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscDepartment" value="{{ optional($profileEducationData)->hscDepartment }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscYear" value="{{ optional($profileEducationData)->hscYear }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="hscResult" value="{{ optional($profileEducationData)->hscResult }}" class="form-control" readonly>
                    </div>
                </div>
            </div>
        </div> 
       
        
        <div class="row mt-1 ms-3 me-3">
            <label class="form-label">SSC</label>
            <div class="row border p-1">
                <div class="row">
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
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="sscDegree" value="{{ optional($profileEducationData)->sscDegree }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscInstitute" value="{{ optional($profileEducationData)->sscInstitute }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscDepartment" value="{{ optional($profileEducationData)->sscDepartment }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscYear" value="{{ optional($profileEducationData)->sscYear }}" class="form-control" readonly>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="sscResult" value="{{ optional($profileEducationData)->sscResult }}" class="form-control" readonly>
                    </div>
                </div>
            </div>
        </div> 
       

    </div>
</div>