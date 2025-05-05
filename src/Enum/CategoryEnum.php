<?php

namespace App\Enum;
use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\ORM\Mapping as ORM;

#[ORM\EnumType]
enum CategoryEnum: string
{
    case MARIAGE = 'MARIAGE';
    case ANNIVERSAIRE = 'ANNIVERSAIRE';
    case CONFERENCE = 'CONFERENCE';
    case CONCERT = 'CONCERT';
    case SEMINAIRE = 'SEMINAIRE';
    case FESTIVAL = 'FESTIVAL';
    case SPORT = 'SPORT';
    case ATELIER = 'ATELIER';
}
