@extends('layout.mainlayout')
@section('content')
    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <h1 style="alignment: center">404</h1>
            </div>
            <div class="row">
                <h2>Oops, it seems that this page is not exist</h2>
            </div>
            <div class="row">
                <h4>Please, return to the <a href="<?php echo route( 'home' ); ?>">homepage</a> and try one more time
                </h4>
            </div>
        </div>
    </div>
@endsection