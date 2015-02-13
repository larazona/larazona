@extends('templates.home')

@section('title', 'Larazona :: Scottsdale, AZ Laravel Meetup')

@section('content')
  <img src="{{ URL::asset('images/larazona.png') }}" />
  <div class="title">Larazona</div>
  <p>You have arrived at Larazona's website, which is coming soon.</p>
  <p>For more information, please visit <a href="http://www.meetup.com/larazona">Meetup.com</a></p>
  <a href="mailto:larazonagroup@gmail.com">Email us</a>
@stop

