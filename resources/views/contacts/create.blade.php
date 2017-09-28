@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
        {{-- {{ "<p>this is amin </p>" }} --}}
        {{-- {!! "<h1>this is amin </h1>" !!} --}}
        @if($success = session('success'))
            <div class="alert alert-info">{{ $success }}</div>
        @endif
            <div class="header">
                <h4 class="title">Add Contact</h4>
            </div>
            <div class="content">
                {{ Form::open([
                    'url' => '/contacts/create',
                    'files' => true
                ])}}
                    @include('contacts.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="/assets/img/updown.jpeg" alt="..."/>
            </div>
            <div class="content">
                <div class="author">
                     <a href="#">
                    <img class="avatar border-gray" src="/assets/img/default.png" alt="..."/>

                      <h4 class="title">Contact Name<br />
                         <small>username</small>
                      </h4>
                    </a>
                </div>
                <p class="description text-center"> "Some text will goes here about you'r contacts"
                </p>
            </div>
            <hr>
            <div class="text-center">
                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-script')
    $("#add-new-btn").click(function() {
        alert('damn');
    });
@endsection
@include('layouts.message.error')