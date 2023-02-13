<x-app-layout>
    <section class="refer-section">
        <div class="container">
            <div class="credit-wraper">
                <p class="lg-title">Refer</p>
                <div class="col-lg-12 mt-4">
                    <div class="cards">
                        <div class="col-12">
                            <div>Introduce a friend, colleague, relatives or anyone via social platforms to Engaged Hits.</div>
                            <div class="mt-3">
                                You'll get <span class="fw-600">50 credit points</span> for every minute of video watched by your referrals.
                            </div>
                            <hr>
                            <div class="fw-600">Share your referral link</div>
                            <div class="input-group mt-2">
                                <input type="text" class="form-control" id="referLink" value="{{url('invite?id='.auth()->user()->id)}}">
                                <div class="input-group-append">
                                    <button class="btn-copy">
                                        <i class="fa fa-copy"></i><span>Copy</span>
                                    </button>
                                </div>
                            </div>
                            <div class="sharing-buttons">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm3.6 11.5h-2.1v7h-3v-7h-2v-2h2V8.34c0-1.1.35-2.82 2.65-2.82h2.35v2.3h-1.4c-.25 0-.6.13-.6.66V9.5h2.34l-.24 2z"></path>
                                    </svg>
                                    <span>Share on Facebook </span>
                                </a>
                                <a class="bg-blue-light" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12 0C5.38 0 0 5.38 0 12s5.38 12 12 12 12-5.38 12-12S18.62 0 12 0zm5.26 9.38v.34c0 3.48-2.64 7.5-7.48 7.5-1.48 0-2.87-.44-4.03-1.2 1.37.17 2.77-.2 3.9-1.08-1.16-.02-2.13-.78-2.46-1.83.38.1.8.07 1.17-.03-1.2-.24-2.1-1.3-2.1-2.58v-.05c.35.2.75.32 1.18.33-.7-.47-1.17-1.28-1.17-2.2 0-.47.13-.92.36-1.3C7.94 8.85 9.88 9.9 12.06 10c-.04-.2-.06-.4-.06-.6 0-1.46 1.18-2.63 2.63-2.63.76 0 1.44.3 1.92.82.6-.12 1.95-.27 1.95-.27-.35.53-.72 1.66-1.24 2.04z"></path>
                                    </svg>
                                    <span>Share on Twitter </span>
                                </a>
                                <a href="#">
                                    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12s12-5.383,12-12S18.617,0,12,0z M9.5,16.5h-2v-7h2V16.5z M8.5,7.5 c-0.553,0-1-0.448-1-1c0-0.552,0.447-1,1-1s1,0.448,1,1C9.5,7.052,9.053,7.5,8.5,7.5z M18.5,16.5h-3V13c0-0.277-0.225-0.5-0.5-0.5 c-0.276,0-0.5,0.223-0.5,0.5v3.5h-3c0,0,0.031-6.478,0-7h3v0.835c0,0,0.457-0.753,1.707-0.753c1.55,0,2.293,1.12,2.293,3.296V16.5z"></path>
                                    </svg>
                                    <span>Share on LinkedIn</span>
                                </a>
                                <a class="bg-blue-light" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12 23.5c6.35 0 11.5-5.15 11.5-11.5S18.35.5 12 .5.5 5.65.5 12 5.65 23.5 12 23.5zM2.505 11.053c-.31.118-.505.738-.505.738s.203.62.513.737l3.636 1.355 1.417 4.557a.787.787 0 0 0 1.25.375l2.115-1.72a.29.29 0 0 1 .353-.01L15.1 19.85a.786.786 0 0 0 .746.095.786.786 0 0 0 .487-.573l2.793-13.426a.787.787 0 0 0-1.054-.893l-15.568 6z" fill-rule="evenodd"></path>
                                    </svg>
                                    <span>Share on Telegram</span>
                                </a>
                                <a class="bg-grren" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                        <path d="M90 43.84c0 24.214-19.78 43.842-44.182 43.842a44.256 44.256 0 0 1-21.357-5.455L0 90l7.975-23.522a43.38 43.38 0 0 1-6.34-22.637C1.635 19.63 21.415 0 45.818 0 70.223 0 90 19.628 90 43.84zM45.818 6.983c-20.484 0-37.146 16.535-37.146 36.86 0 8.064 2.63 15.533 7.076 21.61l-4.64 13.688 14.274-4.537A37.122 37.122 0 0 0 45.82 80.7c20.48 0 37.145-16.533 37.145-36.857S66.3 6.983 45.818 6.983zm22.31 46.956c-.272-.447-.993-.717-2.075-1.254-1.084-.537-6.41-3.138-7.4-3.495-.993-.36-1.717-.54-2.438.536-.72 1.076-2.797 3.495-3.43 4.212-.632.72-1.263.81-2.347.27-1.082-.536-4.57-1.672-8.708-5.332-3.22-2.848-5.393-6.364-6.025-7.44-.63-1.076-.066-1.657.475-2.192.488-.482 1.084-1.255 1.625-1.882.543-.628.723-1.075 1.082-1.793.363-.718.182-1.345-.09-1.884-.27-.537-2.438-5.825-3.34-7.977-.902-2.15-1.803-1.793-2.436-1.793-.63 0-1.353-.09-2.075-.09-.722 0-1.896.27-2.89 1.344-.99 1.077-3.788 3.677-3.788 8.964 0 5.288 3.88 10.397 4.422 11.113.54.716 7.49 11.92 18.5 16.223 11.01 4.3 11.01 2.866 12.996 2.686 1.984-.18 6.406-2.6 7.312-5.107.9-2.513.9-4.664.63-5.112z">
                                        </path>
                                    </svg>
                                    <span>Share on WhatsApp</span>
                                </a>
                                <a class="bg-red" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 864 864">
                                        <path d="M860.079 254.436c-2.091-45.841-9.371-77.147-20.019-104.542-11.007-28.32-25.731-52.338-49.673-76.28-23.943-23.943-47.962-38.669-76.282-49.675C686.711 13.292 655.404 6.013 609.564 3.92 563.628 1.824 548.964 1.329 432 1.329s-131.63.495-177.564 2.591c-45.841 2.093-77.147 9.372-104.542 20.019-28.319 11.006-52.338 25.731-76.28 49.675-23.943 23.942-38.669 47.96-49.675 76.28C13.292 177.288 6.013 208.595 3.92 254.436 1.824 300.37 1.329 315.036 1.329 432s.495 131.628 2.591 177.564c2.093 45.84 9.372 77.146 20.019 104.541 11.006 28.319 25.731 52.339 49.675 76.282 23.942 23.941 47.961 38.666 76.28 49.673 27.395 10.647 58.701 17.927 104.542 20.019 45.935 2.096 60.601 2.592 177.564 2.592s131.628-.496 177.564-2.592c45.84-2.092 77.146-9.371 104.541-20.019 28.32-11.007 52.339-25.731 76.282-49.673 23.941-23.943 38.666-47.962 49.673-76.282 10.647-27.395 17.928-58.701 20.019-104.541 2.096-45.937 2.592-60.601 2.592-177.564s-.496-131.63-2.592-177.564zm-77.518 351.591c-1.915 41.99-8.932 64.793-14.828 79.969-7.812 20.102-17.146 34.449-32.216 49.521-15.071 15.07-29.419 24.403-49.521 32.216-15.176 5.896-37.979 12.913-79.969 14.828-45.406 2.072-59.024 2.511-174.027 2.511s-128.622-.438-174.028-2.511c-41.988-1.915-64.794-8.932-79.97-14.828-20.102-7.812-34.448-17.146-49.518-32.216-15.071-15.071-24.405-29.419-32.218-49.521-5.897-15.176-12.912-37.979-14.829-79.968-2.071-45.413-2.51-59.034-2.51-174.028s.438-128.615 2.51-174.028c1.917-41.988 8.932-64.794 14.829-79.97 7.812-20.102 17.146-34.448 32.216-49.518 15.071-15.071 29.418-24.405 49.52-32.218 15.176-5.897 37.981-12.912 79.97-14.829 45.413-2.071 59.034-2.51 174.028-2.51s128.615.438 174.027 2.51c41.99 1.917 64.793 8.932 79.969 14.829 20.102 7.812 34.449 17.146 49.521 32.216 15.07 15.071 24.403 29.418 32.216 49.52 5.896 15.176 12.913 37.981 14.828 79.97 2.071 45.413 2.511 59.034 2.511 174.028s-.44 128.615-2.511 174.027z"></path>
                                        <path d="M432 210.844c-122.142 0-221.156 99.015-221.156 221.156S309.859 653.153 432 653.153 653.153 554.14 653.153 432c0-122.142-99.012-221.156-221.153-221.156zm0 364.713c-79.285 0-143.558-64.273-143.558-143.557 0-79.285 64.272-143.558 143.558-143.558 79.283 0 143.557 64.272 143.557 143.558 0 79.283-64.274 143.557-143.557 143.557z"></path>
                                        <circle cx="661.893" cy="202.107" r="51.68"> </circle>
                                    </svg>
                                    <span>Share on Instagram</span>
                                </a>
                            </div>
                            <hr>
                            <div class="fw-600 mt-4">Banners you can use</div>
                            <div class="mt-2">Feel free to use these banners for your campaigns.</div>
                            <img class="max-img" src="assets/img/you-green.jpg">
                            <div class="fw-600">Embed Code</div>
                            <div class="input-group mt-2">
                                <input type="text" class="form-control"  value="{{url('invite?id='.auth()->user()->id)}}">
                                <div class="input-group-append">
                                    <button class="btn-copy">
                                        <i class="fa fa-copy"></i><span>Copy</span>
                                    </button>
                                </div>
                            </div>
                            <img class="max-img" src="assets/img/you-green.jpg">
                            <div class="fw-600">Embed Code</div>
                            <div class="input-group mt-2">
                                <input type="text" class="form-control"  value="{{url('invite?id='.auth()->user()->id)}}">
                                <div class="input-group-append">
                                    <button class="btn-copy">
                                        <i class="fa fa-copy"></i><span>Copy</span>
                                    </button>
                                </div>
                            </div>
                            <img class="max-img" src="assets/img/you-green.jpg">
                            <div class="fw-600">Embed Code</div>
                            <div class="input-group mt-2">
                                <input type="text" class="form-control"  value="{{url('invite?id='.auth()->user()->id)}}">
                                <div class="input-group-append">
                                    <button class="btn-copy">
                                        <i class="fa fa-copy"></i><span>Copy</span>
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="text-decoration-underline fz-18">Watch this video if you are serious about gaining lots of points</div>
                            <div class="hero-video">
                                <div class="video-wrap">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/U6m_7YAcJEA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                            <small>Read more about referral policy <a href="#">here</a>.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>