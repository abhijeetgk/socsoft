 <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo BASE_URL;?>adminhome" class="site_title"><i class="fa fa-paw"></i> <span><?php echo SITENAME;?></span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo IMAGES_PATH;?>img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span><?php echo WELCOME_MSG;?>,</span>
              <h2><?php echo ADMIN_NAME;?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <h3>&nbsp;</h3>
            <div class="menu_section">
              <h3></h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> <?php echo HOME;?> <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo BASE_URL;?>adminhome"><?php echo DASHBOARD;?></a>
                    </li>
                    <!-- <li><a href="index2.html">Dashboard2</a>
                    </li>
                    <li><a href="index3.html">Dashboard3</a>
                    </li> -->
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> <?php echo CUSTOMER;?> <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo BASE_URL;?>customer/manage"><?php echo MANAGE_CUSTOMER;?></a></li>
                    <li><a href="<?php echo BASE_URL;?>customer/add"><?php echo ADD_NEW_CUSTOMER;?></a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> <?php echo DEPOSITS;?> <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo BASE_URL;?>rd/report"><?php echo RECURRING_DEPOSITS;?></a></li>
                    <li><a href="<?php echo BASE_URL;?>rd/addmaster"><?php echo NEW_RD_ACCOUNT_ENTRY;?></a></li>
                    <li><a href="<?php echo BASE_URL;?>rd/addrecord"><?php echo NEW_RD_ACCOUNT_RECORD;?></a></li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> <?php echo REPORTS;?> <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo BASE_URL;?>rd/report"><?php echo RD_REPORTS;?></a>
                    </li>
                    
                  </ul>
                </li> 
                <!--<li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="chartjs.html">Chart JS</a>
                    </li>
                    <li><a href="chartjs2.html">Chart JS2</a>
                    </li>
                    <li><a href="morisjs.html">Moris JS</a>
                    </li>
                    <li><a href="echarts.html">ECharts </a>
                    </li>
                    <li><a href="other_charts.html">Other Charts </a>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </div>
            <!-- <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="e_commerce.html">E-commerce</a>
                    </li>
                    <li><a href="projects.html">Projects</a>
                    </li>
                    <li><a href="project_detail.html">Project Detail</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                    <li><a href="profile.html">Profile</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="page_404.html">404 Error</a>
                    </li>
                    <li><a href="page_500.html">500 Error</a>
                    </li>
                    <li><a href="plain_page.html">Plain Page</a>
                    </li>
                    <li><a href="login.html">Login Page</a>
                    </li>
                    <li><a href="pricing_tables.html">Pricing Tables</a>
                    </li>

                  </ul>
                </li>
                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
              </ul>
            </div> -->

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <!-- <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a> -->
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="/">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>