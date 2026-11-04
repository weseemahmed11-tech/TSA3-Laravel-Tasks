@extends('layouts.app')

@section('content')
    <section class="page-intro"><div class="eyebrow">Task overview</div><h1>Every task, one view.</h1><p>Browse the complete schedule in ascending task-date order.</p></section>
    <div class="cards">
        @foreach ($tasks as $task)
            <article class="card">
                <div class="card-header"><div><h3>{{ $task->title }}</h3><div class="record-id">Task #{{ $task->id }}</div></div><span class="badge {{ $task->status }}">{{ ucfirst($task->status) }}</span></div>
                <dl class="details"><div><dt>Task date</dt><dd>{{ $task->task_date->format('F j, Y') }}</dd></div><div><dt>Status</dt><dd>{{ ucfirst($task->status) }}</dd></div></dl>
            </article>
        @endforeach
    </div>
@endsection
