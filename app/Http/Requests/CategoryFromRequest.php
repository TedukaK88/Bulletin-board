<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFromRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'mainCategoryName' => 'required|string|min:2|max:100|unique:post_main_categories,main_category'
        ];
    }
    /**
     *  バリデーション項目名定義
     * @return array
     */
    public function attributes()
    {
        return [
            'mainCategoryName' => 'メインカテゴリー名'
        ];
    }

    /**
     * バリデーションメッセージ
     * @return array
     */

    public function messages(){
        return [
            'mainCategoryName.required' => '【メインカテゴリー】名称を入力してください。',
            'mainCategoryName.min' => '【メインカテゴリー】2文字以上で入力してください。',
            'mainCategoryName.max' => '【メインカテゴリー】100文字以内で入力してください。',
            'mainCategoryName.unique' => '【メインカテゴリー】既に登録されています。'
        ];
    }
}
