<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!--Admin Management Page -->
                            @if(Auth::user()->role=='admin')
                            <div class="sb-sidenav-menu-heading">Users Management</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#userCollapse" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="userCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('student.create')}}">Add Students</a>
                                    <a class="nav-link" href="{{route('student.index')}}">Manage Students</a>
                                    <a class="nav-link" href="{{route('teacher.create')}}">Add Teachers</a>
                                    <a class="nav-link" href="{{route('teacher.index')}}">Manage Teachers</a>
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading">Class Management</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#classesCollapse" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Classes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="classesCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('class.create')}}">Add Class</a>
                                    <a class="nav-link" href="{{route('class.index')}}">Manage Class</a> 
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Subject Management</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#subjectsCollapse" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Subjects
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="subjectsCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('junior_subject.create')}}">Add JSS Subjects</a>
                                    <a class="nav-link" href="{{route('junior_subject.index')}}">Manage JSS Subjects</a>
                                    <a class="nav-link" href="{{route('senior_subject.create')}}">Add SSS Subjects</a>
                                    <a class="nav-link" href="{{route('senior_subject.index')}}">Manage SSS Subjects</a>  
                                </nav>
                            </div>
                            @endif
                            <!--Admin Management Page -->
                            <div class="sb-sidenav-menu-heading">VIEW USERS</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#viewCollapse" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                                View Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="viewCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('view_students')}}">View Students</a>
                                    <a class="nav-link" href="{{route('view_teachers')}}">View Teachers</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">VIEW RESULTS</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#resultCollapse" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                View Results
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="resultCollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('add_results')}}">View Results</a>
                                </nav>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{Auth::user()->name}} {{Auth::user()->lastname}}
                    </div>
                </nav>
            </div>