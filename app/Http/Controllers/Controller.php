<?php

namespace App\Http\Controllers;

use App\Traits\withApiResponse;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use withApiResponse;
}
