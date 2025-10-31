<!--begin:Menu item-->
<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
    <a href="{{ route('farmasi.dashboard') }}" class="menu-link py-3">
        <span class="menu-title">Dashboards</span>
        <span class="menu-arrow d-lg-none"></span>
    </a>
</div>
<!--end:Menu item-->

<!--begin:Menu item-->
<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
    <span class="menu-link py-3">
        <span class="menu-title">Inventory</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-600px">
        <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible py-2 py-lg-6"
            data-kt-menu-dismiss="true">
            <div class="row px-lg-5">
                <!-- Dokter -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('medicine.table') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-user-tick text-primary fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Medicine</span>
                                <span class="fs-7 fw-semibold text-muted">Kelola data obat</span>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Resepsionis -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('category.table') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-people text-success fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Category</span>
                                <span class="fs-7 fw-semibold text-muted">Kelola kategori obat</span>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Farmasi -->
                <div class="col-lg-6 py-1">
                    <div class="menu-item p-0 m-0">
                        <a href="{{ route('transactions.table') }}" class="menu-link active">
                            <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                <i class="ki-duotone ki-capsule text-warning fs-1"></i>
                            </span>
                            <span class="d-flex flex-column">
                                <span class="fs-6 fw-semibold text-gray-800">Transactions</span>
                                <span class="fs-7 fw-semibold text-muted">Kelola stok keluar/masuk, dll</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
