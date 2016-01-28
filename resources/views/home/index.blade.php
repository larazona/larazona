@extends('templates.home')

@section('title', 'Larazona :: Scottsdale, AZ Laravel Meetup')

@section('content')
  <div class="row" style="margin-bottom: 20px;">
    <div class="col-sm-4">
        <a href="http://www.meetup.com/larazona"><img class="img-responsive" src="{{ URL::asset('images/larazona.png') }}" alt="Larazona logo"/></a>
    </div>

    <div class="col-sm-8">
        <div class="title">Larazona</div>

        <hr />

        <p class="lead">"You have arrived" at Larazona's website.</p>
        <p>Larazona is a Scottsdale, AZ-based Laravel meetup.<br /> For more information, please visit <a href="http://www.meetup.com/larazona">Meetup.com</a></p>

        <p>Sign up for the meetup group, as that's how we stay in touch <br />with our members and announce each month's topic.</p>
    </div>
  </div>

  <div class="row" style="text-align: left">
      <div class="col-sm-4">
          <div class="well">
              <h3>Contact Information</h3>

              <p><a href="mailto:larazonagroup@gmail.com">Email us</a> | <a href="https://www.facebook.com/groups/1427521640814284/">Facebook</a> | <a href="http://www.twitter.com/larazonagroup">Twitter</a></p>

              <p><strong>Address:</strong> 7201 E. Princess Blvd, Scottsdale, AZ</p>

              <hr />

              <h4>Organizer</h4>

              <p>You can reach Larazona organizer Scott Hummel at <a href="mailto:scotthummel@icloud.com">this email address</a>. We'll be happy to post job listings or other items of interest to our group. Please no emails about website SEO or expanding the reach of the website.  This website is for our members.</p>

              <hr />

              <h4>Members</h4>

              <a class="btn btn-sm btn-primary" href="/members">List of Members</a>
          </div>

          <h3>February's Topic</h3>

          <p>Scott will be giving a presentation on "Up and Running With Stripe." He will explain how to sign up for the Stripe payment gateway, how to install Stripe and and how to use the Stripe API.  There will be code samples from one of his projects.  He'll also display the dashboard so you can see what transactions look like in Stripe.</p>
      </div>

      <div class="col-sm-8">
          <h2 style="text-align: center;">About Larazona</h2>

          <div class="row">
              <div class="col-sm-6">
                  <p>Larazona is a meetup based in Scottsdale, Arizona.  We meet monthly to discuss topics of interest to a Laravel developer.  Anyone with an interest in Laravel is welcome.  If you're not sold on Laravel, you're still welcome to come check us out and see if Laravel might be a framework solution for you.  If you're not using a framework, you're still welcome.  Our goal is to reach any current or potential Laravel developer.</p>
                  <p>We're only a few months old &mdash; we formed in January 2015 &mdash; but already we've been offering a diverse array of topics for our developers.  We've had several topics on Laravel itself, including an introduction to the framework, Elixir, and how to mix Laravel with Angular.  We also had an excellent presentation on how to use Doctrine with Laravel (instead of Eloquent) and then how to test the code.  Then we had a couple of sessions on Redis.</p>
                  <p>Next on our agenda is a collaborative project with our entire group, where we code a ticketing resale site, using the same API as Orbitz and Cheap Tickets use.  We'll be working out of a Github repo and making collaborative decisions on how best to approach the API, and what we can do it it.  Coding the project will take several sessions.  If all goes well, we may take it as far as production.  So come get some actually Laravel coding experience.</p>

              </div>
              <div class="col-sm-6">
                  <p>Our philosophy is that you learn by doing.  That's why we have created ticketing resale site project.  We want to give our members the chance to get hands-on experience in coding Laravel.  And doing it in a collaborative environment will foster skills in working with others.</p>
                  <p>We also try to share the duties in giving presentations.  Larazona is a team.  We don't want to monopolize a single presenter.  We want all of our members to give at least one presentation at some point.  After all, everybody has one skill they could share, something in which they really excel.  So we're always open to new topics, whether you want to present on the topic or not.  Suggest a topic and we can probably find someone to present it.</p>
                  <p>In short, Larazona is a dynamic and growing group of developers.  We've got 80-some developers signed up through <a href="http://www.meetup.com/larazona">Meetup.com</a> and we're growing nearly every day.  We have a core group of developers as well as an ever-changing array of newcomers.  So come meet some great developers, learn some best practices and stay for the pizza.  Yes, there's usually food.  We meet in Scottsdale, at the fabuluous Spear Education facility at Scottsdale Road and Princess Boulevard.</p>
              </div>
          </div>

      </div>
  </div>


@stop

