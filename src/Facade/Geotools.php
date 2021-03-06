<?php

/**
 * This file is part of the Geotools-laravel library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Toin0u\Geotools\Facade;

/**
 * Facade for Geotools
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Geotools extends \Illuminate\Support\Facades\Facade
{
    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'geotools';
    }
}
