@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
        @if($success = session('success'))
            <div class="alert alert-info">{{ $success }}</div>
        @endif
            <div class="header">
                <h4 class="title">Edit Contact</h4>
            </div>
            <div class="content">
                {{ Form::model( $contact, [
                        'url' => ['/contacts/update', $contact->id],
                        'method' => 'POST',
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
                    @php
                        $photo = ! is_null($contact->photo) ? $contact->photo : 'default.png';
                    @endphp
                    {{ Html::image('uploads/contacts/' . $photo, $contact->name, 
                        [
                            'class' => 'avatar border-gray',
                            'width' => 150
                        ]
                    )}}

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
</div>
@endsection
@include('layouts.message.error')