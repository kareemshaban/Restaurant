<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a  @if($slag == 1) class="sidebar-link waves-effect waves-dark sidebar-link" @else  class="sidebar-link waves-effect waves-dark sidebar-link" @endif href="{{route('home')}}"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item sidebar-item  has-submenu">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"> 
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="hide-menu">Basic Data</span>
                      </a>
                    <ul class="submenu collapse">
                        <li><a class="sidebar-link waves-effect waves-dark sidebar-link" href="#">Submenu item 1 </a></li>
                        <li><a class="sidebar-link waves-effect waves-dark sidebar-link" href="#">Submenu item 2 </a></li>
                        <li><a class="sidebar-link waves-effect waves-dark sidebar-link" href="#">Submenu item 3 </a> </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                        aria-expanded="false">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Basic Table</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                        aria-expanded="false">
                        <i class="fa fa-font" aria-hidden="true"></i>
                        <span class="hide-menu">Icon</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                        aria-expanded="false">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="hide-menu">Google Map</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html"
                        aria-expanded="false">
                        <i class="fa fa-columns" aria-hidden="true"></i>
                        <span class="hide-menu">Blank Page</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
                        aria-expanded="false">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="hide-menu">Error 404</span>
                    </a>
                </li>
         
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>