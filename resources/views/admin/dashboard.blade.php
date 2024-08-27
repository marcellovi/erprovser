@extends('admin.admin')

@section('title')
    My Title
@endsection

@section('content')
    <div class="title-group mb-3">
        <h1 class="h2 mb-0">Overview</h1>

        <small class="text-muted">Oi <b>{{ ucfirst(Auth::user()->name) }}</b>, Bem-Vindo!</small>
    </div>

    <div class="row my-4">

        <!-- New Table -->
        <div class="col-lg-12 col-12">
            <div class="custom-block bg-white">
                <h5 class="mb-4">Inscritos</h5>

                <div class="table-responsive">
                    <table id="example" class="account-table table">
                        <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Area de Atuação</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Amount</th>
                            <th scope="col">+ Detalhes</th>
                            <th scope="col">Status</th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td scope="row">July 5, 2023</td>

                            <td scope="row">10:00 PM</td>

                            <td scope="row">Shopping</td>

                            <td scope="row">C2C Transfer</td>

                            <td class="text-danger" scope="row">
                                <span class="me-1">-</span>
                                $100.00
                            </td>

                            <td scope="row">$5,500.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-danger">
                                                        Pending
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">July 2, 2023</td>

                            <td scope="row">10:42 AM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-1">+</span>
                                $250
                            </td>

                            <td scope="row">$5,600.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">July 2, 2023</td>

                            <td scope="row">10:42 AM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-1">+</span>
                                $250
                            </td>

                            <td scope="row">$5,600.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">July 2, 2023</td>

                            <td scope="row">10:42 AM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-1">+</span>
                                $250
                            </td>

                            <td scope="row">$5,600.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">June 28, 2023</td>

                            <td scope="row">8:20 PM</td>

                            <td scope="row">Billing</td>

                            <td scope="row">Goverment</td>

                            <td class="text-success" scope="row">
                                <span class="me-2">+</span>$50
                            </td>

                            <td scope="row">$5,350.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">June 24, 2023</td>

                            <td scope="row">10:48 PM</td>

                            <td scope="row">Shopee</td>

                            <td scope="row">QR Code</td>

                            <td class="text-danger" scope="row">
                                <span class="me-2">-</span>$380
                            </td>

                            <td scope="row">$5,300.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-dark">
                                                        Cancelled
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">June 12, 2023</td>

                            <td scope="row">12:30 AM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-2">+</span>$250
                            </td>

                            <td scope="row">$4,920.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">May 31, 2023</td>

                            <td scope="row">2:40 PM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-2">+</span>$50
                            </td>

                            <td scope="row">$4,920.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">May 22, 2023</td>

                            <td scope="row">8:50 AM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-2">+</span>$50
                            </td>

                            <td scope="row">$4,920.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">May 20, 2023</td>

                            <td scope="row">6:45 PM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-danger" scope="row">
                                <span class="me-2">-</span>$500
                            </td>

                            <td scope="row">$4,920.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-danger">
                                                        Pending
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">April 28, 2023</td>

                            <td scope="row">11:20 AM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-2">+</span>$856
                            </td>

                            <td scope="row">$4,920.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>

                        <tr>
                            <td scope="row">April 16, 2023</td>

                            <td scope="row">11:00 PM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-2">+</span>$50
                            </td>

                            <td scope="row">$4,920.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-danger">
                                                        Pending
                                                    </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Prev</span>
                            </a>
                        </li>

                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End New Table -->


        <div class="col-lg-7 col-12">

            <!-- Your Balance Start -->
            <div class="custom-block custom-block-balance">
                <small>Your Balance</small>

                <h2 class="mt-2 mb-3">$254,800</h2>

                <div class="custom-block-numbers d-flex align-items-center">
                    <span>****</span>
                    <span>****</span>
                    <span>****</span>
                    <p>2560</p>
                </div>

                <div class="d-flex">
                    <div>
                        <small>Valid Date</small>
                        <p>12/2028</p>
                    </div>

                    <div class="ms-auto">
                        <small>Card Holder</small>
                        <p>Thomas</p>
                    </div>
                </div>
            </div>
            <!-- Your Balance End -->

            <!-- Start Table -->
            <div class="custom-block bg-white">

                <h5 class="mb-4">History</h5>
                <table id="example2" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                </table>

            </div>

            <!-- End Table -->
            <div class="custom-block bg-white">
                <h5 class="mb-4">History</h5>

                <div id="pie-chart"></div>
            </div>

            <div class="custom-block bg-white">
                <div id="chart"></div>
            </div>

            <div class="custom-block custom-block-exchange">
                <h5 class="mb-4">Exchange Rate</h5>

                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                    <div class="d-flex align-items-center">
                        <img src="images/flag/united-states.png" class="exchange-image img-fluid" alt="">

                        <div>
                            <p>USD</p>
                            <h6>1 US Dollar</h6>
                        </div>
                    </div>

                    <div class="ms-auto me-4">
                        <small>Sell</small>
                        <h6>1.0931</h6>
                    </div>

                    <div>
                        <small>Buy</small>
                        <h6>1.0821</h6>
                    </div>
                </div>

                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                    <div class="d-flex align-items-center">
                        <img src="images/flag/singapore.png" class="exchange-image img-fluid" alt="">

                        <div>
                            <p>SGD</p>
                            <h6>1 Singapore Dollar</h6>
                        </div>
                    </div>

                    <div class="ms-auto me-4">
                        <small>Sell</small>
                        <h6>0.6901</h6>
                    </div>

                    <div>
                        <small>Buy</small>
                        <h6>0.6201</h6>
                    </div>
                </div>

                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                    <div class="d-flex align-items-center">
                        <img src="images/flag/united-kingdom.png" class="exchange-image img-fluid" alt="">

                        <div>
                            <p>GPD</p>
                            <h6>1 British Pound</h6>
                        </div>
                    </div>

                    <div class="ms-auto me-4">
                        <small>Sell</small>
                        <h6>1.1520</h6>
                    </div>

                    <div>
                        <small>Buy</small>
                        <h6>1.1412</h6>
                    </div>
                </div>

                <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                    <div class="d-flex align-items-center">
                        <img src="images/flag/australia.png" class="exchange-image img-fluid" alt="">

                        <div>
                            <p>AUD</p>
                            <h6>1 Australian Dollar</h6>
                        </div>
                    </div>

                    <div class="ms-auto me-4">
                        <small>Sell</small>
                        <h6>0.6110</h6>
                    </div>

                    <div>
                        <small>Buy</small>
                        <h6>0.5110</h6>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="images/flag/european-union.png" class="exchange-image img-fluid" alt="">

                        <div>
                            <p>EUR</p>
                            <h6>1 Euro</h6>
                        </div>
                    </div>

                    <div class="ms-auto me-4">
                        <small>Sell</small>
                        <h6>1.1020</h6>
                    </div>

                    <div>
                        <small>Buy</small>
                        <h6>1.1010</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-12">
            <div class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                <div class="custom-block-profile-image-wrap mb-4">
                    <img src="images/medium-shot-happy-man-smiling.jpg" class="custom-block-profile-image img-fluid"
                         alt="">

                    <a href="setting.html" class="bi-pencil-square custom-block-edit-icon"></a>
                </div>

                <p class="d-flex flex-wrap mb-2">
                    <strong>Name:</strong>

                    <span>Thomas Edison</span>
                </p>

                <p class="d-flex flex-wrap mb-2">
                    <strong>Email:</strong>

                    <a href="#">
                        thomas@site.com
                    </a>
                </p>

                <p class="d-flex flex-wrap mb-0">
                    <strong>Phone:</strong>

                    <a href="#">
                        (60) 12 345 6789
                    </a>
                </p>
            </div>

            <div class="custom-block custom-block-bottom d-flex flex-wrap">
                <div class="custom-block-bottom-item">
                    <a href="#" class="d-flex flex-column">
                        <i class="custom-block-icon bi-wallet"></i>

                        <small>Top up</small>
                    </a>
                </div>

                <div class="custom-block-bottom-item">
                    <a href="#" class="d-flex flex-column">
                        <i class="custom-block-icon bi-upc-scan"></i>

                        <small>Scan & Pay</small>
                    </a>
                </div>

                <div class="custom-block-bottom-item">
                    <a href="#" class="d-flex flex-column">
                        <i class="custom-block-icon bi-send"></i>

                        <small>Send</small>
                    </a>
                </div>

                <div class="custom-block-bottom-item">
                    <a href="#" class="d-flex flex-column">
                        <i class="custom-block-icon bi-arrow-down"></i>

                        <small>Request</small>
                    </a>
                </div>
            </div>

            <div class="custom-block custom-block-transations">
                <h5 class="mb-4">Recent Transations</h5>

                <div class="d-flex flex-wrap align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <img src="images/profile/senior-man-white-sweater-eyeglasses.jpg"
                             class="profile-image img-fluid" alt="">

                        <div>
                            <p>
                                <a href="transation-detail.html">Daniel Jones</a>
                            </p>

                            <small class="text-muted">C2C Transfer</small>
                        </div>
                    </div>

                    <div class="ms-auto">
                        <small>05/12/2023</small>
                        <strong class="d-block text-danger"><span class="me-1">-</span> $250</strong>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <img src="images/profile/young-beautiful-woman-pink-warm-sweater.jpg"
                             class="profile-image img-fluid" alt="">

                        <div>
                            <p>
                                <a href="transation-detail.html">Public Bank</a>
                            </p>

                            <small class="text-muted">Mobile Reload</small>
                        </div>
                    </div>

                    <div class="ms-auto">
                        <small>22/8/2023</small>
                        <strong class="d-block text-success"><span class="me-1">+</span> $280</strong>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="images/profile/young-woman-with-round-glasses-yellow-sweater.jpg"
                             class="profile-image img-fluid" alt="">

                        <div>
                            <p><a href="transation-detail.html">Store</a></p>

                            <small class="text-muted">Payment Received</small>
                        </div>
                    </div>

                    <div class="ms-auto">
                        <small>22/8/2023</small>
                        <strong class="d-block text-success"><span class="me-1">+</span> $280</strong>
                    </div>
                </div>

                <div class="border-top pt-4 mt-4 text-center">
                    <a class="btn custom-btn" href="wallet.html">
                        View all transations
                        <i class="bi-arrow-up-right-circle-fill ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="custom-block primary-bg">
                <h5 class="text-white mb-4">Send Money</h5>

                <a href="#">
                    <img src="images/profile/young-woman-with-round-glasses-yellow-sweater.jpg"
                         class="profile-image img-fluid" alt="">
                </a>

                <a href="#">
                    <img src="images/profile/young-beautiful-woman-pink-warm-sweater.jpg"
                         class="profile-image img-fluid" alt="">
                </a>

                <a href="#">
                    <img src="images/profile/senior-man-white-sweater-eyeglasses.jpg" class="profile-image img-fluid"
                         alt="">
                </a>

                <div class="profile-rounded">
                    <a href="#">
                        <i class="profile-rounded-icon bi-plus"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
