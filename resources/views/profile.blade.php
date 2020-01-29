@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile </div>

                <div class="panel-body">
                    Userame:  {{ Auth::user()->name }}<br>
                    <hr>
                   Email:  {{ Auth::user()->email }}
                   <hr>
                  Your ID:  {{ Auth::user()->id }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
