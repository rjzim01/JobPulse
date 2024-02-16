<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  @include('template.DashBoard.top')

</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Job Pulse</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
      {{-- <div class="ui" style="cursor: pointer; margin: 0px 0px 0px 15px;">Dark</div> --}}
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img class="rounded-circle" src="{{ !empty($profileData->photo) ? url('upload/userProfile/' . $profileData->photo) : url('upload/person.svg') }}" style="height: 30px; width: 30px;">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $profileData->name }}</span>
          </a>
          
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li class="dropdown-header">
              <h6>{{ $profileData->name }}</h6>
              <span>{{ $profileData->roll }}</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('AdminProfile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                  <a class="dropdown-item d-flex align-items-center" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                  </a>
              </form>
            </li>

          </ul>

        </li>

      </ul>
    </nav>

  </header>

