<!--begin:Menu item-->
<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
    <a href="{{ route('dokter.dashboard') }}" class="menu-link py-3">
        <span class="menu-title">Dashboards</span>
        <span class="menu-arrow d-lg-none"></span>
    </a>
</div>
<!--end:Menu item-->

<!-- Masters -->
<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
    <span class="menu-link py-3">
        <span class="menu-title">Navigation</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-600px">
        <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible py-2 py-lg-6"
            data-kt-menu-dismiss="true">
            <div class="row px-lg-5">
                <!-- Daftar Pasien -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('visit.table') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-tablet-text-down text-dark fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Daftar Pasien</span>
                                <span class="fs-7 fw-semibold text-muted">Lihat semua pasien</span>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- ICD-10 -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('icd.form') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-file-search text-warning fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Kode ICD-10</span>
                                <span class="fs-7 fw-semibold text-muted">Referensi diagnosa</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
