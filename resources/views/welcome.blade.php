@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-dark p-3">
        <div class="row justify-content-center">
            <div class="col-md-4 align-content-center">
                <img src="/images/logo.png" alt="" class="w-100 bg-white p-3 rounded" >
                <h1 class="h1 text-white p-2 text-center">سوپر گوشت اطمینان</h1>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <price-board></price-board>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
