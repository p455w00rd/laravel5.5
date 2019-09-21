<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <li class="sidebar-toggler-wrapper hide">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler"> </div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="nav-item start ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="index.html" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Dashboard 1</span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="dashboard_2.html" class="nav-link ">
                        <i class="icon-bulb"></i>
                        <span class="title">Dashboard 2</span>
                        <span class="badge badge-success">1</span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="dashboard_3.html" class="nav-link ">
                        <i class="icon-graph"></i>
                        <span class="title">Dashboard 3</span>
                        <span class="badge badge-danger">5</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('article.semua')}}" class="nav-link nav-toggle">
                {{--menuju Halaman Article Index --}}
                <i class="fa fa-google"></i>
                <span class="title">google</span>

            </a>

        </li>
        <li class="nav-item">
            <a href="https://yahoo.com" class="nav-link nav-toggle">
                {{--Menuju halaman luar localhot--}}
                <i class="icon-home"></i>
                <span class="title">yahoo</span>

            </a>

        </li>


    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>