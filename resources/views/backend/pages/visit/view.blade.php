@extends('backend.master')

@section('title')
<title>Dashboard | Aplikasi</title>
<!-- Tambahkan Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')

<div id="kt_app_content" class="app-content  flex-column-fluid ">


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">

                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-15">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="../../assets/media/avatars/300-1.jpg" alt="image" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">
                                Max Smith </a>
                            <!--end::Name-->

                            <!--begin::Position-->
                            <div class="fs-5 fw-semibold text-muted mb-6">
                                Software Enginer </div>
                            <!--end::Position-->

                            <!--begin::Info-->
                            <div class="d-flex flex-wrap flex-center">
                                <!-- Earnings -->
                                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                    <div class="fs-4 fw-bold text-gray-700">
                                        <span class="w-75px">6,900</span>
                                        <i class="fa-solid fa-arrow-up text-success fs-5 ms-1"></i>
                                    </div>
                                    <div class="fw-semibold text-muted">Earnings</div>
                                </div>

                                <!-- Tasks -->
                                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                    <div class="fs-4 fw-bold text-gray-700">
                                        <span class="w-50px">130</span>
                                        <i class="fa-solid fa-arrow-down text-danger fs-5 ms-1"></i>
                                    </div>
                                    <div class="fw-semibold text-muted">Tasks</div>
                                </div>

                                <!-- Hours -->
                                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                    <div class="fs-4 fw-bold text-gray-700">
                                        <span class="w-50px">500</span>
                                        <i class="fa-solid fa-arrow-up text-success fs-5 ms-1"></i>
                                    </div>
                                    <div class="fw-semibold text-muted">Hours</div>
                                </div>

                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Summary-->

                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
                                Details
                                <span class="ms-2 rotate-180">
                                    <i class="fa-solid fa-caret-down fs-5"></i>
                                </span>
                            </div>

                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">
                                    <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                </a>
                            </span>
                        </div>
                        <!--end::Details toggle-->

                        <div class="separator separator-dashed my-3"></div>

                        <!--begin::Details content-->
                        <div id="kt_customer_view_details" class="collapse show">
                            <div class="py-5 fs-6">

                                <!--begin::Details item-->
                                <div class="fw-bold mt-4">
                                    <i class="fa-solid fa-id-badge me-2 text-primary"></i> Account ID
                                </div>
                                <div class="text-gray-600">ID-45453423</div>
                                <!--end::Details item-->

                                <!--begin::Details item-->
                                <div class="fw-bold mt-4">
                                    <i class="fa-solid fa-envelope me-2 text-primary"></i> Billing Email
                                </div>
                                <div class="text-gray-600">
                                    <a href="mailto:info@keenthemes.com" class="text-gray-600 text-hover-primary">
                                        info@keenthemes.com
                                    </a>
                                </div>
                                <!--end::Details item-->

                                <!--begin::Details item-->
                                <div class="fw-bold mt-4">
                                    <i class="fa-solid fa-location-dot me-2 text-primary"></i> Billing Address
                                </div>
                                <div class="text-gray-600">
                                    101 Collin Street, <br />Melbourne 3000 VIC<br />Australia
                                </div>
                                <!--end::Details item-->

                                <!--begin::Details item-->
                                <div class="fw-bold mt-4">
                                    <i class="fa-solid fa-language me-2 text-primary"></i> Language
                                </div>
                                <div class="text-gray-600">English</div>
                                <!--end::Details item-->

                                <!--begin::Details item-->
                                <div class="fw-bold mt-4">
                                    <i class="fa-solid fa-file-invoice me-2 text-primary"></i> Upcoming Invoice
                                </div>
                                <div class="text-gray-600">54238-8693</div>
                                <!--end::Details item-->

                                <!--begin::Details item-->
                                <div class="fw-bold mt-4">
                                    <i class="fa-solid fa-receipt me-2 text-primary"></i> Tax ID
                                </div>
                                <div class="text-gray-600">TX-8674</div>
                                <!--end::Details item-->

                            </div>
                        </div>
                        <!--end::Details content-->

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->

            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
                    </li>
                    <!--end:::Tab item-->

                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Events &
                            Logs</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->

                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Payment Records</h2>
                                </div>
                                <!--end::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Filter-->
                                    <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                                        <i class="fa-solid fa-plus-square fs-5 me-2"></i> Add payment
                                    </button>
                                    <!--end::Filter-->
                                </div>
                                <!--end::Card toolbar-->

                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0 pb-5">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                        <tr class="text-start text-muted text-uppercase gs-0">
                                            <th class="min-w-100px">Invoice No.</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th class="min-w-100px">Date</th>
                                            <th class="text-end min-w-100px pe-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary mb-1">5870-2291</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>
                                                $1,200.00 </td>
                                            <td>
                                                14 Dec 2020, 8:43 pm </td>
                                            <td class="pe-0 text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions <i class="fa-solid fa-caret-down fs-6 ms-1"></i>
                                                </a>

                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="view.html" class="menu-link px-3">
                                                            View
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card pt-2 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Invoices</h2>
                                </div>
                                <!--end::Card title-->

                                <!--begin::Toolbar-->
                                <div class="card-toolbar m-0">
                                    <!--begin::Tab nav-->
                                    <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">
                                                This Year
                                            </a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">
                                                2020
                                            </a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">
                                                2019
                                            </a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">
                                                2018
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Tab nav-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Tab Content-->
                                <div id="kt_referred_users_tab_content" class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">
                                                        Invoice</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                <tr>
                                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td class="text-success">$38.00</td>
                                                    <td><span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_2" class="py-0 tab-pane fade " role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">
                                                        Invoice</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                <tr>
                                                    <td><a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td><span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>May 30, 2020</td>
                                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_3" class="py-0 tab-pane fade " role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">
                                                        Invoice</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                <tr>
                                                    <td><a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td class="text-success">$31.00</td>
                                                    <td><span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td>Feb 09, 2020</td>
                                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_4" class="py-0 tab-pane fade " role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">
                                                        Invoice</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fs-6 fw-semibold text-gray-600">
                                                <tr>
                                                    <td><a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td class="text-success">$38.00</td>
                                                    <td><span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end"><button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->

                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">

                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Logs</h2>
                                </div>
                                <!--end::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-sm btn-light-primary">
                                        <i class="fa-solid fa-cloud-arrow-down fs-5 me-2"></i> Download Report
                                    </button>


                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body py-0">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                                        <tbody>
                                            <tr>
                                                <td class="min-w-100px">
                                                    <span class="badge badge-light-success">
                                                        <i class="fa-solid fa-circle-check me-1"></i> 200 OK
                                                    </span>
                                                </td>

                                                <td>
                                                    POST /v1/invoices/in_6781_7574/payment </td>
                                                <td class="pe-0 text-end min-w-200px">
                                                    20 Dec 2025, 2:40 pm </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Events</h2>
                                </div>
                                <!--end::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-sm btn-light-primary">
                                        <i class="fa-solid fa-cloud-arrow-down fs-5 me-2"></i> Download Report
                                    </button>

                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                                    <tbody>
                                        <tr>
                                            <td class="min-w-400px">
                                                <a href="#" class="text-gray-600 text-hover-primary me-1">Sean
                                                    Bean</a> has made payment to <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a>
                                            </td>
                                            <td class="pe-0 text-gray-600 text-end min-w-200px">
                                                21 Feb 2025, 9:23 pm </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->

                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->

        <!--begin::Modals-->
        <!--begin::Modal - Add Payment-->
        <div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Add a Payment Record</h2>
                        <!--end::Modal title-->

                        <!--begin::Close-->
                        <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark fs-1"></i>
                        </div>
                        <!--end::Close-->

                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->
                        <form id="kt_modal_add_payment_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Invoice Number</span>

                                    <span class="ms-2" data-bs-toggle="tooltip" title="The invoice number must be unique.">
                                        <i class="fa-solid fa-circle-info text-primary fs-6"></i>
                                    </span>

                                </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="invoice" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Status</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <select class="form-select form-select-solid fw-bold" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
                                    <option></option>
                                    <option value="0">Approved</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Rejected</option>
                                    <option value="3">In progress</option>
                                    <option value="4">Completed</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Invoice
                                    Amount</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="amount" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-15">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Additional Information</span>

                                    <span class="ms-2" data-bs-toggle="tooltip" title="The invoice number must be unique.">
                                        <i class="fa-solid fa-circle-info text-primary fs-6"></i>
                                    </span>
                                </label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">
                                    <i class="fa-solid fa-rotate-left me-1"></i> Discard
                                </button>

                                <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                                    <span class="indicator-label">
                                        <i class="fa-solid fa-paper-plane me-1"></i> Submit
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Card-->
        <!--begin::Modal - Adjust Balance-->
        <div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Adjust Balance</h2>
                        <!--end::Modal title-->

                        <!--begin::Close-->
                        <div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Balance preview-->
                        <div class="d-flex text-center mb-9">
                            <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                <div class="fs-6 fw-semibold mb-2 text-muted">Current Balance
                                </div>
                                <div class="fs-2 fw-bold" kt-modal-adjust-balance="current_balance">US$ 32,487.57
                                </div>
                            </div>
                            <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                <div class="fs-6 fw-semibold mb-2 text-muted">
                                    New Balance

                                    <span class="ms-2" data-bs-toggle="tooltip" title="Enter an amount to preview the new balance.">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </div>
                                <div class="fs-2 fw-bold" kt-modal-adjust-balance="new_balance">
                                    --</div>
                            </div>
                        </div>
                        <!--end::Balance preview-->

                        <!--begin::Form-->
                        <form id="kt_modal_adjust_balance_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Adjustment
                                    type</label>
                                <!--end::Label-->

                                <!--begin::Dropdown-->
                                <select class="form-select form-select-solid fw-bold" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true">
                                    <option></option>
                                    <option value="1">Credit</option>
                                    <option value="2">Debit</option>
                                </select>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Amount</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label mb-2">Add adjustment
                                    note</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Disclaimer-->
                            <div class="fs-7 text-muted mb-15">
                                Please be aware that all manual balance changes will be audited
                                by the financial team every fortnight. Please maintain your
                                invoices and receipts until then. Thank you.
                            </div>
                            <!--end::Disclaimer-->

                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">
                                    Discard
                                </button>

                                <button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
                                    <span class="indicator-label">
                                        Submit
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Card-->
        <!--begin::Modal - New Address-->
        <div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="#" id="kt_modal_update_customer_form">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_update_customer_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Update Customer</h2>
                            <!--end::Modal title-->

                            <!--begin::Close-->
                            <div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-xmark fs-1"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->

                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">

                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <i class="fa-solid fa-circle-info fs-2tx text-primary me-4"></i>
                                    <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 ">
                                        <!--begin::Content-->
                                        <div class=" fw-semibold">
                                            <div class="fs-6 text-gray-700">
                                                Updating customer details will receive a privacy audit.
                                                For more info, please read our <a href="#">Privacy Policy</a>
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->

                                <!--begin::User toggle-->
                                <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">
                                    User Information
                                    <span class="ms-2 rotate-180">
                                        <i class="fa-solid fa-chevron-down fs-3"></i>
                                    </span>
                                </div>
                                <!--end::User toggle-->

                                <!--begin::User form-->
                                <div id="kt_modal_update_customer_user_info" class="collapse show">
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span>Update Avatar</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                                <i class="fa-solid fa-circle-info fs-6 text-primary"></i>
                                            </span>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Image input wrapper-->
                                        <div class="mt-1">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../../assets/media/svg/avatars/blank.svg')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(../../assets/media/avatars/300-1.jpg)"></div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Edit-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="fa-solid fa-pen fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit-->

                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                    <i class="fa-solid fa-xmark fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->

                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                    <i class="fa-solid fa-trash fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Image input wrapper-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="fs-6 fw-semibold mb-2">Name</label>
                                        <input type="text" class="form-control form-control-solid" name="name" value="Sean Bean" />
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span>Email</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
                                                <i class="fa-solid fa-circle-info fs-6 text-primary"></i>
                                            </span>
                                        </label>
                                        <input type="email" class="form-control form-control-solid" name="email" value="sean@dellito.com" />
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <label class="fs-6 fw-semibold mb-2">Description</label>
                                        <input type="text" class="form-control form-control-solid" name="description" />
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::User form-->

                                <!--begin::Billing toggle-->
                                <div class="fw-bold fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_billing_info">
                                    Shipping Information
                                    <span class="ms-2 rotate-180">
                                        <i class="fa-solid fa-chevron-down fs-3"></i>
                                    </span>
                                </div>
                                <!--end::Billing toggle-->

                                <!--begin::Billing form-->
                                <div id="kt_modal_update_customer_billing_info" class="collapse">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Address Line 1</label>
                                        <input class="form-control form-control-solid" name="address1" value="101, Collins Street" />
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Address Line 2</label>
                                        <input class="form-control form-control-solid" name="address2" />
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Town</label>
                                        <input class="form-control form-control-solid" name="city" value="Melbourne" />
                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">State / Province</label>
                                            <input class="form-control form-control-solid" name="state" value="Victoria" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Post Code</label>
                                            <input class="form-control form-control-solid" name="postcode" value="3000" />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span>Country</span>
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                                <i class="fa-solid fa-circle-info fs-6 text-primary"></i>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="fv-row mb-7">
                                        <div class="d-flex flex-stack">
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold">Use as a billing address?</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                            </div>
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_update_customer_billing" checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted" for="kt_modal_update_customer_billing">Yes</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Billing form-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->

                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">
                                <i class="fa-solid fa-rotate-left me-1"></i> Discard
                            </button>
                            <button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    <i class="fa-solid fa-paper-plane me-1"></i> Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>

        <!--end::Modal - New Address-->
        <!--begin::Modal - New Card-->
        <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Add New Card</h2>
                        <!--end::Modal title-->

                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->
                        <form id="kt_modal_new_card_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Name On Card</span>


                                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span> </label>
                                <!--end::Label-->

                                <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Card
                                    Number</label>
                                <!--end::Label-->

                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                    <!--end::Input-->

                                    <!--begin::Card logos-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                        <img src="../../assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                        <img src="../../assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                        <img src="../../assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                    </div>
                                    <!--end::Card logos-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration
                                        Date</label>
                                    <!--end::Label-->

                                    <!--begin::Row-->
                                    <div class="row fv-row">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                <option></option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                                <option value="2033">2033</option>
                                                <option value="2034">2034</option>
                                                <option value="2035">2035</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">CVV</span>


                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span> </label>
                                    <!--end::Label-->

                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                        <!--end::Input-->

                                        <!--begin::CVV icon-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                            <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></i>
                                        </div>
                                        <!--end::CVV icon-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="me-5">
                                    <label class="fs-6 fw-semibold form-label">Save Card for
                                        further billing?</label>
                                    <div class="fs-7 fw-semibold text-muted">If you need more
                                        info, please check budget planning</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    <span class="form-check-label fw-semibold text-muted">
                                        Save Card
                                    </span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->


                            <!--begin::Actions-->
                            <div class="text-center pt-15">
                                <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">
                                    Discard
                                </button>

                                <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                    <span class="indicator-label">
                                        Submit
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Card-->
        <!--end::Modals-->
    </div>
    <!--end::Content container-->
</div>

@endsection
