<?php
namespace HylianShield\Alphabet;

use ArrayIterator;
use Iterator;

class Alphabet implements AlphabetInterface
{
    /** @var Iterator */
    private $iterator;

    /**
     * Alphabet constructor.
     *
     * @param string[] ...$characters
     */
    public function __construct(string ...$characters)
    {
        $this->iterator = new ArrayIterator($characters);
    }

    /**
     * Get the size of the alphabet.
     *
     * @return int
     */
    public function count(): int
    {
        return $this->iterator->count();
    }

    /**
     * Get the current entry.
     *
     * @return string
     */
    public function current(): string
    {
        return $this->iterator->current();
    }

    /**
     * Move the pointer one forward.
     *
     * @return void
     */
    public function next()
    {
        $this->iterator->next();
    }

    /**
     * Get the key for the current pointer.
     *
     * @return int
     */
    public function key(): int
    {
        return $this->iterator->key();
    }

    /**
     * Whether the current pointer is valid.
     *
     * @return bool
     */
    public function valid(): bool
    {
        return $this->iterator->valid();
    }

    /**
     * Rewind the iterator.
     *
     * @return void
     */
    public function rewind()
    {
        $this->iterator->rewind();
    }
}
