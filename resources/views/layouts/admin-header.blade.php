<header>
    <div class="container-fluid">
        <div class="menubar">
            <a href="{{route('dashboard')}}">
                <h2 class="logo-text">Watcher</h2>
            </a>
            <a href="#" class="humburger">
                <span class="humburger-lg"></span>
                <span class="humburger-sm"></span>
                <span class="humburger-lg"></span>
                <span class="humburger-sm"></span>
            </a>
            <ul class="menu">
                <!-- <li>
                    <a href="#">Campaigns <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="submenu">
                        <li><a href="new-campaign.html">Create New Campaign</a></li>
                        <li><a href="#">My Campaigns</a></li>
                        <li><a href="#">My Youtube Channels</a></li>
                    </ul>
                </li> -->
                <li><a href="{{route('stats.index')}}">Stats</a></li>
                <li><a href="{{route('credit.index')}}">Credits</a></li>
                <li><a href="{{route('refers.index')}}">Refer</a></li>
                <li><a href="{{route('download.index')}}">Download Extension</a></li>
                <li>
                    <a href="{{route('users.index')}}">Users</a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                        <i class="bx bx-log-out"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>


            </ul>
        </div>
    </div>
</header>