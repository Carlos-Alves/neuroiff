@extends('layouts.neuroiff')

@section('content')

<section class="pg-form text-center">
    <h1 class="title">Login</h1>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">
			  	<span class="glyphicon glyphicon-facetime-video"></span>
			  </span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Insira:" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Insira:" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Enviar" class="btn btn-form">
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>


    </form>

</section>

    @endsection