<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => "Rs." . $this->price,
            'discount' => $this->discount,
            'image' => $this->image == null ? null : asset($this->image),
            'sellingPrice' => "Rs." . $this->selling_price,
        ];
    }
}
