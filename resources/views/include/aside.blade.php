<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4"><img src="assets/img/team/profile-picture-3.jpg"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2><a href="sign-in"
                        class="btn btn-secondary btn-sm d-inline-flex align-items-center"><svg class="icon icon-xxs me-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg> Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none"><a href="#sidebarMenu" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                    aria-label="Toggle navigation"><svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></a></div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item"><a href="/" class="nav-link d-flex align-items-center"><span
                        class="sidebar-icon"><img class="avatar rounded-circle" alt="Image placeholder"
                            src="../../assets/img/team/profile-picture-3.jpg">
                    </span><span class="mt-1 sidebar-text">Admin</span></a></li>

            <li class="nav-item active"><a href="/" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-tachometer-alt-fast"></i> </span><span
                        class="sidebar-text">Dashboard</span></a>
            </li>



            {{-- home start --}}
            <li class="nav-item"><span
                    class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app1"><span><span class="sidebar-icon"><i
                                class="far fa-home-alt"></i> </span><span class="sidebar-text">Home</span>
                    </span><span class="link-arrow"><svg class="icon icon-sm" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span></span>
                <div class="multi-level collapse" role="list" id="submenu-app1" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="tables/datatables"><span
                                    class="sidebar-text-contracted">S</span>
                                <span class="sidebar-text">Slider</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="tables/bootstrap-tables"><span
                                    class="sidebar-text-contracted">E</span> <span class="sidebar-text"> Edge
                                </span></a></li>

                        <li class="nav-item"><a class="nav-link" href="tables/bootstrap-tables"><span
                                    class="sidebar-text-contracted">T</span> <span class="sidebar-text"> Testimonial
                                </span></a></li>
                    </ul>
                </div>
            </li>

            {{-- home end --}}




            <li class="nav-item"><span
                    class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app"><span><span class="sidebar-icon"><i
                                class="far fa-hand-holding-box"></i> </span><span class="sidebar-text">Services</span>
                    </span><span class="link-arrow"><svg class="icon icon-sm" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span></span>
                <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item"><a class="nav-link" href="category"><span
                                    class="sidebar-text-contracted">C</span>
                                <span class="sidebar-text">Category</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="tables/bootstrap-tables"><span
                                    class="sidebar-text-contracted">S</span> <span class="sidebar-text">All
                                    Services</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a href="users" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-gift"></i> </span><span class="sidebar-text">Offering</span></a></li>

            <li class="nav-item"><a href="users" class="nav-link"><span class="sidebar-icon"><i class="far fa-network-wired"></i> </span><span class="sidebar-text">How it Works</span></a>
            </li>



            <li class="nav-item"><a href="messages"
                    class="nav-link d-flex align-items-center justify-content-between"><span><span
                            class="sidebar-icon"><i class="far fa-comments"></i> </span><span
                            class="sidebar-text">Messages</span> </span><span
                        class="badge badge-sm bg-danger badge-pill notification-count">4</span></a></li>
            <li class="nav-item"><a href="users" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-users"></i> </span><span class="sidebar-text">Users List</span></a></li>

            <li class="nav-item"><a href="clients" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-user-tie"></i></span><span class="sidebar-text">Our Client</span></a></li>

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

            <li class="nav-item"><a href="clients" class="nav-link"><span class="sidebar-icon"><i
                            class="far fa-address-book"></i> </span><span class="sidebar-text">Contact us</span></a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

        </ul>
    </div>
</nav>
