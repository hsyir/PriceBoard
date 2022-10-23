@extends('layouts.front')
@section('content')
    <div class="container-fluid bg-dark vh-100 ">
        <div class="row justify-content-center h-100">
            <div class="col-md-2 align-content-center p-0">
                <div class="row h-100">
                    <div class="col-md-12 justify-content-center text-center">
                        <img src="images/full-logo.png" alt="" class="w-75   ">
                    </div>
                    <div class="col-md-12 align-self-end mb-5 text-center p-0">
                        <h3 class="h1 text-white text-center">
                            {{ \Hekmatinasser\Verta\Facades\Verta::format(" l d F Y",true) }}
                        </h3>
                        <span class="d-inline-block "> <clock2></clock2></span>
                    </div>
                </div>
            </div>
            <div class="col-md-10 p-0">
                <div class="card p-0">
                    <div class="card-body py-0">
                        <price-board></price-board>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
