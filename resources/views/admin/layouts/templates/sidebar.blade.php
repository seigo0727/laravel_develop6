<div id="aside" class="sidebar">
    <div class="sidebar-top">
        <div class="sidebar-brand">
            {{ config('app.name', 'CMS') }}
        </div>
    </div>

    <div class="sidebar-content">
        <div class="nav-group">
            <h5 class="nav-heading">Heading {{ $view_header }}</h5>
            <ul class="sidebar-nav">
                <li class="nav-item">
                    <a href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="nav-group">
            <h5 class="nav-heading">マスター</h5>
            <ul class="sidebar-nav">

                <li class="nav-item">
                    <a href="#master_admin_items" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        管理者
                    </a>
                    <ul class="collapse list-unstyled" id="master_admin_items">
                        <li>
                            <a href="{{ route('admin.users.index') }}">アカウント</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.groups.index') }}">アカウントグループ</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#">ルーティング</a>
                </li>
            </ul>
        </div>
    </div>
</div>