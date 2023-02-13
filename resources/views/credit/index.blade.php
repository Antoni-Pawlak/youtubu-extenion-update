<x-app-layout>

    <section class="credit-section">
        <div class="container">
            <div class="credit-wraper">
                <p class="lg-title">Credit</p>
                <div class="alert bg-danger text-white" role="alert">
                    <div class="container d-flex">
                        <div class="mr-3">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="align-self-center ms-3">
                            <small>After liking, commenting or subscribing to a channel if you reverse any action you will be banned. You are welcome to use another gmail account to link to our site.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="cards">
                        <div class="col-12">
                            <div>This page is for users who are earning and spending POINTS in order to promote Youtube videos. If you are <u>not</u> creating and promoting Youtube videos, ignore this page.</div>
                            <div class="mt-3">
                                <a class="text-primary" href="#">To understand how our point system works please click here which will open up a pop up explanation.</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="sm-box bg-green">
                                        <span>POINTS BALANCE</span>
                                        <span class="bold-txt">{{!empty(auth()->user()->points) ?  number_format(auth()->user()->points) : ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- <div class="d-flex align-items-center justify-content-end">
                                <span>Filter by time duration</span>
                                <select class="time-select ms-2">
                                    <option>Today</option>
                                    <option>Yesterday</option>
                                    <option>Last 7 days</option>
                                </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 mb-4">
                                    <div class="sm-box bg-green">
                                        <span>Points earned by watching videos</span>
                                        <span class="bold-txt">1,000</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="sm-box bg-blue">
                                        <span>Points earned by watching videos</span>
                                        <span class="bold-txt">1,000</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="sm-box bg-red">
                                        <span>Points earned by watching videos</span>
                                        <span class="bold-txt">00</span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="earning">
                               <a href="{{route('refers.index')}}"> <h4 class="t-heading"><span>Referral earnings</span></h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>