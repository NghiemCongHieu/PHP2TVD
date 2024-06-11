<?php

namespace Dell\Php21\Controllers\Admin;

use Dell\Php21\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}