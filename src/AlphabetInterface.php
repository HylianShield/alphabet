<?php
/**
 * Copyright MediaCT. All rights reserved.
 * https://www.mediact.nl
 */

namespace HylianShield\Alphabet;

use Countable;
use Iterator;

interface AlphabetInterface extends Iterator, Countable
{
    /**
     * Get the current entry.
     *
     * @return string
     */
    public function current(): string;

    /**
     * Get the key for the current pointer.
     *
     * @return int
     */
    public function key(): int;
}
