@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-footer text-right">
                        <a href="{{ url('/home') }}" class="btn btn-link"><span class="glyphicon glyphicon-arrow-left"></span> Go Back</a>
                    </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('errors'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        @foreach (session('errors')->all() as $error)
                            <ul>
                                <li>{{ $error }}</li>
                            </ul>
                        @endforeach
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create A post
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/post/store') }}" method="post" >
                            {{ csrf_field() }}
                            <input type="text" name="title" placeholder="title" class="form-control">
                            <textarea class="form-control" id="content" name="content" placeholder="Message" rows="5"></textarea>
                            <input type="submit" value="Comment" class="btn btn-primary" style="border-radius: 0;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
