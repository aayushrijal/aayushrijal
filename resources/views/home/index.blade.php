@extends('layouts.welcome')

@section('content')
    <div class="hero">
        <div class="content-wrapper">
            <div class="content">
                <div class="header-title">
                    Aayush Rijal
                </div>
                <a href="{{ route('home')}}" class="btn btn-primary-n btn-lg">Installing website, please wait...</a>
            </div>
        </div>
    </div>
@endsection