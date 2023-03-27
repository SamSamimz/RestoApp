@extends('layouts.app')
@include('partials.links')
@section('main')
    <section style="background-color:#282731">
        <div class="container d-flex align-items-center justify-content-center" style="height:100vh">
            <div class="col-6 mx-auto">
            <div class="px-4 py-2 rounded bg-white">
                <h4 class="text-center py-3">Login to RestoApp</h4>
                @if(session()->has('invalid'))
                    <p class="alert alert-danger text-center">{{session('invalid')}}</p>
                @endif
                <form action="{{route('login.store')}}" method="POST">
                    @csrf
                    <x-input type="email" name="email" label="Email" placeholder="Enter Email..."/>
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <x-input type="password" name="password" label="Password" placeholder="Enter Password..."/>
                    @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <button type="submit" class="btn bg-primary text-white">Login</button>
                    <a class="float-right py-2" href="{{route('register')}}">Don't have an account?</a>

                </form>
            </div>
            </div>
        </div>
    </section>
@endsection
