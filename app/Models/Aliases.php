<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aliases extends Model
{
    use HasFactory, Uuids;

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::created(function ($aliases) {
            Domain::where($aliases["domain_id"])->update([
                "total_aliases" => DB::raw("total_aliases + 1")
            ]);
        });
        static::deleted(function ($aliases) {
            Domain::where($aliases["domain_id"])->update([
                "total_aliases" => DB::raw("total_aliases - 1")
            ]);
        });
    }
}
