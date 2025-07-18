

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
  <header class="header navbar navbar-expand-sm">

      <ul class="navbar-item theme-brand flex-row  text-center">
          <li class="nav-item theme-logo">
             
                <a href="index.html" class="nav-link text-white"> BLOG MINIMAL </a>
              
          </li>
          <li class="nav-item theme-text">
              
          </li>
      </ul>

      <ul class="navbar-item flex-row ml-md-auto">


          <li class="nav-item dropdown notification-dropdown">
              <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
              </a>
              <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                  <div class="notification-scroll">

                      <div class="dropdown-item">
                          <div class="media server-log">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                              <div class="media-body">
                                  <div class="data-info">
                                      <h6 class="">Server Rebooted</h6>
                                      <p class="">45 min ago</p>
                                  </div>

                                  <div class="icon-status">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="dropdown-item">
                          <div class="media ">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                              <div class="media-body">
                                  <div class="data-info">
                                      <h6 class="">Licence Expiring Soon</h6>
                                      <p class="">8 hrs ago</p>
                                  </div>

                                  <div class="icon-status">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="dropdown-item">
                          <div class="media file-upload">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                              <div class="media-body">
                                  <div class="data-info">
                                      <h6 class="">Kelly Portfolio.pdf</h6>
                                      <p class="">670 kb</p>
                                  </div>

                                  <div class="icon-status">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </li>

          <li class="nav-item dropdown user-profile-dropdown">
              <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img src="{{ asset('storage/' .$user->imagen)}}" alt="Imagen" width="25" class="img-fluid">
              </a>
              <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                  <div class="">
                      <div class="dropdown-item">
                          <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                      </div>
                      <div class="dropdown-item">
                          <a class="" href="{{ url('admin/logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Cerrar sesión</a>
                      </div>
                  </div>
              </div>
          </li>

      </ul>
  </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN NAVBAR  -->
<div class="sub-header-container mt-2">
  <header class="header navbar navbar-expand-sm">
      <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

      <ul class="navbar-nav flex-row">
        <li>
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @foreach($breadcrumbs as $key => $breadcrumb)
                            <li class="breadcrumb-item {{ $key === array_key_last($breadcrumbs) ? 'active' : '' }}">
                                @if($key === array_key_last($breadcrumbs))
                                    <span>{{ $breadcrumb }}</span>
                                @else
                                    <a href="{{ url('admin/dashboard') }}">{{ $breadcrumb }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </li>
    </ul>
    
    
      <ul class="navbar-nav flex-row ml-auto ">
          <li class="nav-item more-dropdown">
              <div class="dropdown  custom-dropdown-icon">
                  <a class="dropdown-toggle btn" href="javascript:void(0)" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Ajustes</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                      <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Ajustes</a>
                      <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                      <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                      <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                      <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                  </div>
              </div>
          </li>
      </ul>
  </header>
</div>
<!--  END NAVBAR  -->