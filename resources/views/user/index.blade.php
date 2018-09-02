@extends('layouts.app')
@section('title','user')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Users</div>
                <div class="card-body">
                    <a href="/user/create" class="btn btn-danger"><i class="far fa-plus-square"></i> Create New</a>
                    <hr>
                    @include('alert')
                    <table class="table table-bordered" id="users-table">
                            <thead>
                                <tr>
                                    <th width="10">NO</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th width="53">Action</th>
                                </tr>
                            </thead>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/user/json',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
