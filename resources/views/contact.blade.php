@extends('layouts.app')

@section('content')
  <h1>Contact</h1>

  {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{ form::label('name', 'Name:') }}
      {{ form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
    </div>
    <div class="form-group">
      {{ form::label('email', 'eMail Address:') }}
      {{ form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter eMail Address']) }}
    </div>
    <div class="form-group">
      {{ form::label('message', 'Message:') }}
      {{ form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Your Message']) }}
    </div>
    <div>
      {{ form::submit('SUBMIT', ['class' => 'btn btn-primary']) }}
    </div>  
  {!! Form::close() !!}
  
@endsection
