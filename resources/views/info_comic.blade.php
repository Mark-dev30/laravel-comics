@extends('layout.app')

@section('content')
<div class="container">
    <div class="row section-blue">
        
    </div>
    <div class="row">
        <div class="col-6">
            <div class="info-comic">
                <h3>{{$single['title']}}</h3>
                <div>
                    <div class="row">
                        <div class="col-8 d-flex">
                            <p>U.S Price: {{$single['price']}}</p>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="col-4">
                            <p>Check Availability </p>
                        </div>
                    </div>
                </div>
                <p>
                    {{$single['description']}}
                </p>
            </div>
        </div>
        <div class="col-6">
            <div class="advertusement">
                <p>Adversiment</p>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="talent">
                    <h4>Talent</h4>
                    <div class="row">
                        <div class="col-6">
                            <p>Art by:</p>
                        </div>
                        <div class="col-6">
                            <p>
                                @foreach ($single['artists'] as $artist)
                                    <a href="#">{{$artist}},</a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Written by:</p>
                        </div>
                        <div class="col-6">
                            <p>
                                @foreach ($single['writers'] as $writer)
                                    <a href="#">{{$writer}},</a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="Specs">
                    <h4>Specs</h4>
                    <div class="row">
                        <div class="col-6">
                            <p>Series</p>
                        </div>
                        <div class="col-6">
                            <p><a href="">{{$single['series']}}</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>U.S Price:</p>
                        </div>
                        <div class="col-6">
                            <p>{{$single['price']}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>On Sale Date:</p>
                        </div>
                        <div class="col-6">
                            <p>{{$single['sale_date']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <p>Digital Comics</p>
            </div>
            <div class="col-3">
                <p>Shop DC</p>
            </div>
            <div class="col-3">
                <p>Comic Shop Locator</p>
            </div>
            <div class="col-3">
                <p>Subscriptions</p>
            </div>
        </div>
    </div>
    
    
</div>

@endsection
