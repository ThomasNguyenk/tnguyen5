<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Etudiant2;

class Etudiant extends Model
{
    public function Etudiant2(): HasOne
    {
        return $this->hasOne(Etudiant2::class, 'utilisateur_id');
    }

    public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }

    public function store(Request $request)
    {
        $etudiant2 = new Etudiant2();
        $etudiant2->utilisateur_id = $request->user()->id;
        $etudiant2->save();
    }
}
