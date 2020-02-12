@extends('default')

@section('content')
    <div class = "row">

        <div style="text-align : center; width: 100%;">
            <h2 class="pading-top"> Contact </h2>
        </div>

        <div class ="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin: auto">

        <form action="{{ route('contact_path') }}" method="POST">

            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name" class="control-label">Nom</label>
                <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Votre nom...">
                {!! $errors->first('name', '<span class="help-block"> :message </span>') !!}
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email" class="control-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Votre email...">
                {!! $errors->first('email', '<span class="help-block"> :message </span>') !!}
            </div>

            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                <label for="message" class="control-label sr-only">Message</label>
                <textarea cols="10" rows="7" name="message" id="message" class="form-control" required="required"></textarea>
                {!! $errors->first('message', '<span class="help-block"> :message </span>') !!}
            </div>

                <div class="form-group">
                        <button class="btn btn-primary btn-block">Envoyez &raquo; </button>
                </div>

            </form>


        </div>

    </div>
@endsection

