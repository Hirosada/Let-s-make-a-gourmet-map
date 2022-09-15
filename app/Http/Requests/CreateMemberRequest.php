<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateMemberRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{

		return [
			'name' => 'required|max:15',
			'postcode' => 'required',
			'address' => 'required',
			'phone_number' => 'required',
			'email' => 'required|email',
			'password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]){7,}^/|confirmed',
			'password_confirmation' => 'required',
		];
	}


	/**
	*バリデーション項目名定義
	* @return array
	*/
	public function attributes()
	{
		return [
			'name' => 'お名前',
			'postcode' => '郵便番号',
			'address' => '住所',
			'phone_number' => '電話番号',
			'email' => 'メールアドレス',
			'password' => 'パスワード',
			'password_comfirmation' => 'パスワード確認用',
		];
	}

	/**
	* 定義済みバリデーションルールのエラーメッセージ取得
	*
	* @return array
	*/
	public function messages()
	{
		return [
			'name.required' => ':attributeは必須項目です。',
			'name.max' => ':attributeは15文字以内で入力してください。',
			'postcode.required' => ':attributeは必須項目です。',
			'adress.required' => ':attributeは必須項目です。',
			'phone.required' => ':attributeは必須項目です。',
			'email.required' => ':attributeは必須項目です。',
			'email.required' => ':attributeの入力値が不正です。',
			'password.required' => ':attributeは必須項目です。',
			'password.regex' => ':attributeはアルファベット大文字、小文字、数字、含む7文字以上で入力してください。',
			'password_comfirm.required' => ':attributeは必須項目です。',
			'password.confirmed' => 'パスワード確認用と入力値が異なります。',
		];
	}
}
