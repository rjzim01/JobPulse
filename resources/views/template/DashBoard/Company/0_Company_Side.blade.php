<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('CompanyDashboard') }}">
        <i class="bi bi-book-half"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-heading">Pages</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('CompanyInfo') }}">
        <i class="bi bi-pencil-square"></i>
        <span>Company Information</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('CompanyJobsShow') }}">
        <i class="bi bi-pencil-square"></i>
        <span>Jobs</span>
      </a>
    </li>
    <li class="nav-item" id="side_bar_blog" style="display: block;">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-pencil-square"></i>
        <span>Blogs</span>
      </a>
    </li>
    @if(Auth::user()->roll === 'Company' || Auth::user()->roll === 'Company_Manager')
    <li class="nav-item" id="side_bar_employee" style="display: block;">
      <a class="nav-link collapsed" href="{{ route('CompanyEmployee') }}">
        <i class="bi bi-pencil-square"></i>
        <span>Employee</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('CompanyPlugin') }}">
        <i class="bi bi-pencil-square"></i>
        <span>Plugins</span>
      </a>
    </li>
  </ul>
</aside>
  