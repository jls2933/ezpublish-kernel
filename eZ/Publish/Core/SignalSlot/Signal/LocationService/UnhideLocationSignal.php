<?php

/**
 * UnhideLocationSignal class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\Core\SignalSlot\Signal\LocationService;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * UnhideLocationSignal class.
 */
class UnhideLocationSignal extends Signal
{
    /**
     * Location ID.
     *
     * @var mixed
     */
    public $locationId;

    /**
     * Content ID.
     *
     * @var mixed
     */
    public $contentId;

    /**
     * Content current version number.
     *
     * @var int
     */
    public $currentVersionNo;
}
