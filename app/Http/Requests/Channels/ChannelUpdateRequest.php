<?php

namespace App\Http\Requests\Channels;

use Illuminate\Foundation\Http\FormRequest;

class ChannelUpdateRequest extends FormRequest
{
    protected $channel;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->channel = $this->route('channel');

        return $this->channel->ownedBy($this->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:30|unique:channels,name,' . $this->channel->id,
            'description' => 'sometimes|nullable|string|max:5000',
            'image' => 'sometimes|image|mimes:jpg,png,jpeg',
        ];
    }
}
