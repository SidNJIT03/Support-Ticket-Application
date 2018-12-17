@extends('layouts.app')

@section('title', $tickets->title)

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    #{{ $tickets->ticket_id }} - {{ $tickets->title }}
                </div>

                <div class="panel-body">
                    @include('includes.flash')

                    <div class="ticket-info">
                        <p>{{ $tickets->message }}</p>
                        <p>Category : {{ $category->name }}</p>
                        <p>
                            @if ($tickets->status === 'Open')
                                Status : <span class="label label-success">{{ $tickets->status }}</span>
                            @else
                                Status : <span class="label label-danger">{{ $tickets->status }}</span>
                            @endif
                        </p>
                        <p>Created :  {{ $tickets->created_at->diffForHumans() }}</p>
                    </div>

                    <hr>

                    <div class="comments">
                        @foreach ($comments as $comment)
                            <div class="panel panel-@if($tickets->user->id === $comment->user_id) {{"default"}}@else{{"success"}}@endif">
                                <div class="panel panel-heading">
                                    {{ $comment->user->name }}
                                    <span class="pull-right">{{ $comment->created_at->format('Y-m-d') }}</span>
                                </div>

                                <div class="panel panel-body">
                                    {{ $comment->comment }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="comment-form">
                        <form action="{{ url('comment') }}" method="POST" class="form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="ticket_id" value="{{ $tickets->id }}">

                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection