
@extends('layouts')
@section('contents')

<div>
	{{ Form::open(['route' => 'post_regiser', 'method' => 'post', 'class' => 'member-comfirm']) }}
		<h1 class="contact_title">確認画面</h1>
		<div>
			<div class="comfirm_container">
				<label class="content_title">お名前</label>
				<hr>
				<p class="post_data">{{ $request->member_name }}</p>
				<input type="hidden" name="member_name" value="{{ $request->member_name }}" />
			</div>
			<div class="comfirm_container">
				<label class="content_title">郵便番号</label>
				<hr>
				<p class="post_data">{{ $request->member_postcode }}</p>
				<input type="hidden" name="member_postcode" value="{{ $request->member_postcode }}" />
			</div>
			<div class="comfirm_container">
				<label class="content_title">住所</label>
				<hr>
				<p class="post_data">{{ $request->member_adress }}</p>
				<input type="hidden" name="member_adress" value="{{ $request->member_adress }}" />
				<input type="hidden" name="prefecture_code" id="prefecture_code" value="{{ $request->prefecture_code }}">
			</div>
			<div class="comfirm_container">
				<label class="content_title">電話番号</label>
				<hr>
				<p class="post_data">{{ $request->member_phone }}</p>
				<input type="hidden" name="member_phone" value="{{ $request->member_phone }}" />
			</div>
			<div class="comfirm_container">
				<label class="content_title">メールアドレス</label>
				<hr>
				<p class="post_data">{{ $request->member_email }}</p>
				<input type="hidden" name="member_email" value="{{ $request->member_email }}" />
			</div>
			<div class="comfirm_container">
				<label class="content_title">パスワード</label>
				<hr>
				<p class="post_data">{{ $request->member_password }}</p>
				<input type="hidden" name="member_password" value="{{ $request->member_password }}" />
			</div>
			<div class="comfirm_container">
				<label class="content_title">性別</label>
				<hr>
				<p class="post_data">{{ $gender_array[$request->member_gender]}}</p>
				<input type="hidden" name="member_gender" value="{{ $request->member_gender }}" />
			</div>
		</div>
		<div class="btn-area">
			<input type="button" class="back_btn" value="内容を修正する" onclick="history.back(-1)">
			{{ Form::submit('この内容で登録する', ['class'=>'submit']) }}
		</div>
	{{ Form::close() }}
</div>
</body>
</html>
@endsection