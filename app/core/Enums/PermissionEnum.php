<?php

namespace Core\Enums;

enum PermissionEnum: string
{
    case USERS_VIEW = 'users.view';
    case USERS_CREATE = 'users.create';
    case USERS_UPDATE = 'users.update';
    case USERS_DELETE = 'users.delete';

    case ROLES_VIEW = 'roles.view';
    case ROLES_CREATE = 'roles.create';
    case ROLES_UPDATE = 'roles.update';
    case ROLES_DELETE = 'roles.delete';

    case SETTINGS_MANAGE = 'settings.manage';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}