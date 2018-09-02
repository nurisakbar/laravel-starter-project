@extends('layouts.app')
@section('title','Input Data User')
@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data User</div>

                <div class="card-body">

                    @include('validation_error')
                    
                    {{ Form::open(['url'=>'user'])}}

                        @csrf
                        @include('user.form')
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button class="btn btn-primary" type="submit"><i class="far fa-save"></i> Save</button>
                                <a href="/user" class="btn btn-primary"><i class="fas fa-backward"></i> Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
