<nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="../files/assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $_SESSION['username']; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                             <a href="../user-profile/"><i class="ti-user"></i>View Profile</a>
                                            <a href="../logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          
                            <div class="pcoded-navigation-label">Summary</div>
                            <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                    <a href="../dashboard/" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-home "></i><b>A</b></span>
                        <span class="pcoded-mtext">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Essentials</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>BC</b></span>
                        <span class="pcoded-mtext">Data Entry</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="../client/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">New Client</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../screening/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Screening</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../visits/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Visit</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>
                                        
                                      
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-widgetized"></i><b>AC</b></span>
                        <span class="pcoded-mtext">Tables</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="../client-list/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Clients Info</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>

                                        <!-- <li class=" ">
                                            <a href="../PrEP-new/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">PrEP New</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li> -->
                                        <li class=" ">
                                            <a href="../PrEP-Curr/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Client Visits</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../provider-list/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Providers</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                                              </ul>

                        <div class="pcoded-navigation-label">Reports</div>
                        <ul class="pcoded-item pcoded-left-item">
                                <!-- <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                        <span class="pcoded-mtext">Aggregate</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="../aggregate-report/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Export</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>
                                  
                                      
                                    </ul>
                                </li> -->
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>AC</b></span>
                        <span class="pcoded-mtext">Exports</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="../individual-report/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Individual</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>
                                        <!-- <li class=" ">
                                            <a href="../aggregate-export/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Aggregate</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li> -->
                                        
                        
                                     
                                    

                                    </ul>
                                </li>
                                
                                <li class="pcoded-hasmenu">
                                
                                </li>
                                                              </ul>

                                                              <div class="pcoded-navigation-label">Maintanance</div>
                        <ul class="pcoded-item pcoded-left-item">
                        
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-cloud-down"></i><b>AC</b></span>
                        <span class="pcoded-mtext">Backup</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="../offline-backup/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Offline Backup</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li>
                                        <!-- <li class=" ">
                                            <a href="../offline-backup/" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Online Backup</span>
                            <span class="pcoded-mcaret"></span>
                          </a>
                                        </li> -->

                                        
                        
                                     
                                    

                                    </ul>
                                </li>
                                
                                <li class="pcoded-hasmenu">
                                <p style="margin-top: 10%; padding-left:30%; margin-bottom:auto;">v.1.1.2</p>
                                </li>
                                                              </ul>


                                                              
                        </div>
                    </nav>