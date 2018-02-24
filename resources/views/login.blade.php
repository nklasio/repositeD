@extends('layouts.app') @section('title', 'Login') @section('content')
<div class="row ">
    <div class="col l12 ">
        <h3>Login</h3>
    </div>

</div>

<div class="row">
    <div class="col s12 center-align">
        <ul class="tabs center-align">
            <li class="tab col s6">
                <a class="right" href="#login">Login</a>
            </li>
            <li class="tab col s6">
                <a class="left" class="active" href="#register">Register</a>
            </li>
        </ul>
    </div>
    <div id="login" class="col s12">
            @if($errors)
            <div class="row">
                <div class="collection">
                    @foreach($errors->all() as $error)
                        <p class="collection-item error">{!! $error !!}</a>
                    @endforeach
                </div>    
            </div>
        @endif
        <div class="row">
            <form class="col s12" action="{{ route('userLogin') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" id="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                        <div class="switch">
                        <label>     
                            <input name="remember" type="checkbox">
                            <span class="lever"></span>
                            Remember me!
                        </label>
                    </div>
                </div>
                <div class="row right"> 
                    <button class="btn waves-effect waves-light" type="submit">Login
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div id="register" class="col s12">
        @if($errors)
            <div class="row">
                <div class="collection">
                    @foreach($errors->all() as $error)
                        <p class="collection-item error">{!! $error !!}</a>
                    @endforeach
                </div>    
            </div>
        @endif
        <div class="row">
            <form class="col s12" action="{{ route('userRegister') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input name="name" placeholder="Name" id="name" type="text" class="validate" required>
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" id="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row right"> 
                    <button class="btn waves-effect waves-light" type="submit">Register
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection