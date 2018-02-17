@extends('layouts.app') @section('title', 'Packages') @section('content')
<div class="row ">
    <div class="col l7 ">
        <h3>Packages</h3>
    </div>
  
</div>

<div class="row ">
        <div class="col l12 ">
        <div class="card horizontal hoverable ">
            <div class="card-image ">
                <img class="package-logo " src="{{ $package->imageUrl }}" alt="{!! $package->name !!} logo ">
            </div>
            <div class="card-stacked ">
                <div class="card-content ">
                    <span class="myCardTitle ">{!! $package->name !!}</span>
                    <p>{!! $package->description !!}</p>
                </div>
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
</div>
@endsection 