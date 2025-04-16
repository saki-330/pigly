<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightTargetRequest extends FormRequest
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
            'target_weight' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'target_weight.required' => '体重を入力してください',
            'target_weight.numeric' => '数字で入力してください',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $target_weight = $this->input('target_weight');

            if (!is_numeric($target_weight)) {
                return;
            }

            $parts = explode('.', $target_weight);

            if ((int)$parts[0] > 999) {
                $validator->errors()->add('target_weight', '4桁までの数字で入力してください');
            }

            if (isset($parts[1]) && strlen($parts[1]) !== 1) {
                $validator->errors()->add('target_weight', '小数点は1桁で入力してください');
            }

            if (!isset($parts[1])) {
                $validator->errors()->add('target_weight', '小数点は1桁で入力してください');
            }
        });
    }
}
