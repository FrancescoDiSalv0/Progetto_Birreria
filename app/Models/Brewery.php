<?php

namespace App\Models;

use App\Models\Beer;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brewery extends Model
{
    use HasFactory;

    protected $fillable =

    [
        "name",
        "address",
        "cap",
        "phone",
        "description",
        "img",
    ];

    // funzione di relazione inversa 1-N tra User e Brewary
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // funzione di relazione N-N tra birre e birrerie
    public function beers(): BelongsToMany
    {
        return $this->belongsToMany(Beer::class);
    }
    
}
