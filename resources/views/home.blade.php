@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thank you</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are now logged in!
                        <p>You can use the drop-down to view your Profile or to Logout.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
