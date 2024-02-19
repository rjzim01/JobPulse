@include('template.Page.0_top')

<style>
  #home1 {
    background: url("upload/homeBanner/{{ optional($homePageData)->bg_img ? $homePageData->bg_img : 'defaultHome.jpg' }}") top center;
  }

  @media (min-width: 1024px) {
    #home1 {
      background-attachment: fixed;
    }
  }
</style>

<section id="home1" class="d-flex justify-content-center align-items-center">
  <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
    <h1>{{ $homePageData->title ?? '' }},<br>Find Your Dream Job</h1>
    <h2>{{ $homePageData->sub_title ?? '' }}</h2>

    @if (Auth::user())
    @if (Auth::user()->role === 'admin' )
    <a class="btn-get-started" href="#">
      <span>Get Started</span>
    </a>
    @else
    <a class="btn-get-started" href="#">
      <span>Get Started</span>
    </a>
    @endif
    @else
    <a href="#" class="btn-get-started">Get Started</a>
    @endif
  </div>
</section>

<main id="main">

  <section id="companie" class="companie">

    <div class="container" data-aos="fade-up">
      <div class="row">

        <div class="content">
          <h3 style="padding: 5px 0px 5px 0px; text-align: center;">Top Companies</h3>
        </div>

        <div class="content" style="padding: 10px; background: rgb(235, 235, 235);">
          <div class="row">
            @foreach ($company as $index => $companies)
            @if($index < 6) <div class="col-md-2">
              <div class="d-flex justify-content-center align-items-center overflow-hidden">
                <img height="100px" width="100px"
                  src="{{ !empty($companies->logo) ? url('upload/companyLogo/' . $companies->logo) : url('upload/companyLogo/default_company_logo.svg') }}"
                  class="slide-from-left">
              </div>
          </div>
          @else
          @break
          @endif
          @endforeach
        </div>
      </div>

    </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <div class="container" data-aos="fade-up">

      <div class="text-center">
        <h3>Recent Published Jobs</h3>
      </div>

      {{-- -------------- --}}

      <div class="container">
        <div class="row m-3 justify-content-center text-center">
          <div id="all_Job_Btn" class="col-md-2 py-3 border" style="background: rgb(255, 255, 255); cursor :pointer;">
            All ({{ $jobsAll }})</div>
          <div id="developers_Job_Btn" class="col-md-2 py-3 border"
            style="background: rgb(235, 235, 235); cursor :pointer;">Developers ({{ $developerJob }})</div>
          <div id="designers_Job_Btn" class="col-md-2 py-3 border"
            style="background: rgb(235, 235, 235); cursor :pointer;">Designers ({{ $designerJob }})</div>
          <div id="marketers_Job_Btn" class="col-md-2 py-3 border"
            style="background: rgb(235, 235, 235); cursor :pointer;">Marketers ({{ $marketingJob }})</div>
          <div id="uiux_Job_Btn" class="col-md-2 py-3 border" style="background: rgb(235, 235, 235); cursor :pointer;">
            UI/UX ({{ $uiuxJob }})</div>
          <div id="others_Job_Btn" class="col-md-2 py-3 border"
            style="background: rgb(235, 235, 235); cursor :pointer;">Others ({{ $otherJob }})</div>
        </div>
      </div>

      {{-- ---All--- --}}

      <div id="all_Job_Section" class="m-3 p-3 border"
        style="background: rgb(235, 235, 235); display: block; min-height: 800px;">

        <div class="search-box m-3 text-end">
          <input type="text" placeholder="Search Jobs">
        </div>

        @foreach ($jobs as $job)

        <div class="row m-3 p-4 border" style="background: rgb(255, 255, 255)">

          <div class="col-5">
            <div class="row">
              <div class="col-5 font-weight-bold">{{ $job->title }}</div>
              <div class="col-3 ms-2 me-1 mb-1" style="background: rgb(235, 235, 235);">{{ $job->type ?? 'Unknown' }}
              </div>
              <div class="col-3 mb-1" style="background: rgb(235, 235, 235);">{{ $job->company->name ?? 'Unknown' }}
              </div>
            </div>
            <div class="row">
              <div class="col-2" style="background: rgb(235, 235, 235);">sql</div>
              <div class="col-3 ms-1 me-1" style="background: rgb(235, 235, 235);">Javascript</div>
              <div class="col-3 me-1" style="background: rgb(235, 235, 235);">Vue</div>
              <div class="col-3" style="background: rgb(235, 235, 235);">React</div>
            </div>
          </div>

          <div class="col-7 justify-content-end text-end">
            @if (Auth::check())
            @if (Auth::user()->roll === 'Candidate')
            @if (Auth::user()->jobs->contains('id', $job->id))
            <div>Applied</div>
            @else
            <div><a href="{{ route('ApplyJob', ['id' => $job->id]) }}">Apply</a></div>
            @endif
            @else
            <div>Only Candidate can Apply</div>
            @endif
            @else
            <div><a href="{{ route('login') }}">Sign in to Apply</a></div>
            @endif
            <div>1000$</div>
          </div>

        </div>

        @endforeach

        <div class="d-flex justify-content-center">
          <a href="{{ route('JobPage') }}" rel="noopener noreferrer" class="bg-light p-3"> View More</a>
        </div>

        <div class="d-flex justify-content-end">
          {{ $jobs->links() }}
        </div>

      </div>

      {{-- ---------- --}}

      {{-- Developers --}}

      <div id="developers_Job_Section" class="m-3 p-3 border"
        style="background: rgb(235, 235, 235); display: none; min-height: 800px;">

        <div class="search-box m-3 text-end">
          <input type="text" placeholder="Search Jobs">
        </div>

        @foreach ($developerJobShow as $job)

        <div class="row m-3 p-4 border" style="background: rgb(255, 255, 255);">

          <div class="col-5">
            <div class="row">
              <div class="col-5 font-weight-bold">{{ $job->title }}</div>
              <div class="col-3 ms-2 me-1 mb-1" style="background: rgb(235, 235, 235);">{{ $job->type ?? 'Unknown' }}
              </div>
              <div class="col-3 mb-1" style="background: rgb(235, 235, 235);">{{ $job->company->name ?? 'Unknown' }}
              </div>
            </div>
            <div class="row">
              <div class="col-2" style="background: rgb(235, 235, 235);">sql</div>
              <div class="col-3 ms-1 me-1" style="background: rgb(235, 235, 235);">Javascript</div>
              <div class="col-3 me-1" style="background: rgb(235, 235, 235);">Vue</div>
              <div class="col-3" style="background: rgb(235, 235, 235);">React</div>
            </div>
          </div>

          <div class="col-7 justify-content-end text-end">
            @if (Auth::check())
            @if (Auth::user()->roll === 'Candidate')
            @if (Auth::user()->jobs->contains('id', $job->id))
            <div>Applied</div>
            @else
            <div><a href="{{ route('ApplyJob', ['id' => $job->id]) }}">Apply</a></div>
            @endif
            @else
            <div>Only Candidate can Apply</div>
            @endif
            @else
            <div><a href="{{ route('login') }}">Sign in to Apply</a></div>
            @endif
            <div>1000$</div>
          </div>
        </div>

        @endforeach

        <div class="d-flex justify-content-center">
          <a href="{{ route('JobPage') }}" rel="noopener noreferrer" class="bg-light p-3"> View More</a>
        </div>

        <div class="d-flex justify-content-end">
          {{ $developerJobShow->links() }}
        </div>

      </div>

      {{-- ---------- --}}

      {{-- Designers --}}

      <div id="designers_Job_Section" class="m-3 p-3 border"
        style="background: rgb(235, 235, 235); display: none; min-height: 800px;">

        <div class="search-box m-3 text-end">
          <input type="text" placeholder="Search Jobs">
        </div>

        @foreach ($designerJobShow as $job)

        <div class="row m-3 p-4 border" style="background: rgb(255, 255, 255);">

          <div class="col-5">
            <div class="row">
              <div class="col-5 font-weight-bold">{{ $job->title }}</div>
              <div class="col-3 ms-2 me-1 mb-1" style="background: rgb(235, 235, 235);">{{ $job->type ?? 'Unknown' }}
              </div>
              <div class="col-3 mb-1" style="background: rgb(235, 235, 235);">{{ $job->company->name ?? 'Unknown' }}
              </div>
            </div>
            <div class="row">
              <div class="col-2" style="background: rgb(235, 235, 235);">sql</div>
              <div class="col-3 ms-1 me-1" style="background: rgb(235, 235, 235);">Javascript</div>
              <div class="col-3 me-1" style="background: rgb(235, 235, 235);">Vue</div>
              <div class="col-3" style="background: rgb(235, 235, 235);">React</div>
            </div>
          </div>

          <div class="col-7 justify-content-end text-end">
            @if (Auth::check())
            @if (Auth::user()->roll === 'Candidate')
            @if (Auth::user()->jobs->contains('id', $job->id))
            <div>Applied</div>
            @else
            <div><a href="{{ route('ApplyJob', ['id' => $job->id]) }}">Apply</a></div>
            @endif
            @else
            <div>Only Candidate can Apply</div>
            @endif
            @else
            <div><a href="{{ route('login') }}">Sign in to Apply</a></div>
            @endif
            <div>1000$</div>
          </div>
        </div>

        @endforeach

        <div class="d-flex justify-content-center">
          <a href="{{ route('JobPage') }}" rel="noopener noreferrer" class="bg-light p-3"> View More</a>
        </div>

        <div class="d-flex justify-content-end">
          {{ $designerJobShow->links() }}
        </div>

      </div>

      {{-- ---------- --}}

      {{-- Marketers --}}

      <div id="marketers_Job_Section" class="m-3 p-3 border"
        style="background: rgb(235, 235, 235); display: none; min-height: 800px;">

        <div class="search-box m-3 text-end">
          <input type="text" placeholder="Search Jobs">
        </div>

        @foreach ($marketingJobShow as $job)

        <div class="row m-3 p-4 border" style="background: rgb(255, 255, 255);">

          <div class="col-5">
            <div class="row">
              <div class="col-5 font-weight-bold">{{ $job->title }}</div>
              <div class="col-3 ms-2 me-1 mb-1" style="background: rgb(235, 235, 235);">{{ $job->type ?? 'Unknown' }}
              </div>
              <div class="col-3 mb-1" style="background: rgb(235, 235, 235);">{{ $job->company->name ?? 'Unknown' }}
              </div>
            </div>
            <div class="row">
              <div class="col-2" style="background: rgb(235, 235, 235);">sql</div>
              <div class="col-3 ms-1 me-1" style="background: rgb(235, 235, 235);">Javascript</div>
              <div class="col-3 me-1" style="background: rgb(235, 235, 235);">Vue</div>
              <div class="col-3" style="background: rgb(235, 235, 235);">React</div>
            </div>
          </div>

          <div class="col-7 justify-content-end text-end">
            @if (Auth::check())
            @if (Auth::user()->roll === 'Candidate')
            @if (Auth::user()->jobs->contains('id', $job->id))
            <div>Applied</div>
            @else
            <div><a href="{{ route('ApplyJob', ['id' => $job->id]) }}">Apply</a></div>
            @endif
            @else
            <div>Only Candidate can Apply</div>
            @endif
            @else
            <div><a href="{{ route('login') }}">Sign in to Apply</a></div>
            @endif
            <div>1000$</div>
          </div>
        </div>

        @endforeach

        <div class="d-flex justify-content-center">
          <a href="{{ route('JobPage') }}" rel="noopener noreferrer" class="bg-light p-3"> View More</a>
        </div>

        <div class="d-flex justify-content-end">
          {{ $marketingJobShow->links() }}
        </div>

      </div>

      {{-- ---------- --}}

      {{-- UI/UX --}}

      <div id="uiux_Job_Section" class="m-3 p-3 border"
        style="background: rgb(235, 235, 235); display: none; min-height: 800px;">

        <div class="search-box m-3 text-end">
          <input type="text" placeholder="Search Jobs">
        </div>

        @foreach ($uiuxJobShow as $job)

        <div class="row m-3 p-4 border" style="background: rgb(255, 255, 255);">

          <div class="col-5">
            <div class="row">
              <div class="col-5 font-weight-bold">{{ $job->title }}</div>
              <div class="col-3 ms-2 me-1 mb-1" style="background: rgb(235, 235, 235);">{{ $job->type ?? 'Unknown' }}
              </div>
              <div class="col-3 mb-1" style="background: rgb(235, 235, 235);">{{ $job->company->name ?? 'Unknown' }}
              </div>
            </div>
            <div class="row">
              <div class="col-2" style="background: rgb(235, 235, 235);">sql</div>
              <div class="col-3 ms-1 me-1" style="background: rgb(235, 235, 235);">Javascript</div>
              <div class="col-3 me-1" style="background: rgb(235, 235, 235);">Vue</div>
              <div class="col-3" style="background: rgb(235, 235, 235);">React</div>
            </div>
          </div>

          <div class="col-7 justify-content-end text-end">
            @if (Auth::check())
            @if (Auth::user()->roll === 'Candidate')
            @if (Auth::user()->jobs->contains('id', $job->id))
            <div>Applied</div>
            @else
            <div><a href="{{ route('ApplyJob', ['id' => $job->id]) }}">Apply</a></div>
            @endif
            @else
            <div>Only Candidate can Apply</div>
            @endif
            @else
            <div><a href="{{ route('login') }}">Sign in to Apply</a></div>
            @endif
            <div>1000$</div>
          </div>
        </div>

        @endforeach

        <div class="d-flex justify-content-center">
          <a href="{{ route('JobPage') }}" rel="noopener noreferrer" class="bg-light p-3"> View More</a>
        </div>

        <div class="d-flex justify-content-end">
          {{ $uiuxJobShow->links() }}
        </div>

      </div>

      {{-- ---------- --}}

      {{-- Others --}}

      <div id="others_Job_Section" class="m-3 p-3 border"
        style="background: rgb(235, 235, 235); display: none; min-height: 800px;">

        <div class="search-box m-3 text-end">
          <input type="text" placeholder="Search Jobs">
        </div>

        @foreach ($otherJobShow as $job)

        <div class="row m-3 p-4 border" style="background: rgb(255, 255, 255);">

          <div class="col-5">
            <div class="row">
              <div class="col-5 font-weight-bold">{{ $job->title }}</div>
              <div class="col-3 ms-2 me-1 mb-1" style="background: rgb(235, 235, 235);">{{ $job->type ?? 'Unknown' }}
              </div>
              <div class="col-3 mb-1" style="background: rgb(235, 235, 235);">{{ $job->company->name ?? 'Unknown' }}
              </div>
            </div>
            <div class="row">
              <div class="col-2" style="background: rgb(235, 235, 235);">sql</div>
              <div class="col-3 ms-1 me-1" style="background: rgb(235, 235, 235);">Javascript</div>
              <div class="col-3 me-1" style="background: rgb(235, 235, 235);">Vue</div>
              <div class="col-3" style="background: rgb(235, 235, 235);">React</div>
            </div>
          </div>

          <div class="col-7 justify-content-end text-end">
            @if (Auth::check())
            @if (Auth::user()->roll === 'Candidate')
            @if (Auth::user()->jobs->contains('id', $job->id))
            <div>Applied</div>
            @else
            <div><a href="{{ route('ApplyJob', ['id' => $job->id]) }}">Apply</a></div>
            @endif
            @else
            <div>Only Candidate can Apply</div>
            @endif
            @else
            <div><a href="{{ route('login') }}">Sign in to Apply</a></div>
            @endif
            <div>1000$</div>
          </div>
        </div>

        @endforeach

        <div class="d-flex justify-content-center">
          <a href="{{ route('JobPage') }}" rel="noopener noreferrer" class="bg-light p-3"> View More</a>
        </div>

        <div class="d-flex justify-content-end">
          {{ $otherJobShow->links() }}
        </div>

      </div>

      {{-- ---------- --}}

      {{-- ---------------- --}}

    </div>

  </section>

