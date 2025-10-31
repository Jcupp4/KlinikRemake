@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
    <!-- Tambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">

            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">


                <!--begin::Toolbar wrapper-->
                <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">


                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            ICD - 10
                        </h1>
                        <!--end::Title-->


                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../index.html" class="text-muted text-hover-primary">
                                    Dashboard </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Menu </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-900">
                                ICD - 10 </li>
                            <!--end::Item-->

                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center pt-4 pb-7 pt-lg-1 pb-lg-2">
                        <!--begin::Wrapper-->
                        <div class="me-3">
                            <!--begin::Menu-->
                            <a href="#" class="btn btn-sm btn-flex bg-body fw-bold" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Filter
                            </a>



                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_68cacccf42f27">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->

                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->


                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple data-kt-select2="true"
                                                data-close-on-select="false" data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_68cacccf42f27" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->

                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">
                                                    Author
                                                </span>
                                            </label>
                                            <!--end::Options-->

                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked" />
                                                <span class="form-check-label">
                                                    Customer
                                                </span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->

                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="notifications" checked />
                                            <label class="form-check-label">
                                                Enabled
                                            </label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>

                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1--> <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Button-->

                        <!--end::Button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div class="col-xl-12 d-flex flex-column">
                    <!-- Card Header Dokter -->
                    <!--begin::Form-->
                    <!--end::Form-->


                    <!--begin::Toolbar-->
                    <!--end::Toolbar-->

                    <!--begin::Tab Content-->
                    <!-- Pastikan ini di <head> layout utama -->
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
                        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

                    <div class="tab-content">
                        <!--begin::Tab pane Card-->
                        <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                            <div class="card-body pt-0">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="tbody .form-check-input" />
                                                </div>
                                            </th>
                                            <th class="min-w-50px text-center">No</th>
                                            <th class="min-w-100px">Kode</th>
                                            <th class="min-w-250px">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        @forelse ($icds as $index => $icd)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $icd->id }}" />
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    {{ ($icds->currentPage() - 1) * $icds->perPage() + $index + 1 }}
                                                </td>
                                                <td>{{ $icd->code }}</td>
                                                <td class="fw-bold fs-6">{{ $icd->description }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">Tidak ada data ICD
                                                    ditemukan.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <div class="mt-3">
                                    {{ $icds->links() }}
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex flex-stack flex-wrap pt-10">
                                <div class="fs-6 fw-semibold text-gray-700">
                                    Showing 1 to 10 of 50 entries
                                </div>
                                <ul class="pagination">
                                    <li class="page-item previous"><a href="#" class="page-link"><i
                                                class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item next"><a href="#" class="page-link"><i
                                                class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Tab pane Card-->

                        <!--begin::Tab pane Table-->
                        <!--end::Tab Content-->

                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Content wrapper-->
            @endsection
