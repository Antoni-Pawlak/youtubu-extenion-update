<header>
    <div class="container-fluid">
        <div class="menubar">
            <a href="index.html">
                <h2 class="logo-text">Watcher</h2>
            </a>
            <a href="#" class="humburger">
                <span class="humburger-lg"></span>
                <span class="humburger-sm"></span>
                <span class="humburger-lg"></span>
                <span class="humburger-sm"></span>
            </a>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Faqs</a></li>
                <li><button type="button" onclick="window.location='{{ route("google.login") }}'" class="btn-round bg-red">Log In with Google</button></li>
            </ul>
        </div>
    </div>
</header>