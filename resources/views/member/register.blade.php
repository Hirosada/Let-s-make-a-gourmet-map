
@extends('layouts')
@section('contents')
	{{ Form::open(['route' => 'confirm', 'method' => 'post', 'class' => 'member-form']) }}
		@if ($errors->any())
			<div class="alert alert-danger mt-3">
				<ul>
					@foreach ($errors->all() as $error)
						<li class="error_message">※{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="inputs">
			{{ Form::text('text', null, ['placeholder' => 'お名前', 'name' => 'name', 'class' => 'input_form']) }}
			<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
		</div>
		<div class="inputs post_code">
			{{ Form::text('text', null, ['placeholder' => '郵便番号', 'name' => 'postcode', 'class' => 'input_form', 'id' => 'zipcode']) }}
			<i aria-hidden="true">〒</i>
			<a id="zipcode_btn" class="btn_style">住所検索</a>
			<input type="hidden" name="prefecture_code" id="prefecture_code" value="">
		</div>
		<div class="inputs">
			{{ Form::text('text', null, ['placeholder' => '住所', 'name' => 'address', 'class' => 'input_form', 'id' => 'address']) }}
			<i class="fa fa-address-card f2bb" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::text('text', null, ['placeholder' => '電話番号', 'name' => 'phone_number', 'class' => 'input_form']) }}
			<i class="fa fa-phone f095" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::text('email', null, ['placeholder' => 'メールアドレス', 'name' => 'email', 'class' => 'input_form']) }}
			<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::password('password', ['placeholder' => 'パスワード','id' => 'password', 'name' => 'password', 'class' => 'input_form']) }}
			<i class="fa fa-unlock-alt f13e" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::password('password', ['placeholder' => 'パスワード確認用','id' => 'password_confirmation', 'name' => 'password_confirmation', 'class' => 'input_form']) }}
			<i class="fa fa-unlock-alt f13e" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::radio('gender', '1', 'true', ['class'=>'circle']) }}男性
			{{ Form::radio('gender', '2', '', ['class'=>'circle']) }}女性
			{{ Form::radio('gender', '3', '', ['class'=>'circle']) }}どちらでもない
		</div>
		<div class="btn-area">
			{{ Form::submit('送信', ['class'=>'submit']) }}
		</div>
	{{ Form::close() }}
@endsection
