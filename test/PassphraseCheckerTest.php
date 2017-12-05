<?php

namespace Test\Aoc;

use Aoc\PassphraseChecker;
use PHPUnit\Framework\TestCase;

class PassphraseCheckerTest extends TestCase
{
    /**
     * @dataProvider exampleInput
     */
    public function test_it_check_passphrase_with_no_duplicate_word($input, $expectedResult)
    {
        $checker = new PassphraseChecker();

        $this->assertEquals($expectedResult, $checker->isValidPassphraseSimple($input));
    }

    /**
     * @dataProvider exampleInput2
     */
    public function test_it_check_passphrase_with_no_duplicate_anagram($input, $expectedResult)
    {
        $checker = new PassphraseChecker();

        $this->assertEquals($expectedResult, $checker->isValidPassphraseAnagram($input));
    }

    public function exampleInput()
    {
        return [
            ['aa bb cc dd ee', true],
            ['aa bb cc dd aa', false],
            ['aa bb cc dd aaa', true],
        ];
    }

    public function exampleInput2()
    {
        return [
            ['abcde fghij', true],
            ['abcde xyz ecdab', false],
            ['a ab abc abd abf abj', true],
            ['iiii oiii ooii oooi oooo', true],
            ['oiii ioii iioi iiio', false],
        ];
    }
}
