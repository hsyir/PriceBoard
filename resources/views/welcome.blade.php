@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 align-content-center">
                <img src="/images/logo.png" alt="" class="w-100">
                <h3 class="h1">سوپر گوشت اطمینان</h3>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <price-board></price-board>
                </div>
            </div>
        </div>
    </div>
@endsection
