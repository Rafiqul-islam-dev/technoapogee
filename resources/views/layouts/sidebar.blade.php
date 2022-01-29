<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i
        class="ion-close"></i></button>
<!-- LOGO -->
<div class="topbar-left">
    <div class="text-center">
        {{-- <a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Annex</a> --}}
        <a href="index.html" class="logo"><img src="{{ asset('image/backend/images/TA Logo.PNG') }}" height="44"
                alt="logo"></a>
    </div>
</div>
<div class="sidebar-inner slimscrollleft">
    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>
            <li>
                <a href="{{ Route('dashboard') }}" class="waves-effect">
                    <i class="mdi mdi-airplay"></i> <span>Dashboard </span>
                </a>
            </li>
            <li>
                <a href="{{ Route('menu') }}" class="waves-effect">
                    <i class="mdi mdi-airplay"></i> <span>Menu </span>
                </a>
            </li>
            <li class="menu-title">Page</li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect">
                    <i class="mdi mdi-bullseye"></i> <span>Page</span><span class="float-right"><i
                            class="mdi mdi-chevron-right"></i></span>
                </a>
                <ul class="list-unstyled">
                    <li><a href="{{ Route('newsEvent') }}">News Event View</a></li>
                    <li><a href="{{ Route('ongoingProject') }}">Ongoing Project</a></li>
                    <li><a href="{{ Route('completeProject') }}">Complete Project</a></li>
                </ul>
            </li>
            

        </ul>
    </div>
    <div class="clearfix"></div>
</div>
