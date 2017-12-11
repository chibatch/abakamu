<?php

namespace Abakamu;

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
