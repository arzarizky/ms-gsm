<aside class="sidebar sidebar-default sidebar-hover sidebar-boxed sidebar-white navs-pill">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{ asset('template') }}/dashboard/index.html" class="navbar-brand">
            <!--Logo start-->
            <img src="{{ asset('template') }}/assets/images/logo-gsm.gif" width="30" class="img-fluid" alt="logo">
            <!--logo End-->
            <h4 class="logo-title">GSM MS</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            @include("layouts.menus")
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
