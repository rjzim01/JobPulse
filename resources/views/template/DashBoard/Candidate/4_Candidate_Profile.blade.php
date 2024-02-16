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

        <!-- Modal -->
        <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel">Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Basic Demographic Information Information Section -->
                        @include('template.DashBoard.Candidate.Modal.1_basic')
            
                        <!-- Educational Information Section -->
                        @include('template.DashBoard.Candidate.Modal.2_education')

                        <!-- Professional Trainings(if any) -->
                        @include('template.DashBoard.Candidate.Modal.3_training')

                        <!-- Job Experiences (if any) -->
                        @include('template.DashBoard.Candidate.Modal.4_job')

                        <!-- Skills (add skills by comma) -->
                        @include('template.DashBoard.Candidate.Modal.5_skill')
                        
                        <!-- Extra Information -->
                        @include('template.DashBoard.Candidate.Modal.6_extra')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header bg-secondary text-white">
                Candidate Details
            </div>
            <div class="card-body">
                <form action="{{ route('ProfileCandidateStore') }}" method="post">
                    @csrf

                    <!-- Preview and save button -->
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <button type="button" class="btn btn-success mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#previewModal">Preview</button>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mt-2 mb-2 ps-4 pe-4">Save</button>
                        </div>
                    </div>
                    
                    <div class="border p-3">
                        <!-- Basic Demographic Information Information Section -->
                        @include('template.DashBoard.Candidate.Profile.1_basic')
            
                        <!-- Educational Information Section -->
                        @include('template.DashBoard.Candidate.Profile.2_education')

                        <!-- Professional Trainings(if any) -->
                        @include('template.DashBoard.Candidate.Profile.3_training')

                        <!-- Job Experiences (if any) -->
                        @include('template.DashBoard.Candidate.Profile.4_job')

                        <!-- Skills (add skills by comma) -->
                        @include('template.DashBoard.Candidate.Profile.5_skill')
                        
                        <!-- Extra Information -->
                        @include('template.DashBoard.Candidate.Profile.6_extra')
            
                    </div>
                    
                </form>
            </div>
        </div>
        
    </main>

@include('template.DashBoard.Candidate.0_Candidate_Bottom')