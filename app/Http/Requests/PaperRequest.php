<?php

namespace EthioShare\Http\Requests;

use EthioShare\Exam;
use EthioShare\Http\Requests\Request;

class PaperRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Exam::where([
            'id' => $this->id,
            'user_id' => $this->user()->id
        ])->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'paper' => 'required|mimes:pdf'
        ];
    }
}
