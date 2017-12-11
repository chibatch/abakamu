<?php

namespace Abakamu;

use Abakamu\Request;

interface Request
{
    /**
     * Get request headers
     *
     * @return Request\Header
     */
    public function getHeader();

    /**
     * Get request body
     *
     * @return Request\Body
     */
    public function getBody();
}
