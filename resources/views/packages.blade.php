@extends('layouts.app') @section('title', 'Packages') @section('content')
<div class="row">
    <div class="col s12 m12 l12">
        <h3 class="hide-on-med-and-down">Packages</h3>
        <h5 class="hide-on-med-and-up">Packages</h5>
    </div>

    @foreach ($packages->chunk(3) as $packageChunk)
    <div class="hide-on-small-and-down">
        <div class="row ">
            @foreach($packageChunk as $package)
            <div class="col s12 m6 l4 ">

                <div class="card horizontal hoverable ">
                    <div class="card-image ">
                        <img class="package-logo " src="{{ $package->imageUrl }}" alt="{!! $package->name !!} logo ">
                    </div>
                    <div class="card-stacked ">
                        <a class="cardLink" href="/p/{{ $package->id }}">
                            <div class="card-content ">
                                <span class="myCardTitle ">{!! $package->name !!}</span>
                                <p>{!! substr($package->description, 0, 35) !!}...</p>
                            </div>
                        </a>
                        <div class="card-action ">
                            <a href="pacd://localhost:8000/api/p/{{ $package->id }}" class="right ">
                                <i class="material-icons black-text ">file_download</i>
                            </a>
                            <a href="{{ $package->git }}" class="right ">
                                <i class="material-icons black-text ">code</i>
                            </a>
                            <a href="# " class="right ">
                                <i class="material-icons black-text ">account_box</i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
    <div class="hide-on-med-and-up">
        @foreach($packageChunk as $package)
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-image">
                        <img class="activator" src="{{ $package->imageUrl }}" alt="{!! $package->name !!} logo">
                    </div>
                    <div class="card-content">
                        <span class="myCardTitle activator">{!! $package->name !!}
                            <i class="material-icons right">more_vert</i>
                        </span>
                        </span>

                    </div>
                    <div class="card-action">
                        <a href="pacd://localhost:8000/api/p/{{ $package->id }}">
                            <i class="material-icons black-text">file_download</i>
                        </a>
                        <a href="{{ $package->git }}">
                            <i class="material-icons black-text">code</i>
                        </a>
                        <a href="#">
                            <i class="material-icons black-text">account_box</i>
                        </a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title myCardTitle">{!! $package->name !!}
                            <i class="material-icons right">close</i>
                        </span>
                        <p>{!! $package->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    
    @endforeach

</div>
@endforeach @endsection @section('pageination') {{ $packages->links('pagination.default') }} @endsection