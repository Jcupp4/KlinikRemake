<!--begin:Menu item-->
<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
    <a href="{{ route('resepsionis.dashboard') }}" class="menu-link py-3">
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
                <!-- Registrasi -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('pasien.form') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-add-user text-info fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Registrasi</span>
                                <span class="fs-7 fw-semibold text-muted">Tambah pasien</span>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Pasien Baru -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('pasien.table') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-profile-user text-primary fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Pasien Baru</span>
                                <span class="fs-7 fw-semibold text-muted">Data pasien baru</span>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Pasien Lama -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('pasien.lama') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-user-square text-primary fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Pasien Lama</span>
                                <span class="fs-7 fw-semibold text-muted">Data pasien lama</span>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Visits -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('visit.create') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-calendar-add text-success fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Visits</span>
                                <span class="fs-7 fw-semibold text-muted">Buat sesi berobat</span>
                            </span>
                        </a>
                    </div>
                </div>

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

                <!-- Rujukan -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('rujukan.table') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-exit-right text-danger fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Tabel Rujukan</span>
                                <span class="fs-7 fw-semibold text-muted">Data rujukan</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
