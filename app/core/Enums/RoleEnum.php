<?php

namespace Core\Enums;

enum RoleEnum:string
{
    case SUPER_ADMIN="Super Admin";

    case ADMIN="Administrateur";

    case MANAGER="Manager";

    case EDITOR="Editeur";

    case CUSTOMER="Client";

    case TRAINER="Formateur";

    case SUPPORT="Support";

    case ACCOUNTANT="Comptable";

    case HR="RH";

    case VISITOR="Visiteur";
}