<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 06.08.19
 * Time: 9:40
 */

namespace App\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class Data extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
        ];
    }
}
