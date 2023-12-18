<?php

namespace App\Models;

use App\Enums\DomainStatus;
use App\Traits\Uuids;
use Bakame\Laravel\Pdp\Facades\Rules;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Domain extends Model
{
    use HasFactory, Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'domain',
        'label'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => DomainStatus::class,
    ];

    /**
     * Get the accounts by domain.
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Accounts::class);
    }

    /**
     * Get mail domain name.
     * for example: The FQDN is mail.example.com. Then, the mail domain name is example.com.
     */
    public function mailDomain(): string 
    {
        if ($this->subDomain() == 'mail') {
            return Rules::resolve($this->domain)->registrableDomain()->toString();
        } else {
            return $this->domain;
        }
    }

    /**
     * Get short name from domain.
     * for exampel: The FQDN is mail.example.com. Then, the subdomain is mail.
     */
    public function subDomain(): string
    {
        return Rules::resolve($this->domain)->subDomain()->toString();
    }
}
