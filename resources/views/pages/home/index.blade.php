@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col lg 12">
                <h1 class="page_title">Home Page</h1>
            </div>
        </div>
    </div>

@endsection

@push('css')

<style>
    .page_title{
            padding-top: 10vh;
            color: blueviolet;
            text-align: center;
            font-family: cursive;
            font-size: 4ch;
    }
</style>

@endpush
