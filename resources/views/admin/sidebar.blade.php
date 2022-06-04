      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
    {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#"> --}}
           
            <div class="sidebar-brand-text mx-3">Profile</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>View My Profile</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLogo"
                aria-expanded="true" aria-controls="collapseLogo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Personal Data</span>
            </a>
            <div id="collapseLogo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.personal.index')}}">Personal Data</a>
                    <a class="collapse-item" href="{{route('admin.personal.create')}}">Add Data</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTitle"
                aria-expanded="true" aria-controls="collapseTitle">
                <i class="fas fa-fw fa-cog"></i>
                <span>Qualifications </span>
            </a>
            <div id="collapseTitle" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.qualification.index')}}">Show Qualifications</a>
                    <a class="collapse-item" href="{{route('admin.qualification.create')}}">Add Qualifications</a>
                </div>
            </div>
        </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVision"
                aria-expanded="true" aria-controls="collapseVision">
                <i class="fas fa-fw fa-cog"></i>
                <span>Experiance</span>
            </a>
            <div id="collapseVision" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.experiance.index')}}">Show Experiance</a>
                    <a class="collapse-item" href="{{route('admin.experiance.create')}}">Add Experiance</a>
                </div>
            </div>
        </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
                aria-expanded="true" aria-controls="collapseServices">
                <i class="fas fa-fw fa-cog"></i>
                <span>Skills</span>
            </a>
            <div id="collapseServices" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.skills.index')}}">Show skills</a>
                    <a class="collapse-item" href="{{route('admin.skills.create')}}">Edit skills</a>
                </div>
            </div>
        </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOurClients"
                aria-expanded="true" aria-controls="collapseOurClients">
                <i class="fas fa-fw fa-cog"></i>
                <span>Language</span>
            </a>
            <div id="collapseOurClients" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.language.index')}}">Show Language</a>
                    <a class="collapse-item" href="{{route('admin.language.create')}}">Add Language</a>
                </div>
            </div>
        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        
                                                                       
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

