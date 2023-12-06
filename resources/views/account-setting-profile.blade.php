@extends('layouts.main')
@section('title', 'Account')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title w-full text-xl">
                        <span>Account Settings -</span>
                        <span class="text-muted">bram@malang.dev</span>
                    </h1>
                    <div class="card-action">
                        {{-- <a href="#" class="btn btn-outline-danger">
                        <i class="ti ti-playlist-add leading-none mr-1"></i>
                        Reset All Settings
                    </a> --}}
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-3 d-none d-md-block border-end">
                        <div class="card-body">
                            <h4 class="subheader mb-3">Overview</h4>
                            <div class="list-group list-group-transparent">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center active">
                                    Account Information
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    Email Filters
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    Email Aliases
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    Forwarding Email
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    Quota and Folder Size
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    Account Activity
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="p-4">
                            <h2 class="mb-4 text-xl fw-bold">Account Information</h2>
                            <div>
                                <h3 class="card-title">Profile Details</h3>
                                <div class="row align-items-center mb-3">
                                    <div class="col-auto">
                                        <span class="avatar avatar-xl"
                                            style="background-image: url(https://preview.tabler.io/static/avatars/000m.jpg)"></span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn">Change avatar</a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-ghost-danger">Delete avatar</a>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">First Name <span class="text-muted">(Optional)</span></div>
                                        <input type="text" class="form-control" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md">
                                        <div class="form-label">Last Name <span class="text-muted">(Optional)</span></div>
                                        <input type="text" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="card-title mt-4">Password</h3>
                                <p class="card-subtitle">You can set a permanent password if you don't want to use temporary
                                    login codes.</p>
                                <div class="row g-2">
                                    <div class="col-4">
                                        <input type="text" class="form-control w-full" placeholder="Type new password">
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn">
                                            <i class="ti ti-refresh mr-1"></i> Generate
                                        </a>
                                        <a href="#" class="btn">
                                            <i class="ti ti-link mr-1"></i> Create Magic Link
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="card-title mt-4">Status</h3>
                                <p class="card-subtitle">You can set a permanent password if you don't want to use temporary
                                    login codes.</p>
                                <div class="row g-1">
                                    <div class="col-5">
                                        <div class="btn-group w-100"role="group">
                                            <input type="radio" class="btn-check" name="btn-radio-basic"
                                                id="btn-radio-basic-1" autocomplete="off" checked>
                                            <label for="btn-radio-basic-1" type="button" class="btn">Active</label>
                                            <input type="radio" class="btn-check" name="btn-radio-basic"
                                                id="btn-radio-basic-2" autocomplete="off">
                                            <label for="btn-radio-basic-2" type="button" class="btn">Suspended</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <a href="#" class="btn btn-outline-dark">
                                    Save and continue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
