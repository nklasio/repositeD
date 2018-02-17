@extends('layouts.app') @section('title', 'Packages') @section('content')
<div class="row ">
    <div class="col l7 ">
        <h3>Packages</h3>
    </div>
    <div class="input-field col l5" style="margin-top: 36px;">
        <i class="material-icons prefix">search</i>
        <input type="text" id="search-name" name="search-name">
        <label for="search-name">Search Name</label>
      </div>
</div>

@foreach ($packages->chunk(3) as $packageChunk)
<div class="row ">
    
        @foreach($packageChunk as $package)
        <div class="col l4 ">
        
            <div class="card horizontal hoverable ">
                <div class="card-image ">
                    <img class="package-logo " src="{{ $package->imageUrl }}" alt="{!! $package->name !!} logo ">
                </div>
                <div class="card-stacked ">
                        <a class="cardLink" href="/p/{{ $package->id }}"><div class="card-content ">
                        <span class="myCardTitle ">{!! $package->name !!}</span>
                        <p>{!! substr($package->description, 0, 35) !!}...</p>
                    </div></a>
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
@endforeach 
@endsection 
@section('pageination') 
{{ $packages->links('pagination.default') }} 
@endsection