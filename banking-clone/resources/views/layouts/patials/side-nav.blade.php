<!-- Sidebar -->
<nav class="navbar-vertical navbar navbar-dark">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/brand/logo/logo-inverse.svg') }}" alt="">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link  " href="#" data-bs-toggle="collapse" data-bs-target="#navDashboard"
                    aria-expanded="false" aria-controls="navDashboard">
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>
                <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link  active " href="admin-dashboard.html">
                                Overview
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item ">
                            <a class="nav-link " href="dashboard-analytics.html">
                                Analytics

                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCourses"
                    aria-expanded="false" aria-controls="navCourses">
                    <i class="nav-icon fe fe-book me-2"></i> Courses
                </a>
                <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="admin-course-overview.html">
                                All Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-course-category.html">
                                Courses Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-course-category-single.html">
                                Category Single
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navProfile"
                    aria-expanded="false" aria-controls="navProfile">
                    <i class="nav-icon fe fe-user me-2"></i> User
                </a>
                <div id="navProfile" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="admin-instructor.html">
                                Instructor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-students.html">Students</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Nav item -->
            <li class="nav-item ">
                <a class="nav-link   collapsed  " href="#" data-bs-toggle="collapse" data-bs-target="#navCMS"
                    aria-expanded="false" aria-controls="navCMS">
                    <i class="nav-icon fe fe-book-open me-2"></i> CMS
                </a>
                <div id="navCMS" class="collapse  " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link   active  " href="admin-cms-overview.html">
                                Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="admin-cms-post.html">
                                All Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-cms-post-new.html">
                                New Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-cms-post-category.html">
                                Category
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item ">
                <a class="nav-link   collapsed  " href="#" data-bs-toggle="collapse" data-bs-target="#navProject"
                    aria-expanded="false" aria-controls="navProject">
                    <i class="nav-icon fe fe-file me-2"></i> Project
                </a>
                <div id="navProject" class="collapse  " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link   " href="project-grid.html">
                                Grid
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="project-list.html">
                                List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link   collapsed  " href="#" data-bs-toggle="collapse"
                                data-bs-target="#navprojectSingle" aria-expanded="false"
                                aria-controls="navprojectSingle">

                                Single
                            </a>
                            <div id="navprojectSingle" class="collapse " data-bs-parent="#navProject">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link  active " href="project-overview.html">
                                            Overview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-task.html">
                                            Task
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-budget.html">
                                            Budget
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-team.html">
                                            Team
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-files.html">
                                            Files
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-summary.html">
                                            Summary
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="add-project.html">
                                Create Project
                            </a>
                        </li>









                    </ul>
                </div>
            </li>







        </ul>
        <!-- Card -->
        <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
            <div class="card-body py-6">
                <img src="{{ asset('assets/images/background/giftbox.png') }}" alt="">
                <div class="mt-4">
                    <h5 class="text-white">Unlimited Access</h5>
                    <p class="text-white-50 fs-6">
                        Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
                    </p>
                    <a href="#" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                </div>
            </div>
        </div>
    </div>
</nav>
