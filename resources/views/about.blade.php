@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Your About Page
                        @foreach ($posts as $post)
                            <p>This is user {{$post->name . ' ID:'}}</p>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
