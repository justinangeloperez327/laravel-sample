<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'max:255', 'unique:plans,name'],
            'code' => ['string', 'required', 'max:100', 'unique:plans,code'],
            'price' => ['numeric', 'required', 'min:0'],
            'billing_cycle' => ['in:monthly,yearly', 'required'],
            'features' => ['array', 'nullable'],
            'features.*' => ['string', 'max:255'],
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->features && is_string($this->features)) {
            $this->merge([
                'features' => array_map('trim', explode(',', $this->features)),
            ]);
        }
    }
}
