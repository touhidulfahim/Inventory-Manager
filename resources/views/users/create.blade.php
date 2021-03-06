@extends('adminlte::page')

@section('title', 'New user')

@section('content_header')
    <h1>New user</h1>
@stop

@section('content')
	@include('includes.messages')
    <div class="row">
			<div class="col-sm-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">New user</h3>
					</div>
					<div class="box-body">
						{!! Form::open(['action' => 'UsersController@store', 'method' => 'post']) !!}

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  {{Form::label('name', 'Name')}}
                  {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  {{Form::label('email', 'Email address')}}
                  {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email address'])}}
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  {{Form::label('password', 'Password')}}
                  {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                </div>
              </div>
            </div>

						{{ Form::submit('Create user', ['class' => 'pull-right btn btn-default']) }}

						{!! Form::close() !!}
					</div>
				</div>
			</div>
    </div>
@stop

@section('js')
  <script src="{{asset('js/render_select2.js')}}" charset="utf-8"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="{{asset('js/render_ckeditor.js')}}" charset="utf-8"></script>
@endsection
