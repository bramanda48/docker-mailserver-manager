@extends('layouts.main')
@section('title', 'Domains')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title w-full text-xl">
                        <span>Domain Settings -</span>
                        <span class="text-muted">mail.malang.dev</span>
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
                            <h4 class="subheader mb-3">Domain settings</h4>
                            <div class="list-group list-group-transparent">
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center active">
                                    Configure DNS Record
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="card-body">
                            <h3 class="card-title">Configure DNS Record</h3>
                            <p class="card-subtitle">Add following records in Your DNS hosting:</p>
                        </div>
                        <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th width="30%">Domain</th>
                                    <th width="15%">Type</th>
                                    <th width="15%">Status</th>
                                    <th width="20%">Required Content</th>
                                    <th width="20%">Current Content</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>manda.web.id</td>
                                    <td>MX</td>
                                    <td>
                                        <span class="badge bg-green-lt">Added</span>
                                    </td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                </tr>
                                <tr>
                                    <td>mail._domainkey.manda.web.id</td>
                                    <td>CNAME DKIM</td>
                                    <td>
                                        <span class="badge bg-red-lt">Not Added</span>
                                    </td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                </tr>
                                <tr>
                                    <td>_dmarc.manda.web.id</td>
                                    <td>TXT DMARC</td>
                                    <td>
                                        <span class="badge bg-red-lt">Not Added</span>
                                    </td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                </tr>
                                <tr>
                                    <td>manda.web.id</td>
                                    <td>TXT SPF</td>
                                    <td>
                                        <span class="badge bg-red-lt">Not Added</span>
                                    </td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                </tr>
                                <tr>
                                    <td>_autodiscover._tcp.manda.web.id</td>
                                    <td>SRV</td>
                                    <td>
                                        <span class="badge bg-red-lt">Not Added</span>
                                    </td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                    <td><input type="text" class="form-control bg-gray-500" readonly></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="p-3 text-xs">
                            <p class="text-muted">* CNAME DKIM record helps prevent spammers and other malicious parties
                                from
                                impersonating
                                your domain.</p>
                            <p class="text-muted">* TXT DMARC record is needed to improve fraudulent e-mail detection.</p>
                            <p class="text-muted">* TXT SPF record is needed for protects Your e-mail from spammers.</p>
                            <p class="text-muted">* SRV record is needed to enable mail service auto discovery which enables
                                easier account setup in e-mail clients.</p>
                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">
                                <a href="#" class="btn btn-outline-dark">
                                    Recheck DNS Record
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
