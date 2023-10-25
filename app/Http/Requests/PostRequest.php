<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.shop_name' => 'required|string|max:100',
            'post.zip_code' => 'required|alpha_num|max:10',//半角数字＋ハイフン
            'post.phone_number' =>'required|alpha_num|max:15', //半角数字＋ハイフン
            'post.body' => 'required|string|max:500',
        ];
    }
}
