<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class wifi_dataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
            return [
                'id' => $this->id,
                'date' => $this->date,
                'trade_code' => $this->trade_code,
                'high' => $this->high,
                'low' => $this->low,
                'open' => $this->open,
                'close' => $this->close,
                'volume' => $this->volume,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ];
    }
}

