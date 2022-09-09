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
			'member_name' => 'required|max:15',
			'member_postcode' => 'required',
			'member_adress' => 'required',
			'member_phone' => 'required',
			'member_email' => 'required|email',
			'member_password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]){7,}^/|confirmed',
			'member_password_comfirm' => 'required',
		];
	}

	/**
	*バリデーション項目名定義
	* @return array
	*/
	public function attributes()
	{
		return [
			'member_name' => 'お名前',
			'member_postcode' => '郵便番号',
			'member_adress' => '住所',
			'member_phone' => '電話番号',
			'member_email' => 'メールアドレス',
			'member_password' => 'パスワード',
			'member_password_comfirm' => 'パスワード確認用',
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
			'member_name.required' => ':attributeは必須項目です。',
			'member_name.max' => ':attributeは15文字以内で入力してください。',
			'member_postcode.required' => ':attributeは必須項目です。',
			'member_adress.required' => ':attributeは必須項目です。',
			'member_phone.required' => ':attributeは必須項目です。',
			'member_email.required' => ':attributeは必須項目です。',
			'member_email.required' => ':attributeの入力値が不正です。',
			'member_password.required' => ':attributeは必須項目です。',
			'member_password.regex' => ':attributeはアルファベット大文字、小文字、数字、含む7文字以上で入力してください。',
			'member_password_comfirm.required' => ':attributeは必須項目です。',
			'member_password.confirmed' => 'パスワード確認用と入力値が異なります。',
		];
	}
}
