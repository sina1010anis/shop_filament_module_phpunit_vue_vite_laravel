<?php

namespace Modules\User\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCommentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|min:5|max:255',
            'body'=> 'required|min:5|max:1024',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'لطفا موضوع را وارد کنید',
            'title.min' => 'موضوع کمتر از 5 کارکتر نمیتواند باشد',
            'title.max' => 'موضوع بیشتر از 255 کارکتر نمیتواند باشد',
            'body.required' => 'لطفا متن را وارد کنید',
            'body.min' => 'متن کمتر از 5 کارکتر نمیتواند باشد',
            'body.max' => 'متن بیشتر از 1024 کارکتر نمیتواند باشد'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
