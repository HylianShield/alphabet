<?php
/**
 * Copyright MediaCT. All rights reserved.
 * https://www.mediact.nl
 */

namespace HylianShield\Tests\Alphabet;

use HylianShield\Alphabet\Alphabet;

/**
 * @coversDefaultClass \HylianShield\Alphabet\Alphabet
 */
class AlphabetTest extends \PHPUnit_Framework_TestCase
{
    /** @var string[] */
    private $alphabet = ['A', 'B', 'C'];

    /**
     * @return Alphabet
     * @covers ::__construct
     */
    public function testConstructor(): Alphabet
    {
        return new Alphabet(...$this->alphabet);
    }

    /**
     * @depends testConstructor
     *
     * @param Alphabet $alphabet
     *
     * @return int
     * @covers ::count
     */
    public function testCount(Alphabet $alphabet): int
    {
        return $alphabet->count();
    }

    /**
     * @depends testConstructor
     *
     * @param Alphabet $alphabet
     *
     * @return string
     * @covers ::rewind
     * @covers ::valid
     * @covers ::current
     * @covers ::key
     * @covers ::next
     */
    public function testIteration(Alphabet $alphabet): string
    {
        $character = null;

        foreach ($alphabet as $key => $character) {
            $this->assertInternalType('integer', $key);
            $this->assertInternalType('string', $character);
        }

        return $character;
    }
}
