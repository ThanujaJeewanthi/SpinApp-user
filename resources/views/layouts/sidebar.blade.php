<aside class="sidebar d-flex flex-column" style="  left: 0; height:auto; background-color: #282c30; color: #fff; ">
    {{-- <div class="sidebar-logo d-flex align-items-center justify-content-center">
        <img src="assets/images/samplelogod.png" alt="Logo" class="me-3" />
        <h2 class="d-none d-md-block">SpinApp</h2>

    {{-- <div class="sidebar-logo d-flex ">
        <img src="assets/images/samplelogod.png" alt="Logo" class="me-3" />
        <h2 class="d-none d-md-block">SpinApp</h2>
    </div> --}}
    <nav class="sidebar-menu flex-grow-1  mt-0" style="top:50px;">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <button id="sidebar-toggle" class="sidebar-toggle" style="margin-left: 10px;">
                <svg width="30" height="30" viewBox="0 0 100 100" class="hamburger-icon">
                    <rect class="line top" width="80" height="10" x="10" y="25" rx="5"></rect>
                    <rect class="line middle" width="80" height="10" x="10" y="45" rx="5"></rect>
                    <rect class="line bottom" width="80" height="10" x="10" y="65" rx="5"></rect>
                </svg>
            </button>
            @php
    $userRole = strtolower(Auth::user()->userRole->name ?? 'admin');
    $dashboardRoute = in_array($userRole, ['laundry', 'rider', 'client'])
        ? $userRole . '.dashboard'
        : 'admin.dashboard';
@endphp

<a href="{{ route($dashboardRoute) }}" class="dashboard-link mt-0">
    <h5>
        {{ ucfirst($userRole) }} Dashboard
    </h5>
</a>


        </div>


        {{-- <button >
            <i class="fas fa-tachometer-alt me-2 icon-only"></i>
            <span class="side-link"> Dashboard</span>
            <i class="fa fa-caret-down"></i>
        </button> --}}


        <a href="{{ route('dashboard') }}" class="dropdown-btn">
            <i class="fas fa-tachometer-alt me-2 icon-only"></i>
            <span class="side-link">Dashboard</span>
        </a>


        @php
            $categorizedPages = session('categorized_pages', []);
        @endphp



        {{-- @if (in_array('3', $categorizedPages)) --}}
        @if (array_key_exists(3, $categorizedPages))
            <button class="dropdown-btn">
                <i class="fas fa-key me-2 icon-only"></i>
                <span class="side-link">Permissions </span>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                {{-- <a href="{{route('admin.users.index')}}">Users</a> --}}
                <a href="{{ route('admin.roles.index') }}">User Roles</a>
                {{-- <a href="{{ route('admin.roles.create') }}">Create User Roles</a> --}}
            </div>
        @endif


        {{-- @if (in_array('2', $categorizedPages)) --}}
        @if (array_key_exists(2, $categorizedPages))
            <button class="dropdown-btn">
                <i class="fas fa-address-book me-2 icon-only"></i>
                <span class="side-link"> Pages</span>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="{{ route('admin.pages.index') }}">Pages</a>
                {{-- <a href="{{ route('admin.pages.create') }}">Create Pages</a> --}}
                <a href="{{ route('admin.page-categories.index') }}">Page Categories</a>
                {{-- <a href="{{ route('admin.page-categories.create') }}">Create Page Categories</a> --}}
            </div>
        @endif



        @if (array_key_exists(4, $categorizedPages))
            <button class="dropdown-btn">
                <i class="fas fa-user-tag me-2 icon-only"></i>
                <span class="side-link"> Users</span>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="{{ route('admin.users.index') }}">Users</a>
                {{-- <a href="{{ route('admin.users.create') }}">Create User</a> --}}

            </div>
        @endif


        {{-- <button class="dropdown-btn">
    <i class="fas fa-motorcycle me-2 icon-only"></i>
    <span class="side-link"> Jobs</span>

    <i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
</div>



<button class="dropdown-btn">
    <i class="fas fa-plus-circle me-2 icon-only"></i>
    <span class="side-link">Jobs</span>

    <i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
</div>


        <button class="dropdown-btn">
            <i class="fas fa-plus-circle me-2 icon-only"></i>
            <span class="side-link">Permission Management</span>

            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div> --}}

        <button class="dropdown-btn">

            <i class="fas fa-plus-circle me-2 icon-only"></i>
            <span class="side-link"> Link page 1</span>

            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>







        <button class="dropdown-btn">
            <i class="fa fa-bars icon-spacing"></i>
            <span class="side-link"> Link page 1</span>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>



        <button class="dropdown-btn">
            <i class="fa fa-cog icon-spacing"></i>
            <span class="side-link"> Link page 1</span>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div> <button class="dropdown-btn">
            <i class="fa fa-caret-down"></i>
            <span class="side-link"> Last Link page</span>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class=" icon-spacing"></i>Link 1</a>
            <a href="#"><i class=" icon-spacing"></i>Link 2</a>
            <a href="#"><i class=" icon-spacing"></i>Link 3</a>
        </div>


    </nav>

</aside>
