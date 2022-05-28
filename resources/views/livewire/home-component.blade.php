<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Dashboard </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Skote Dashboard</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                                </div>
                                <h5 class="font-size-15 text-truncate">Henry Price</h5>
                                <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                            </div>

                            <div class="col-sm-8">
                                <div class="pt-4">

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="font-size-15">125</h5>
                                            <p class="text-muted mb-0">Projects</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-size-15">$1245</h5>
                                            <p class="text-muted mb-0">Revenue</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-6">Monthly Earning</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="text-muted">This month</p>
                                <h3>$34,252</h3>
                                <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                                <div class="mt-4">
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-4 mt-sm-0">
                                    <div id="radialBar-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xl-6">
                <!-- end row -->
                <div class="card">
                    <div class="card-body">
                        <div id="car_model"></div>
                        {{--
                        <div class="d-sm-flex flex-wrap">
                            <h4 class="card-title mb-4">Email Sent</h4>
                            <div class="ms-auto">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>--}}
                    </div>
                </div>
            </div>
        </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Social Source</h4>
                            <div class="text-center">
                                <div class="avatar-sm mx-auto mb-4">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                                                            <i class="mdi mdi-facebook text-primary"></i>
                                                        </span>
                                </div>
                                <p class="font-16 text-muted mb-2"></p>
                                <h5><a href="javascript: void(0);" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                                <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                                <a href="javascript: void(0);" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="social-source text-center mt-3">
                                        <div class="avatar-xs mx-auto mb-3">
                                                            <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                                    <i class="mdi mdi-facebook text-white"></i>
                                                                </span>
                                        </div>
                                        <h5 class="font-size-15">Facebook</h5>
                                        <p class="text-muted mb-0">125 sales</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="social-source text-center mt-3">
                                        <div class="avatar-xs mx-auto mb-3">
                                                            <span class="avatar-title rounded-circle bg-info font-size-16">
                                                                    <i class="mdi mdi-twitter text-white"></i>
                                                                </span>
                                        </div>
                                        <h5 class="font-size-15">Twitter</h5>
                                        <p class="text-muted mb-0">112 sales</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="social-source text-center mt-3">
                                        <div class="avatar-xs mx-auto mb-3">
                                                            <span class="avatar-title rounded-circle bg-pink font-size-16">
                                                                    <i class="mdi mdi-instagram text-white"></i>
                                                                </span>
                                        </div>
                                        <h5 class="font-size-15">Instagram</h5>
                                        <p class="text-muted mb-0">104 sales</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">Activity</h4>
                            <ul class="verti-timeline list-unstyled">
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                Responded to need “Volunteer Activities
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                Everyone realizes why a new common language would be desirable... <a href="javascript: void(0);">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list active">
                                    <div class="event-timeline-dot">
                                        <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                Joined the group “Boardsmanship Forum”
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                Responded to need “In-Kind Opportunity”
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Top Cities Selling Product</h4>

                            <div class="text-center">
                                <div class="mb-4">
                                    <i class="bx bx-map-pin text-primary display-4"></i>
                                </div>
                                <h3>1,456</h3>
                                <p>San Francisco</p>
                            </div>

                            <div class="table-responsive mt-4">
                                <table class="table align-middle table-nowrap">
                                    <tbody>
                                    <tr>
                                        <td style="width: 30%">
                                            <p class="mb-0">San Francisco</p>
                                        </td>
                                        <td style="width: 25%">
                                            <h5 class="mb-0">1,456</h5></td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Los Angeles</p>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">1,123</h5>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">San Diego</p>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">1,026</h5>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Latest Transaction</h4>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check font-size-16 align-middle">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                <label class="form-check-label" for="transactionCheck01"></label>
                                            </div>
                                        </th>
                                        <th class="align-middle">Order ID</th>
                                        <th class="align-middle">Billing Name</th>
                                        <th class="align-middle">Date</th>
                                        <th class="align-middle">Total</th>
                                        <th class="align-middle">Payment Status</th>
                                        <th class="align-middle">Payment Method</th>
                                        <th class="align-middle">View Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                                <label class="form-check-label" for="transactionCheck02"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                        <td>Neal Matthews</td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            $400
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                                <label class="form-check-label" for="transactionCheck03"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                        <td>Jamal Burnett</td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            $380
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-visa me-1"></i> Visa
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                                <label class="form-check-label" for="transactionCheck04"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                        <td>Juan Mitchell</td>
                                        <td>
                                            06 Oct, 2019
                                        </td>
                                        <td>
                                            $384
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-paypal me-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                                <label class="form-check-label" for="transactionCheck05"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                        <td>Barry Dick</td>
                                        <td>
                                            05 Oct, 2019
                                        </td>
                                        <td>
                                            $412
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck06">
                                                <label class="form-check-label" for="transactionCheck06"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                        <td>Ronald Taylor</td>
                                        <td>
                                            04 Oct, 2019
                                        </td>
                                        <td>
                                            $404
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-visa me-1"></i> Visa
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck07">
                                                <label class="form-check-label" for="transactionCheck07"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                        <td>Jacob Hunter</td>
                                        <td>
                                            04 Oct, 2019
                                        </td>
                                        <td>
                                            $392
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-paypal me-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">News</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">News</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Filter</h4>

                            <div>
                                <h5 class="font-size-14 mb-3">Categories</h5>
                                <ul class="list-unstyled product-list">
                                    @foreach($categories as $category)
                                        <li><a href="/category/{{$category->id}}"><i class="mdi mdi-chevron-right me-1"></i>{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Price</h5>
                                <span class="irs irs--square js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;">$0</span><span class="irs-max" style="visibility: hidden;">$1 000</span><span class="irs-from" style="visibility: visible; left: 10.2719%;">$200</span><span class="irs-to" style="visibility: visible; left: 65.369%;">$800</span><span class="irs-single" style="visibility: hidden; left: 23.908%;">$200 — $800</span></span><span class="irs-grid" style="width: 92.162%; left: 3.81901%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -4.21702%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -8.54017%;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -8.72796%;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -8.43403%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -10.8385%;">1 000</span></span><span class="irs-bar" style="left: 22.3514%; width: 55.2972%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 18.4324%;"><i></i><i></i><i></i></span><span class="irs-handle to type_last" style="left: 73.7296%;"><i></i><i></i><i></i></span></span><input type="text" id="pricerange" class="irs-hidden-input" tabindex="-1" readonly="">
                            </div>

                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Discount</h5>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck1">
                                    <label class="form-check-label" for="productdiscountCheck1">
                                        Less than 10%
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck2">
                                    <label class="form-check-label" for="productdiscountCheck2">
                                        10% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck3" checked="">
                                    <label class="form-check-label" for="productdiscountCheck3">
                                        20% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck4">
                                    <label class="form-check-label" for="productdiscountCheck4">
                                        30% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck5">
                                    <label class="form-check-label" for="productdiscountCheck5">
                                        40% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck6">
                                    <label class="form-check-label" for="productdiscountCheck6">
                                        50% or more
                                    </label>
                                </div>

                            </div>

                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Customer Rating</h5>
                                <div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                        <label class="form-check-label" for="productratingCheck1">
                                            4 <i class="bx bxs-star text-warning"></i>  &amp; Above
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck2">
                                        <label class="form-check-label" for="productratingCheck2">
                                            3 <i class="bx bxs-star text-warning"></i>  &amp; Above
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck3">
                                        <label class="form-check-label" for="productratingCheck3">
                                            2 <i class="bx bxs-star text-warning"></i>  &amp; Above
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck4">
                                        <label class="form-check-label" for="productratingCheck4">
                                            1 <i class="bx bxs-star text-warning"></i>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9">

                    <div class="row mb-3">
                        <div class="col-xl-4 col-sm-6">
                            <div class="mt-2">
                                <h5>News</h5>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
                                <div class="search-box me-2">
                                    <div class="position-relative">
                                        <input type="text" class="form-control border-0" placeholder="Search...">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div>
                                <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                                    </li>
                                </ul>


                            </form>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($news as $n)
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">
                                        <img src="{{asset('assets/images/product/')}}/{{$n->image}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">{{$n->header}}</a></h5>

                                        <p class="text-muted">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                        </p>
                                    </div>
                                    <h5>{{$n->main_text}}</h5>
                                </div>
                            </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            {{ $news->links('pagination::bootstrap-4') }}
                            {{--
                            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                                <li class="page-item disabled">
                                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="javascript: void(0);" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="sketchfab-embed-wrapper">
                <iframe frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/f3750246b6564607afbefc61cb1683b1/embed?ui_watermark_link=0"> </iframe>
                </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- container-fluid -->
</div>
<script src="{{asset('assets/js/three.min.js')}}"></script>
<script src="{{asset('assets/js/GLTFLoader.js')}}"></script>
<script src="{{asset('assets/js/OrbitControls.js')}}"></script>
<script>
    let scene, camera, renderer, controls, light, model;

    function init() {
        my_car = document.getElementById('car_model');
        scene = new THREE.Scene();
        scene.background = new THREE.Color(0xeaedfc);
        /* scene.background = new THREE.CubeTextureLoader()
           .setPath( 'skybox/' )
           .load( [
             'posx.jpg',
             'negx.jpg',
             'posy.jpg',
             'negy.jpg',
             'posz.jpg',
             'negz.jpg'
           ] );*/

        camera = new THREE.PerspectiveCamera(60,window.innerWidth/window.innerHeight,1,1000);
        camera.position.set(300,200,-400);

        controls = new THREE.OrbitControls(camera);
        //controls.noPan = true;
        //controls.maxDistance = controls.minDistance = 300;
        //controls.noKeys = true;
        //controls.noRotate = true;
        controls.noZoom = true;

        //scene.add( new THREE.AxesHelper(500));

        //

        /*const spotLight = new THREE.SpotLight( 0xffffff );
        spotLight.position.set( 100, 1000, 100, Math.PI / 10 );

        spotLight.castShadow = true;

        spotLight.shadow.mapSize.width = 1024;
        spotLight.shadow.mapSize.height = 1024;

        spotLight.shadow.camera.near = 500;
        spotLight.shadow.camera.far = 4000;
        spotLight.shadow.camera.fov = 30;

        scene.add( spotLight );
        const spotLightHelper = new THREE.SpotLightHelper( spotLight );
        scene.add( spotLightHelper );*/
        // !!!!!!!!!!!!!!!!!!!!!!
        light = new THREE.SpotLight(0xfffff,0.1);
        light.position.set(5,10,4);
        light.castShadow = true;
        light.shadow.bias = 1;
        scene.add( light );
        //const spotLightHelper = new THREE.SpotLightHelper( light );
        //scene.add( spotLightHelper );
        //!!!!!
        hemiLight = new THREE.HemisphereLight(0xffeeb1, 0x080820, 4);
        scene.add(hemiLight);

        renderer = new THREE.WebGLRenderer();
        renderer.toneMapping = THREE.ReinhardToneMapping;
        renderer.toneMappingExposure = 2.3;

        renderer.setSize(750,425);
        renderer.shadowMap.enabled = true;
        //
        var groundMaterial = new THREE.MeshStandardMaterial( { color: 0xffffff } ); // !!!!
        var mesh = new THREE.Mesh( new THREE.PlaneBufferGeometry( 600, 600 ), groundMaterial );
        mesh.position.y = -88.0;
        mesh.rotation.x = - Math.PI / 2;
        mesh.receiveShadow = true;

        const geometry = new THREE.CircleBufferGeometry( 500, 500 );
        const material = new THREE.MeshBasicMaterial({ color: 0xeaedfc });
        const circle = new THREE.Mesh(geometry, material);
        circle.rotation.x = - Math.PI / 2;
        circle.position.y = -89;
        scene.add(circle);
        //
        renderer.shadowMap.enabled = true;
        renderer.shadowMap.type = THREE.PCFSoftShadowMap;
        //

        my_car.appendChild( renderer.domElement );



        new THREE.GLTFLoader().load('{{asset('assets/gltf_models/scene.gltf')}}', result => {
            model = result.scene.children[0];
            model.position.set(0,-50,0);
            model.traverse(n => { if ( n.isMesh ) {
                n.castShadow = true;
                n.receiveShadow = true;
                if(n.material.map) n.material.map.anisotropy = 1;
            }});
            scene.add(model);

            animate();
        });
    }
    function animate() {
        renderer.render(scene,camera);
        light.position.set(
            camera.position.x + 100,
            camera.position.y + 100,
            camera.position.z + 100,
        );
        scene.rotation.y += 0.0007;
        requestAnimationFrame(animate);
    }
    init();
</script>
<style>
    #car_model:hover {
        cursor: grab;
    }
</style>
