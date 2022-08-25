<?php

namespace App\Http\Requests\Timeline;

use Illuminate\Foundation\Http\FormRequest;

class StoreTimelineRequest extends FormRequest
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
            'timeline' => ['required', 'array', 'min:2'],
            'timeline.*.title' => ['required', 'string'],
            'timeline.*.message' => ['required', 'string'],
            'timeline.*.starts_at' => ['required', 'string']
        ];
    }
}
