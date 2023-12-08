@extends('layouts.main')
@section('title', 'Domains')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title w-full text-xl">
                                Domains
                            </h1>
                            <div class="card-action">
                                <a href="#" class="btn btn-outline-dark">
                                    <i class="ti ti-playlist-add leading-none mr-1"></i>
                                    Add Domains
                                </a>
                            </div>
                        </div>
                        <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th width="30%">Domain</th>
                                    <th width="25%">Total Account</th>
                                    <th width="30%">Quota</th>
                                    <th width="15%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="fw-bold">
                                            mail.malang.dev
                                            <i class="ti ti-circle-check-filled text-blue" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Verified"></i>
                                        </p>
                                        <span class="text-muted">Created: 04 December 2023 12:28</span>
                                    </td>
                                    <td>
                                        <div class="total-users">
                                            <i class="ti ti-users text-muted mr-2"></i>
                                            5 / <i class="ti ti-infinity"></i>
                                        </div>
                                        <div class="total-users-status text-muted">
                                            4 Active and 1 Inactive
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress progress-separated mb-2">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 44%"
                                                aria-label="Regular"></div>

                                        </div>
                                        <div class="row">
                                            <div class="col-auto d-flex align-items-center pe-2">
                                                <span class="legend me-2 bg-danger"></span>
                                                <span>Reserved</span>
                                                <span
                                                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                                            </div>
                                            <div class="col-auto d-flex align-items-center ps-2">
                                                <span class="legend me-2"></span>
                                                <span>Free</span>
                                                <span
                                                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown" aria-expanded="true">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end" data-popper-placement="top-end"
                                                style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(0px, -2px, 0px);">
                                                <a class="dropdown-item" href="{{ url('/domains/setting') }}">
                                                    Configure DNS Record
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Manage Account
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="fw-bold">
                                            mx01.mailserver.com
                                            <i class="ti ti-help-circle-filled text-yellow-600" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Need action to configure"></i>
                                        </p>
                                        <span class="text-muted">Created: 04 December 2023 12:28</span>
                                    </td>
                                    <td>
                                        <div class="total-users">
                                            <i class="ti ti-users text-muted mr-2"></i>
                                            10 / 20
                                        </div>
                                        <div class="total-users-status text-muted">
                                            All Account Active
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress progress-separated mb-2">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 44%"
                                                aria-label="Regular"></div>

                                        </div>
                                        <div class="row">
                                            <div class="col-auto d-flex align-items-center pe-2">
                                                <span class="legend me-2 bg-danger"></span>
                                                <span>Reserved</span>
                                                <span
                                                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                                            </div>
                                            <div class="col-auto d-flex align-items-center ps-2">
                                                <span class="legend me-2"></span>
                                                <span>Free</span>
                                                <span
                                                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                data-bs-toggle="dropdown" aria-expanded="true">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-end" data-popper-placement="top-end"
                                                style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(0px, -2px, 0px);">
                                                <a class="dropdown-item" href="{{ url('/domains/setting') }}">
                                                    Configure DNS Record
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    Manage Account
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries
                            </p>
                            <ul class="pagination m-0 ms-auto">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i class="ti ti-chevron-left"></i>
                                        prev
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        next
                                        <i class="ti ti-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
