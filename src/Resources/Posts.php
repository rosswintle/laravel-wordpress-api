<?php

namespace RickWest\Wordpress\Resources;

use RickWest\Wordpress\Resources\Traits\HasAuthor;
use RickWest\Wordpress\Resources\Traits\HasDate;
use RickWest\Wordpress\Resources\Traits\HasSlug;

class Posts extends Resource
{
    use HasSlug;
    use HasDate;
    use HasAuthor;
}
