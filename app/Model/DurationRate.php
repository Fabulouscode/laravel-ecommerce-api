<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DurationRate extends Model
{
    protected $fillable = [ 'country_id', 'durations', 'rates'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
