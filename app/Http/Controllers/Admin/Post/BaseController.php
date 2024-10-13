<?php

namespace App\Http\Controllers\Admin\Post;

use App\Service\PostService;

/**
 * TODO Abolish.
 *
 * @deprecated
 */
class BaseController
{
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}
