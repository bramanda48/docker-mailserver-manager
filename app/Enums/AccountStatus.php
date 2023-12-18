<?php

namespace App\Enums;

enum AccountStatus: string 
{
    case ACTIVE = 'active';
    case SUSPENDED = 'suspended';

    public function name(): string
    {
        return match($this) {
            AccountStatus::ACTIVE => 'Active',
            AccountStatus::SUSPENDED => 'Suspended'
        };
    }
}