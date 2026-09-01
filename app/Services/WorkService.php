<?php

namespace App\Services;

use App\Models\Work;
use Illuminate\Database\Eloquent\Collection;

class WorkService{
    public function getAll(): Collection{
        return Work::with('features') ->latest() ->get();
    }
}