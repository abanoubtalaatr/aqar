<?php

namespace App\Http\Resources\Api;

use App\Models\Category;
use App\Models\Key;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoomsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [];
        $keys = Key::where('category_id', Category::where('key', 'room')->first()->id)->get();
        foreach ($keys as $key) {
            if ($this->{$key->attribute_name} != 0 && $key->name != 'property_age') {
                array_push($data, ['name' => $key->name, 'attribute_name' => $key->attribute_name, 'type' => $key->type, 'attribute_value' => $this->{$key->attribute_name}]);

            }
        }

        return $data;
        // return [
        //     "street_width" => $this->street_width,
        //     "property_age" => $this->property_age,
        //     "renting_duration" => $this->renting_duration,
        //     "furnished" => $this->furnished,
        //     "kitchen" => $this->kitchen,
        //     "water_supply" => $this->water_supply,
        //     "electricity_supply" => $this->electricity_supply,
        //     "sewerage_supply" => $this->sewerage_supply,
        // ];
    }
}
