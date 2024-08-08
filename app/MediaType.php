<?php

namespace App;

enum MediaType: string
{
    case Movie = 'movie';
    case TVShow = 'tv_show';
    case Documentary = 'documentary';
}
