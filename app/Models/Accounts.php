<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Accounts extends Model
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
                "total_account" => DB::raw("total_account + 1")
            ]);
        });
        static::deleted(function ($aliases) {
            Domain::where($aliases["domain_id"])->update([
                "total_account" => DB::raw("total_account - 1")
            ]);
        });
    }

    /**
     * Get the aliases.
     */
    public function aliases(): HasMany
    {
        return $this->hasMany(Aliases::class);
    }

    /**
     * Get the forwardings.
     */
    public function forwardings(): HasMany
    {
        return $this->hasMany(Forwarding::class);
    }
}
