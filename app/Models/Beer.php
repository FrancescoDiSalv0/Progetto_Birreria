<?php

namespace App\Models;

use App\Models\Brewery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Beer extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        "name",
        "nation",
        "type",
        "description",
    ];

    // funzione di relazione N-N tra birrerie e birre
    public function breweries(): BelongsToMany
    {
        return $this->belongsToMany(Brewery::class);
    }

}
