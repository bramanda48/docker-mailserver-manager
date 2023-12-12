@extends('layouts.main')
@section('title', 'Domain')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title w-full text-xl">
                        Domain
                    </h1>
                    <div class="card-action">
                        <a role="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                            data-bs-target="#modal-domain-add">
                            <i class="ti ti-playlist-add leading-none mr-1"></i>
                            Add Domain
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="row row-cards mb-3">
                    <div class="col-4">
                        <a href="#" class="!no-underline">
                            <div class="card h-full hover:border-slate-600">
                                <div class="ribbon bg-green capitalize">Active</div>
                                <div class="card-body">
                                    <h2 class="mb-2">mail.malang.dev</h2>
                                    <div>
                                        <span class="badge bg-blue-lt">malang.dev</span>
                                        <span class="badge bg-blue-lt">Kantor Pusat</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <h4 class="mb-2">Account</h4>
                                            <p class="m-0"><span class="text-xl text-muted">3</span> / <i
                                                    class="ti ti-infinity"></i></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="mb-2">Aliases</h4>
                                            <p class="m-0"><span class="text-xl text-muted">3</span> / <i
                                                    class="ti ti-infinity"></i></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="mb-2">Group</h4>
                                            <p class="m-0"><span class="text-xl text-muted">3</span> / <i
                                                    class="ti ti-infinity"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="!no-underline">
                            <div class="card h-full hover:border-slate-600">
                                <div class="ribbon bg-red capitalize">Need Configure</div>
                                <div class="card-body">
                                    <h2 class="mb-2">mx01.mailserver.com</h2>
                                    <div>
                                        <span class="badge bg-blue-lt">mailserver.com</span>
                                        <span class="badge bg-blue-lt">Kantor Cabang</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <h4 class="mb-2">Account</h4>
                                            <p class="m-0"><span class="text-xl text-muted">3</span> / <i
                                                    class="ti ti-infinity"></i></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="mb-2">Aliases</h4>
                                            <p class="m-0"><span class="text-xl text-muted">3</span> / <i
                                                    class="ti ti-infinity"></i></p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4 class="mb-2">Group</h4>
                                            <p class="m-0"><span class="text-xl text-muted">3</span> / <i
                                                    class="ti ti-infinity"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a role="button" class="!no-underline" data-bs-toggle="modal" data-bs-target="#modal-domain-add">
                            <div class="card h-full border-dashed hover:border-slate-600">
                                <div class="card-body flex items-center justify-center">
                                    <div class="border rounded-3xl w-5 h-5 flex items-center justify-center mr-2">
                                        <i class="ti ti-plus"></i>
                                    </div>
                                    <strong>Add Domain</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <ul class="pagination float-right">
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

    <x-modal id="modal-domain-add" title="Add Domain">
        <form method="POST" action="{{ url('/domain/store') }}">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label required">Domain</label>
                    <input type="text" class="form-control mb-1" name="domain"
                        placeholder="Your domain name. ex: mail.example.com"
                        data-rule-regex="^(?!:\/\/)(?=.{1,255}$)((.{1,63}\.){1,127}(?![0-9]*$)[a-z0-9-]+\.?)$"
                        autocomplete="off" autofocus required>
                    <small class="form-hint">
                        An FQDN (Fully Qualified Domain Name) such as <strong>mail.example.com</strong> is required for
                        DMS
                        to function correctly, especially for looking up the correct SSL certificate to use.
                    </small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Label</label>
                    <input type="text" class="form-control mb-1" name="label"
                        placeholder="Label about the domain with comma separated" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <a role="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </a>
                <button type="submit" class="btn btn-primary">
                    <span class="spinner spinner-border spinner-border-sm me-2 hidden" role="status"></span>
                    Submit
                </button>
            </div>
        </form>
    </x-modal>
@endsection

@section('script')
    <script type="text/javascript">
        // FQDN regex references : https://regexr.com/3g5j0
        $("#modal-domain-add form")
            .on("ajaxSuccess", function(event, xhr, settings, data) {
                console.log(event);
                console.log(xhr);
                console.log(settings);
                console.log(data);
            })
            .on("ajaxError", ajaxErrorForm);
    </script>
@endsection
