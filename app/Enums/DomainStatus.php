<?php

namespace App\Enums;

enum DomainStatus: string 
{
    case ACTIVE = 'active';
    case NEED_CONFIGURE = 'need_configure';

    public function name(): string
    {
        return match($this) {
            DomainStatus::ACTIVE => 'Active',
            DomainStatus::NEED_CONFIGURE => 'Need Configure'
        };
    }

    public function backgroundColor(): string 
    {
        return match($this) {
            DomainStatus::ACTIVE => 'bg-green',
            DomainStatus::NEED_CONFIGURE => 'bg-red'
        };
    }
}