</main>

<script>

  function toggleJobSection(sectionId, buttonId) {
    // Hide all job sections
    document.getElementById("all_Job_Section").style.display = 'none';
    document.getElementById("developers_Job_Section").style.display = 'none';
    document.getElementById("designers_Job_Section").style.display = 'none';
    document.getElementById("marketers_Job_Section").style.display = 'none';
    document.getElementById("uiux_Job_Section").style.display = 'none';
    document.getElementById("others_Job_Section").style.display = 'none';

    // Show the selected job section
    document.getElementById(sectionId).style.display = 'block';

    // Reset background color of all buttons
    document.getElementById("all_Job_Btn").style.backgroundColor = 'rgb(235, 235, 235)';
    document.getElementById("developers_Job_Btn").style.backgroundColor = 'rgb(235, 235, 235)';
    document.getElementById("designers_Job_Btn").style.backgroundColor = 'rgb(235, 235, 235)';
    document.getElementById("marketers_Job_Btn").style.backgroundColor = 'rgb(235, 235, 235)';
    document.getElementById("uiux_Job_Btn").style.backgroundColor = 'rgb(235, 235, 235)';
    document.getElementById("others_Job_Btn").style.backgroundColor = 'rgb(235, 235, 235)';

    // Change background color of the clicked button
    document.getElementById(buttonId).style.backgroundColor = 'rgb(255, 255, 255)';
  }

  // Add event listeners for each button
  document.getElementById("all_Job_Btn").addEventListener("click", function () {
    toggleJobSection("all_Job_Section", "all_Job_Btn");
  });

  document.getElementById("developers_Job_Btn").addEventListener("click", function () {
    toggleJobSection("developers_Job_Section", "developers_Job_Btn");
  });

  document.getElementById("designers_Job_Btn").addEventListener("click", function () {
    toggleJobSection("designers_Job_Section", "designers_Job_Btn");
  });

  document.getElementById("marketers_Job_Btn").addEventListener("click", function () {
    toggleJobSection("marketers_Job_Section", "marketers_Job_Btn");
  });

  document.getElementById("uiux_Job_Btn").addEventListener("click", function () {
    toggleJobSection("uiux_Job_Section", "uiux_Job_Btn");
  });

  document.getElementById("others_Job_Btn").addEventListener("click", function () {
    toggleJobSection("others_Job_Section", "others_Job_Btn");
  });

  //////////////////////////////////////////////////////////////////////////////////////


</script>

@include('template.Page.0_bottom')