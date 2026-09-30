<?php

namespace App\Enums;

enum Role: string
{
    case Administrateur = 'administrateur';
    case Responsable = 'responsable';
    case Agent = 'agent';
}
