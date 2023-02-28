<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">


            <li class="menu">
                <a target="_blank" href="#" <?php if (session::get("current_dir") == "dashboard") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#dashboard" data-active="true" data-toggle="collapse" <?php if (session::get("current_dir") == "user") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>User</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"> </polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "food") { ?> show <?php }; ?>" id="dashboard" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/user/manage.php"> Manage user </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/user/add.php"> Add user </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#team" data-active="true" data-toggle="collapse"<?php if (session::get("current_dir") == "team") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>Team</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "team") { ?> show <?php }; ?>" id="team" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/team/manage.php"> Manage team </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/team/add.php"> Add team </a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#competition" data-active="true" data-toggle="collapse"<?php if (session::get("current_dir") == "competition") { ?> aria-expanded="true" <?php } ?> class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span>Competition</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled <?php if (session::get("current_dir") == "competition") { ?> show <?php }; ?>" id="competition" data-parent="#accordionExample">
                    
                    <li>
                        <a href="https://<?=$domain?>/competition/manage.php"> Manage team </a>
                    </li>
                    <li class="active">
                        <a href="https://<?=$domain?>/competition/add.php"> Add team </a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>

</div>
<!--  END SIDEBAR  -->