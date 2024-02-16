<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('AdminDashboard') }}">
          <i class="bi bi-book-half"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('AdminCompanies') }}">
          <i class="bi bi-pencil-square"></i>
          <span>Companies</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('AdminJobs') }}">
          <i class="bi bi-people"></i>
          <span>Jobs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('AdminRollPermission') }}">
          <i class="bi bi-people"></i>
          <span>User Permission</span>
        </a>
      </li>
      
      <li class="nav-item" id="side_bar_blog" style="display: block;">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-pencil-square"></i>
          <span>Blogs</span>
        </a>
      </li>

      <li class="nav-item" id="side_bar_employee" style="display: block;">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-pencil-square"></i>
          <span>Employee</span>
        </a>
      </li>

      <!-- Start Pages Nav -->
      <li class="nav-item"id="side_bar_pages" style="display: block;">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('HomePageAdmin') }}">
              <i class="bi bi-circle"></i><span>Home Page</span>
            </a>
          </li>
          <li>
            <a href="{{ route('AboutPageAdmin') }}">
              <i class="bi bi-circle"></i><span>About Page</span>
            </a>
          </li>
          <li>
            <a href="{{ route('JobsPageAdmin') }}">
              <i class="bi bi-circle"></i><span>Jobs Page</span>
            </a>
          </li>
          <li>
            <a href="{{ route('BlogPageAdmin') }}">
              <i class="bi bi-circle"></i><span>Blog Page</span>
            </a>
          </li>
          <li>
            <a href="{{ route('ContactPageAdmin') }}">
              <i class="bi bi-circle"></i><span>Contact Page</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Pages Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('AdminPlugin') }}">
          <i class="bi bi-pencil-square"></i>
          <span>Plugins</span>
        </a>
      </li>

    </ul>
  </aside>
  