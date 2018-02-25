@extends('layouts.app')
 @section('title', 'Profile')
 @section('content')
<div class="row ">
    <div class="col l12 ">
        <h3>Profile</h3>
    </div>
</div>

<div class="row">
    <img src="{{ URL::asset('images/pb.png') }} " alt="Profile Picture" class="picture-large">
    <div class="row">
        <form class="col s12" action="{{ route('userUpdate') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input value="{!! Auth::user()->name !!}" name="name" placeholder="Name" id="name" type="text" class="validate" required
                        disabled>
                    <label for="name">Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input value="{!! Auth::user()->email !!}" name="email" id="email" type="email" class="validate" required disabled>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row right">
                <button disabled class="btn waves-effect waves-light" type="submit">Update
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>
<div class="row ">
    <div class="col l12 ">
        <h5>Packages</h5>
    </div>


    <div class="hide-on-small-and-down">
        <div class="row ">
            @foreach(Auth::user()->packages()->get() as $package)
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
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>

    <div class="hide-on-med-and-up">
            @foreach(Auth::user()->packages()->get() as $package)
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
                        </div>
                        <div class="card-action">
                            <a href="pacd://localhost:8000/api/p/{{ $package->id }}">
                                <i class="material-icons black-text">file_download</i>
                            </a>
                            <a href="{{ $package->git }}">
                                <i class="material-icons black-text">code</i>
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
    @endsection