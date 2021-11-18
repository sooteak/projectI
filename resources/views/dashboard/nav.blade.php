<nav class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start position-absolute ms-3 bg-secondary" id="sidenav-main">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  active" href="/dashboard">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="../../icon/dashboard.png" width="16px" height="16px">
                    </div>
                    <span class="nav-link-text ms-2 " >Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="/admins">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="../../icon/user.png" width="16px" height="16px">
                    </div>
                    <span class="nav-link-text ms-2 text-light">Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="/clubs">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="../../icon/club.png" width="16px" height="16px">
                    </div>
                    <span class="nav-link-text ms-2 text-light">Clubs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="/faculties">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="../../icon/graduation-hat.png" width="16px" height="16px">
                    </div>
                    <span class="nav-link-text ms-2 text-light">Faculty</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="/courses">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <img src="../../icon/online-course.png" width="16px" height="16px">
                    </div>
                    <span class="nav-link-text ms-2 text-light">Course</span>
                </a>
            </li>


        </ul>
    </div>
</nav>
<div class="main-content" id="panel">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl bg-secondary" id="navbarTop">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" >Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" >Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">
                                @if (Auth::guard('admin')->check())
                                    <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                                @endif
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid pt-3"></div>
