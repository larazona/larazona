@extends('templates.home')

@section('title', 'Larazona :: Scottsdale, AZ Laravel Meetup')

@section('content')
  <img src="{{ URL::asset('images/larazona.png') }}" />
  <div class="title">Larazona</div>
  <p>You have arrived at Larazona's website, which is coming soon.</p>
  <p>Larazona is a Scottsdale, AZ-based Laravel meetup. For more information, please visit <a href="http://www.meetup.com/larazona">Meetup.com</a></p>
  <a href="mailto:larazonagroup@gmail.com">Email us</a> | <a href="https://www.facebook.com/groups/1427521640814284/">Facebook</a> | <a href="http://www.twitter.com/larazonagroup">Twitter</a>
@stop

