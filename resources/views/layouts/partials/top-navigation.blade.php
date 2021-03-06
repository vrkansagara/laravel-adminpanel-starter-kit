<div class="row border-bottom">
    <nav class="navbar navbar-static-top @yield('navbar-extra-class')" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
            </a>
            <form role="search" class="navbar-form-custom" method="post" action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control"
                           name="top-search" id="top-search">
                </div>
            </form>
        </div>


        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-language" aria-hidden="true"></i> Language
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('language','en')}}">
                        <i class="fa fa-flag"></i> English
                    </a>
                    <a class="dropdown-item" href="{{route('language','fr')}}">
                        <i class="fa fa-flag"></i> French
                    </a>
                    <a class="dropdown-item" href="{{route('language','hi')}}">
                        <i class="fa fa-flag"></i> Hindi
                    </a>
                </div>
            </li>
        </ul>

    </nav>
</div>

