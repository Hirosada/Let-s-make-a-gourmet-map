
@extends('layouts')
@section('contents')
	{{ Form::open(['route' => 'post_regiser', 'method' => 'post', 'class' => 'member-form']) }}
		<div class="inputs">
			{{ Form::text('text', null, ['placeholder' => 'お名前', 'name' => 'member_name', 'class' => 'input_form']) }}
			<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::text('email', null, ['placeholder' => 'メールアドレス', 'name' => 'member_email', 'class' => 'input_form']) }}
			<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::password('password', ['placeholder' => 'パスワード', 'name' => 'member_password', 'class' => 'input_form']) }}
			<i class="fa fa-unlock-alt f13e" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::password('password', ['placeholder' => 'パスワード確認用', 'name' => 'member_password', 'class' => 'input_form']) }}
			<i class="fa fa-unlock-alt f13e" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::text('text', null, ['placeholder' => '電話番号', 'name' => 'member_phone', 'class' => 'input_form']) }}
			<i class="fa fa-phone f095" aria-hidden="true"></i>
		</div>
		<div class="inputs post_code">
			{{ Form::text('text', null, ['placeholder' => '郵便番号', 'name' => 'member_postcode', 'class' => 'input_form', 'id' => 'zipcode']) }}
			<i aria-hidden="true">〒</i>
			<a id="zipcode_btn" class="btn btn--orange">住所検索</a>
		</div>
		<div class="inputs">
			{{ Form::text('text', null, ['placeholder' => '住所', 'name' => 'member_adress', 'class' => 'input_form', 'id' => 'address']) }}
			<i class="fa fa-address-card f2bb" aria-hidden="true"></i>
		</div>
		<div class="inputs">
			{{ Form::radio('menber_gender', '1', 'true', ['class'=>'circle']) }}男
			{{ Form::radio('menber_gender', '2', '', ['class'=>'circle']) }}女
			{{ Form::radio('menber_gender', '3', '', ['class'=>'circle']) }}どちらでもない
		</div>
		<div class="btn-area">
			{{ Form::submit('送信', ['class'=>'submit']) }}
		</div>
	{{ Form::close() }}
@endsection
