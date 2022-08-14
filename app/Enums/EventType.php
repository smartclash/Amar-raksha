<?php

namespace App\Enums;

enum EventType: string
{
    case CONTEST = 'contest';
    case DISASTER = 'disaster';
    case TRAINING = 'training';
}
