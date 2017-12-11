<?php

namespace Abakamu;

use Abakamu\Response;

interface Response
{
    /**
     * Get response headers
     *
     * @return Response\Header
     */
    public function getHeader();

    /**
     * Get response body
     *
     * @return Response\Body
     */
    public function getBody();
}
