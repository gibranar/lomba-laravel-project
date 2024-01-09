@extends('layouts.app2')

<!DOCTYPE html>
<html lang="en">

<head>
    @section('title', 'Dasbor')
</head>

<body>
    @section('content')
        <div class="row g-3">
            {{-- Card Col Start --}}
            {{-- card1 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">Akun Pendaftar</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-shopping-bag-3-line"></i>8,327
                        </h3>
                        {{-- <small><span class="d-inline-flex text-danger">0.7% <i class="ri-arrow-down-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>

            {{-- card2 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">Jumlah Mahasiswa</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-briefcase-4-line"></i>12,105
                        </h3>
                        {{-- <small><span class="d-inline-flex text-success">2.1% <i class="ri-arrow-up-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>


            {{-- card3 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">Data Ketua Lengkap</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-inbox-line"></i> 75<span>%</span>
                        </h3>
                        {{-- <small><span class="d-inline-flex text-danger">0.3% <i class="ri-arrow-down-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>


            {{-- card4 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">Data Usaha Lengkap</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-bar-chart-box-line"></i> 80<span>%</span>
                        </h3>
                        {{-- <small><span class="d-inline-flex text-success">1.2% <i class="ri-arrow-up-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>


            {{-- card5 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">Data Tim Lengkap</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-inbox-line"></i>75
                        </h3>
                        {{-- <small><span class="d-inline-flex text-danger">0.3% <i class="ri-arrow-down-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>


            {{-- card6 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">Tim Terdaftar</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-bar-chart-box-line"></i>80
                        </h3>
                        {{-- <small><span class="d-inline-flex text-success">1.2% <i class="ri-arrow-up-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>


            {{-- card7 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">PT Pendaftar</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-inbox-line"></i>75
                        </h3>
                        {{-- <small><span class="d-inline-flex text-danger">0.3% <i class="ri-arrow-down-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>


            {{-- card8 --}}
            <div class="col-6 col-xl-3">
                <div class="card card-one">
                    <div class="card-body">
                        <label class="card-title fs-sm fw-medium mb-1">Provinsi Pendaftar</label>
                        <h3 class="card-value mb-1">
                            <i class="ri-bar-chart-box-line"></i>80
                        </h3>
                        {{-- <small><span class="d-inline-flex text-success">1.2% <i class="ri-arrow-up-line"></i></span>
                            than last week</small> --}}
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card-one -->
            </div>
            {{-- Card Col end --}}



            <!-- col -->
            <div class="col-xl-12">
                <div class="card card-one">
                    <div class="card-header">
                        <h6 class="card-title">Monthly Growth Revenue</h6>
                        <nav class="nav nav-icon nav-icon-sm ms-auto">
                            <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                            <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                        </nav>
                    </div>
                    <!-- card-header -->
                    <div class="card-body">
                        <table class="datatable-init-export nowrap table dataTable no-footer dtr-inline"
                            data-export-title="Export" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead style="background-color:#5674DA;color:#ffffff">
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="No: activate to sort column descending">No</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Kategori Lomba: activate to sort column ascending">
                                        Kategori Lomba</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Jumlah Tim: activate to sort column ascending">Jumlah Tim
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Jumlah PT: activate to sort column ascending">Jumlah PT
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Jumlah Provinsi: activate to sort column ascending">
                                        Jumlah Provinsi</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Tim UNY: activate to sort column ascending">Tim UNY
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">1</td>
                                    <td>Pemberdayaan Disabilitas (PDS)</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>9</td>
                                    <td>7</td>
                                </tr>
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">2</td>
                                    <td>Pemberdayaan Perempuan (PDP)</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>13</td>
                                    <td>8</td>
                                </tr>
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">3</td>
                                    <td>Industri dan Ekonomi Kreatif (IEK)</td>
                                    <td>0</td>
                                    <td>7</td>
                                    <td>21</td>
                                    <td>12</td>
                                </tr>
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">4</td>
                                    <td>Mitigasi Bencana (MBC)</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>6</td>
                                </tr>
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">5</td>
                                    <td>Teknologi Ramah Lingkungan (TRL)</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>7</td>
                                    <td>4</td>
                                </tr>
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">6</td>
                                    <td>Budidaya (BUD)</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>5</td>
                                </tr>
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">7</td>
                                    <td>Ketahanan Pangan (KTP)</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>2</td>
                                </tr>
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">8</td>
                                    <td>Konservasi Sumber Daya Alam (SDA)</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>2</td>
                                </tr>
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">9</td>
                                    <td>Kesehatan Masyarakat (KSM)</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>6</td>
                                    <td>2</td>
                                </tr>
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">10</td>
                                    <td>Pendidikan (PEN)</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card -->
            </div>



            <div class="row align-items-center">
                <div class="col-7 col-sm-12 col-md-9">
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a
                                    href="#" aria-controls="DataTables_Table_0" data-dt-idx="previous"
                                    tabindex="0" class="page-link">Prev</a></li>
                            <li class="paginate_button page-item active"><a href="#"
                                    aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                    class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"
                                    data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                    aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0"
                                    class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-5 col-sm-12 col-md-3 text-start text-md-end">
                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 -10 of
                        15</div>
                </div>
            </div>  

            {{--             
            <!-- col -->
            <div class="col-md-6 col-xl-5">
                <div class="card card-one">
                    <div class="card-header">
                        <h6 class="card-title">Account Retention</h6>
                        <nav class="nav nav-icon nav-icon-sm ms-auto">
                            <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                            <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                        </nav>
                    </div>
                    <!-- card-header -->
                    <div class="card-body">
                        <div id="flotThresholds" class="flot-chart ht-180 mb-3"></div>
                        <p class="mb-3 fs-xs">
                            Number of customers who have active subscription with you.
                        </p>

                        <div class="card p-3 d-flex flex-row mb-2">
                            <div class="card-icon bg-primary">
                                <i class="ri-bar-chart-grouped-line"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="card-value mb-1">53,100</h4>
                                <label class="card-title fw-medium text-dark mb-1">Expansions</label>
                                <p class="fs-xs text-secondary mb-0 lh-4">
                                    Customers who have upgraded the level of your products or
                                    service.
                                </p>
                            </div>
                        </div>
                        <div class="card p-3 d-flex flex-row">
                            <div class="card-icon bg-ui-02">
                                <i class="ri-bar-chart-grouped-line"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="card-value mb-1">2,884</h4>
                                <label class="card-title fw-medium text-dark mb-1">Cancellations</label>
                                <p class="fs-xs text-secondary mb-0 lh-4">
                                    Customers who have ended their subscription with you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
            <div class="col-md-6 col-xl-4">
                <div class="card card-one">
                    <div class="card-header">
                        <h6 class="card-title">Real Time Sales</h6>
                        <nav class="nav nav-icon nav-icon-sm ms-auto">
                            <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                            <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                        </nav>
                    </div>
                    <!-- card-header -->
                    <div class="card-body">
                        <div class="chart-bar-one"><canvas id="chartBar1"></canvas></div>
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
            <div class="col-md-6 col-xl-4">
                <div class="card card-one">
                    <div class="card-header">
                        <h6 class="card-title">Recent Sellers</h6>
                        <nav class="nav nav-icon nav-icon-sm ms-auto">
                            <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                            <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                        </nav>
                    </div>
                    <!-- card-header -->
                    <div class="card-body p-0">
                        <ul class="people-group">
                            <li class="people-item">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Allan Rey Palban</a></h6>
                                    <span>Customer ID#00222</span>
                                </div>
                                <!-- people-body -->
                                <nav class="nav nav-icon">
                                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                                </nav>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Adrian Moniño</a></h6>
                                    <span>Customer ID#00221</span>
                                </div>
                                <!-- people-body -->
                                <nav class="nav nav-icon">
                                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                                </nav>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Charlene Plateros</a></h6>
                                    <span>Customer ID#00220</span>
                                </div>
                                <!-- people-body -->
                                <nav class="nav nav-icon">
                                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                                </nav>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Analyn Mercado</a></h6>
                                    <span>Customer ID#00219</span>
                                </div>
                                <!-- people-body -->
                                <nav class="nav nav-icon">
                                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                                </nav>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/300/4c5366/fff" alt="" />
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Rolando Paloso</a></h6>
                                    <span>Customer ID#00218</span>
                                </div>
                                <!-- people-body -->
                                <nav class="nav nav-icon">
                                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                                </nav>
                            </li>
                        </ul>
                    </div>
                    <!-- card-body -->
                    <div class="card-footer d-flex justify-content-center">
                        <a href="" class="fs-sm">Manage Customers</a>
                    </div>
                    <!-- card-footer -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
            <div class="col-md-6 col-xl-4">
                <div class="card card-one">
                    <div class="card-header">
                        <h6 class="card-title">Transaction History</h6>
                        <nav class="nav nav-icon nav-icon-sm ms-auto">
                            <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                            <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                        </nav>
                    </div>
                    <!-- card-header -->
                    <div class="card-body p-0">
                        <ul class="people-group">
                            <li class="people-item">
                                <div class="avatar">
                                    <span class="avatar-initial bg-teal fs-20"><i
                                            class="ri-shopping-cart-line"></i></span>
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Purchase from #10322</a></h6>
                                    <span>Oct 21, 2023, 3:30pm</span>
                                </div>
                                <!-- people-body -->
                                <div class="text-end">
                                    <div class="fs-sm">+ $250.00</div>
                                    <span class="d-block fs-xs text-success">Completed</span>
                                </div>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <span class="avatar-initial bg-info fs-20"><i class="ri-coins-line"></i></span>
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Process refund to #00910</a></h6>
                                    <span>Oct 19, 2023, 3:30pm</span>
                                </div>
                                <!-- people-body -->
                                <div class="text-end">
                                    <div class="fs-sm">- $16.50</div>
                                    <span class="d-block fs-xs text-warning">Processing</span>
                                </div>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <span class="avatar-initial bg-primary fs-20"><i class="ri-truck-line"></i></span>
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Process delivery to #44333</a></h6>
                                    <span>Oct 18, 2023, 6:18pm</span>
                                </div>
                                <!-- people-body -->
                                <div class="text-end">
                                    <div class="fs-sm">3 Items</div>
                                    <span class="d-block fs-xs text-info">For pickup</span>
                                </div>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <span class="avatar-initial bg-pink fs-20"><i class="ri-truck-line"></i></span>
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Payment from #023328</a></h6>
                                    <span>Oct 18, 2023, 12:40pm</span>
                                </div>
                                <!-- people-body -->
                                <div class="text-end">
                                    <div class="fs-sm">+ $129.50</div>
                                    <span class="d-block fs-xs text-success">Completed</span>
                                </div>
                            </li>
                            <li class="people-item">
                                <div class="avatar">
                                    <span class="avatar-initial bg-secondary fs-20"><i
                                            class="ri-secure-payment-line"></i></span>
                                </div>
                                <div class="people-body">
                                    <h6><a href="">Payment failed #087651</a></h6>
                                    <span>Oct 15, 2023, 08:09am</span>
                                </div>
                                <!-- people-body -->
                                <div class="text-end">
                                    <div class="fs-sm">$150.20</div>
                                    <span class="d-block fs-xs text-danger">Declined</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- card-body -->
                    <div class="card-footer d-flex justify-content-center">
                        <a href="" class="fs-sm">Manage Transactions</a>
                    </div>
                    <!-- card-footer -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
            <div class="col-xl-5">
                <div class="card card-one">
                    <div class="card-header">
                        <h6 class="card-title">Sales Revenue</h6>
                        <nav class="nav nav-icon nav-icon-sm ms-auto">
                            <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                            <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                        </nav>
                    </div>
                    <!-- card-header -->
                    <div class="card-body p-3 p-xl-4">
                        <div id="vmap" class="ht-200 mb-4"></div>

                        <table class="table table-one">
                            <thead>
                                <tr>
                                    <th>States</th>
                                    <th>Orders</th>
                                    <th>Earnings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-medium">
                                        <span class="badge-dot bg-twitter me-2"></span> California
                                    </td>
                                    <td>12,201</td>
                                    <td>$150,200.80</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">
                                        <span class="badge-dot bg-primary me-2"></span> Texas
                                    </td>
                                    <td>11,950</td>
                                    <td>$138,910.20</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">
                                        <span class="badge-dot bg-teal me-2"></span> Colorado
                                    </td>
                                    <td>11,198</td>
                                    <td>$132,050.00</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">
                                        <span class="badge-dot bg-info me-2"></span> Missouri
                                    </td>
                                    <td>9,885</td>
                                    <td>$127,762.10</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium">
                                        <span class="badge-dot bg-pink me-2"></span> New York
                                    </td>
                                    <td>8,560</td>
                                    <td>$117,087.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
            <div class="col-xl-7">
                <div class="card card-one">
                    <div class="card-header">
                        <h6 class="card-title">Most Recent Earnings</h6>
                        <nav class="nav nav-icon nav-icon-sm ms-auto">
                            <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                            <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                        </nav>
                    </div>
                    <!-- card-header -->
                    <div class="card-body p-3 p-xl-4">
                        <div class="row g-3 mb-4">
                            <div class="col">
                                <div class="earning-item">
                                    <div class="earning-icon bg-primary">
                                        <i class="ri-medal-2-line"></i>
                                    </div>
                                    <h4><span>$</span>1,958,104</h4>
                                    <label>Gross Earnings</label>
                                </div>
                                <!-- earning-item -->
                            </div>
                            <!-- col -->
                            <div class="col">
                                <div class="earning-item">
                                    <div class="earning-icon bg-twitter">
                                        <i class="ri-pie-chart-line"></i>
                                    </div>
                                    <h4><span>$</span>234,769.50</h4>
                                    <label>Tax Witheld</label>
                                </div>
                                <!-- earning-item -->
                            </div>
                            <!-- col -->
                            <div class="col">
                                <div class="earning-item">
                                    <div class="earning-icon bg-success">
                                        <i class="ri-line-chart-fill"></i>
                                    </div>
                                    <h4><span>$</span>1,608,469.50</h4>
                                    <label>Net Earnings</label>
                                </div>
                                <!-- earning-item -->
                            </div>
                            <!-- col -->
                        </div>
                        <!-- row -->

                        <div class="table-responsive mb-4">
                            <table class="table table-two mb-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Sales Count</th>
                                        <th>Gross Earnings</th>
                                        <th>Tax Withheld</th>
                                        <th>% Earnings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>03/05/2023</td>
                                        <td>1,050</td>
                                        <td class="text-success">+ $32,580.00</td>
                                        <td class="text-danger">- $3,023.10</td>
                                        <td>4.5%</td>
                                    </tr>
                                    <tr>
                                        <td>03/04/2023</td>
                                        <td>980</td>
                                        <td class="text-success">+ $30,065.10</td>
                                        <td class="text-danger">- $2,780.00</td>
                                        <td>3.8%</td>
                                    </tr>
                                    <tr>
                                        <td>03/04/2023</td>
                                        <td>954</td>
                                        <td class="text-success">+ $28,994.00</td>
                                        <td class="text-danger">- $2,540.60</td>
                                        <td>3.3%</td>
                                    </tr>
                                    <tr>
                                        <td>03/02/2023</td>
                                        <td>792</td>
                                        <td class="text-success">+ $25,300.90</td>
                                        <td class="text-danger">- $2,144.60</td>
                                        <td>2.9%</td>
                                    </tr>
                                    <tr>
                                        <td>02/28/2023</td>
                                        <td>788</td>
                                        <td class="text-success">+ $24,887.08</td>
                                        <td class="text-danger">- $1,980.00</td>
                                        <td>2.6%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive -->
                        <h6 class="fw-semibold mb-1">
                            <a href="#">Download your earnings in CSV format.</a>
                        </h6>
                        <p class="fs-sm text-secondary mb-0">
                            Open it in a spreadsheet and perform your own calculations,
                            graphing etc. The CSV file contains additional details, such as
                            the buyer location.
                        </p>
                    </div>
                    <!-- card-body -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
        </div>
        <!-- row --> --}}
        @endsection
</body>

</html>
