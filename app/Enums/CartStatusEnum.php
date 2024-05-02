<?php

namespace App\Enums;

enum CartStatusEnum:string
{
    case OPEN = "open";
    case CLOSED = "closed";
    case IN_PROGRESS = "in_progress";
    case FINISHED = "finished";
    case ABANDONED = "abandoned";

}