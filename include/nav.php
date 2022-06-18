    <!-- Pre-loader start -->
    <div class="theme-loader">
        
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                  <i class="ti-menu"></i>
                </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                  <h3>MEIS</h3>
                </a>
                        <a class="mobile-options waves-effect waves-light">
                  <i class="ti-more"></i>
                </a>
                    </div>

                    <div class="navbar-container container-fluid">
         
                        <ul class="nav-right">
                           
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                      <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                      <span><?php echo $_SESSION['username']; ?></span>
                      <i class="ti-angle-down"></i>
                    </a>
                                <ul class="show-notification profile-notification">
                                   
                                    <li class="waves-effect waves-light">
                                        <a href="../user-profile/">
                          <i class="ti-user"></i> Profile
                        </a>
                                    </li>
                                   
                                    <!-- <li class="waves-effect waves-light">
                                        <a href="#">
                          <i class="ti-lock"></i> Lock Screen
                        </a>
                                    </li>  -->
                                    <li class="waves-effect waves-light">
                                        <a href="../logout.php">
                          <i class="ti-layout-sidebar-left"></i> Logout
                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                      <i class="fa fa-chevron-left"></i>
                    </a>
                          
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                        <img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                        <div class="live-status bg-success"></div>
                      </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header"><?php echo $_SESSION['username']; ?></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                        <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                      </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                        <img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                      </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                        <img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                      </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                        <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                      </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="pcoded-main-container">
    <div class="pcoded-wrapper">
<?php include('../include/sidebar.php'); ?>
    

            