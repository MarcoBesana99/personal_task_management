<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            'name' => 'required|max:255|unique:projects',
            'description' => 'required|max:900',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date'
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'start_date' => Carbon::parse($this->start_date),
            'end_date' => !is_null($this->end_date) ? Carbon::parse($this->end_date) : null,
        ]);
    }
}
