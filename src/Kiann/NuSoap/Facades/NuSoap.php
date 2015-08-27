<?php

namespace Kiann\NuSoap\Facades;

use Illuminate\Support\Facades\Facade;

class NuSoap extends Facade {

	/**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'NuSoap';
    }
}