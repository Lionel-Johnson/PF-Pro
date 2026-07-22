<?php

namespace Core\Enums;

enum UserRoleEnum: string
{
    case SUPER_ADMIN = 'Super Admin';
    case ENTERPRISE_ADMIN = 'Enterprise Admin';
    case MANAGER = 'Manager';
    case EMPLOYEE = 'Employee';
    case CLIENT = 'Client';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}