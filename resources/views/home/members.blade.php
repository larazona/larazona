@extends('templates.master')

@section('title', 'Larazona :: Members')

@section('content')

    <h1>Members</h1>

    <ul class="list-group">
        @foreach ($members['results'] as $member)
            <?php $member = (object) $member; ?>
            <li class="list-group-item">
                <h3>{{ $member->name }}</h3>

                <p>Location: {{ $member->city . ', ' . $member->state . ' ' . strtoupper($member->country) }}</p>

                <?php $topics = ''; ?>
                @if (count($member->topics))
                @foreach ($member->topics as $topic)
                    <?php $topics .= $topic['name'] . ', '; ?>
                @endforeach
                @endif

                <h4>Meetup Topics</h4>

                <p>{{ (empty($topics)) ? 'None' : substr($topics, 0, -2) }}</p>

                <a class="btn btn-primary" href="{{ $member->link }}">View on Meetup</a>

            </li>
        @endforeach
    </ul>


@stop