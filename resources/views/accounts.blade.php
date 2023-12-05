@extends('layouts.main')
@section('title', 'Accounts')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title w-full text-xl">
                                Accounts
                            </h1>
                            <div class="card-action flex">
                                <a href="#" class="btn btn-outline-dark mr-1">
                                    <i class="ti ti-cloud-upload leading-none mr-1"></i>
                                    Import Account
                                </a>
                                <a href="#" class="btn btn-outline-dark">
                                    <i class="ti ti-playlist-add leading-none mr-1"></i>
                                    Add Account
                                </a>
                            </div>
                        </div>
                        <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%"></th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Last Login</th>
                                    <th width="10%">Status</th>
                                    <th width="30%">Quota</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="avatar me-2">BR</span></td>
                                    <td>
                                        <a href="{{ url('/accounts/setting') }}" class="fw-bold">Bramanda Febri Suwandi</a>
                                    </td>
                                    <td>bram@malang.dev</td>
                                    <td>05 December 2023 13:21</td>
                                    <td>
                                        <span class="badge bg-green-lt">Active</span>
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
                                </tr>
                                <tr>
                                    <td><span class="avatar me-2">JJ</span></td>
                                    <td>
                                        <a href="{{ url('/accounts/setting') }}" class="fw-bold">Jhony Joe</a>
                                    </td>
                                    <td>bram@manda.test</td>
                                    <td>05 December 2023 13:21</td>
                                    <td>
                                        <span class="badge bg-warning-lt">Suspended</span>
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
