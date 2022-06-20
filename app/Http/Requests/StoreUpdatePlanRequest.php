<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Plan;

class StoreUpdatePlanRequest extends FormRequest
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
        $url = $this->segment(3);
        return [
            'name' => 'required|min:3|max:255|unique:plans,name,'.$url.',url',
            'description' => 'required|min:3|max:255',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'Mínimo de 3 caracteres',
            'name.max' => 'Máximo de 255 caracteres',
            'name.unique' => 'Nome já utilizado',
            
            'price.required' => 'O campo preço e obrigatório',

            'description.required' => 'O campo descrição é obrigatório',
            'description.min' => 'Mínimo de 3 caracteres',
            'description.max' => 'Máximo de 255 caracteres',

        ];
    }
}
