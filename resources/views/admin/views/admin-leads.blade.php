@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Contact Leads</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="filter"><span class="me-2"><img
                                            src="{{ asset('admin/assets/img/icons/filter-icon.svg') }}"
                                            alt="filter"></span>Filter </a>
                            </li>
                            <li class="">
                                <div class="dropdown dropdown-action" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="download">
                                    <a href="#" class="btn-filters" data-bs-toggle="dropdown" aria-expanded="false"><span><i
                                                class="fe fe-download"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="d-block">
                                            <li>
                                                <a class="d-flex align-items-center download-item"
                                                    href="javascript:void(0);" download=""><i
                                                        class="far fa-file-pdf me-2"></i>PDF</a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center download-item"
                                                    href="javascript:void(0);" download=""><i
                                                        class="far fa-file-text me-2"></i>CVS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="print"><span><i class="fe fe-printer"></i></span> </a>
                            </li>
                            <li>
                                <a class="btn btn-import" href="javascript:void(0);"><span><i
                                            class="fe fe-check-square me-2"></i>Import</span></a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_vendor"><i class="fa fa-plus-circle me-2"
                                        aria-hidden="true"></i>Add Vendors</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div id="filter_inputs" class="card filter-card">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-block mb-3">
                                <label>Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-sm-12">
                    <div class=" card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Created</th>
                                            <th>Balance</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset('admin/assets/img/profiles/avatar-14.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">John Smith <span><span class="__cf_email__"
                                                                data-cfemail="5e343136301e3b263f332e323b703d3133">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 989-438-3131</td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td>$4,220</td>
                                            <td class="d-flex align-items-center">
                                                <a href="ledger.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-eye me-1"></i> Ledger</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_vendor"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset('admin/assets/img/profiles/avatar-15.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">Johnny Charles<span><span class="__cf_email__"
                                                                data-cfemail="52383d3a3c3c2b12372a333f223e377c313d3f">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 843-443-3282</td>
                                            <td>15 Dec 2023, 06:12 PM</td>
                                            <td>$1,862</td>
                                            <td class="d-flex align-items-center">
                                                <a href="ledger.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-eye me-1"></i> Ledger</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_vendor"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset('admin/assets/img/profiles/avatar-16.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">Robert George<span><span class="__cf_email__"
                                                                data-cfemail="384a575a5d4a4c785d40595548545d165b5755">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 917-409-0861</td>
                                            <td>04 Dec 2023, 12:38 PM</td>
                                            <td>$2,789</td>
                                            <td class="d-flex align-items-center">
                                                <a href="ledger.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-eye me-1"></i> Ledger</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_vendor"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset('admin/assets/img/profiles/avatar-17.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">Sharonda Letha<span><span class="__cf_email__"
                                                                data-cfemail="4f3c272e3d20210f2a372e223f232a612c2022">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 956-623-2880</td>
                                            <td>14 Dec 2023, 12:38 PM</td>
                                            <td>$6,789</td>
                                            <td class="d-flex align-items-center">
                                                <a href="ledger.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-eye me-1"></i> Ledger</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_vendor"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset('admin/assets/img/profiles/avatar-18.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">Pricilla Maureen<span><span class="__cf_email__"
                                                                data-cfemail="d9a9abb0bab0b5b5b899bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 956-613-2880</td>
                                            <td>12 Dec 2022, 12:38 PM</td>
                                            <td>$1,789</td>
                                            <td class="d-flex align-items-center">
                                                <a href="ledger.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-eye me-1"></i> Ledger</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_vendor"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="{{ asset('admin/assets/img/profiles/avatar-19.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="profile.html">Randall Hollis<span><span class="__cf_email__"
                                                                data-cfemail="1e6c7f707a7f72725e7b667f736e727b307d7173">[email&#160;protected]</span></span></a>
                                                </h2>
                                            </td>
                                            <td>+1 117-409-0861</td>
                                            <td>04 Dec 2022, 12:38 PM</td>
                                            <td>$1,789</td>
                                            <td class="d-flex align-items-center">
                                                <a href="ledger.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-eye me-1"></i> Ledger</a>
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#edit_vendor"><i
                                                                        class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"
                                                                    data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                        class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
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
        </div>
    </div>
@endsection