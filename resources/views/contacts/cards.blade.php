@extends('layouts.app')

@section('content')
@foreach($contacts as $contact)
<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-user">
        <div class="image">
            <img src="/assets/img/updown.jpeg" alt="..."/>
        </div>
        <div class="content">
            <div class="author">
                 <a href="#">
                <img class="avatar border-gray" src="/assets/img/default.png" alt="..."/>

                  <h4 class="title">{{ $contact->name }}<br />
                     <small>{{ $contact->email }}</small>
                  </h4>
                </a>
            </div>
            <p class="description text-center"> "{{ $contact->about }}"
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
@endforeach
<hr>
<div class="clearfix"></div>
{{ $contacts->links() }}
@endsection