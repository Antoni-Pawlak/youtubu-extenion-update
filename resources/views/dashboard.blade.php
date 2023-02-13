<x-app-layout>
    <section class="hero-section">
        <div class="container">
            <div class="hero-wraper">
                <div class="hero-text">
                    <h1><span class="fw-300">Welcome to</span> <br> <span class="fw-600">Our Home Page</span></h1>
                    <ul class="hero-list">
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Lorem ipsum, or lipsum as it is sometimes known, </li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Is dummy text used in laying out sed in laying out print, <br class="mob"> graphic or web designs.</li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> The passage is attributed to an unknown</li>
                    </ul>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, <br class="mob"> is dummy text used in laying out print.</p>
                    <a href="{{ route('google.login') }}" class="btn-round">Sign In with Google</a>

                </div>
                <div class="hero-video">
                    <div class="video-wrap">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/U6m_7YAcJEA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</x-app-layout>