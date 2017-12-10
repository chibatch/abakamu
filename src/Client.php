<?php

namespace Abakamu;

use Abakamu\Request;
use Abakamu\Response;

interface Client
{
    /**
     * Send Request ans receice Response
     *
     * @param  Request $request
     * @return Response
     */
    public function send(Request $request):
}
