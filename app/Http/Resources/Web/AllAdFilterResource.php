<?php

namespace App\Http\Resources\Web;

use App\Models\Ad;
use App\Models\Neighborhood;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllAdFilterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        if ($this->for_rent == 1) {
            $for_rent = $this->RentingDurationVal;
            $renting_duration = $this->renting_duration;
        } else {
            $for_rent = $this->for_rent_val;
            $renting_duration = null;
        }
        $data = [];
        $ads = Ad::where('category_id', $this->category_id)->where('for_rent', $this->for_rent)->get();
        $neighborhoods = Neighborhood::all();
        // return $neighborhoods;
        foreach ($neighborhoods as $neighborhood) {

            array_push($data, [
                'name' => optional($this->category)->name.$this->for_rent_val.__('dashboard.in').optional($this->neighborhood)->name.' '.__('dashboard.in').optional($this->neighborhood->city)->name,
                'neighborhood_id' => $neighborhood->id,
                'category_id' => $this->category_id,
                'similar_ads_number' => Ad::where('neighborhood_id', $neighborhood->id)->where('category_id', $this->category_id)->where('for_rent', $this->for_rent)->count(),
                'for_rent' => $for_rent,
                'for_rent_id' => $this->for_rent,
                'renting_duration_id' => $renting_duration,

            ]);

        }

        return $data;
        //we want a way to make it send the data to the frontend different ways for for rent and for neighborhood_id etc
    }
}
