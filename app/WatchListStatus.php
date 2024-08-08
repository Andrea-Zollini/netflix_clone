<?php

namespace App;

enum WatchListStatus: string
{
    case Planned = 'planned';
    case Watching = 'watching';
    case Completed = 'completed';
}
