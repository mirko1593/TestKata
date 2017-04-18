<?php 

use Wrapper\WordWrapper;

class WordWrapperTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->wrapper = new WordWrapper;
    }

    /** @test */
    public function degenerate_test_for_null_or_empty_string()
    {
        $this->assertWrappedWords("", [null, 1]);
        $this->assertWrappedWords("", ["", 1]);
    }

    /** @test */
    public function wrap_words_needless_to_break_line()
    {
        $this->assertWrappedWords("x", ["x", 1]);
    }

    /** @test */
    public function wrap_words_need_to_break_line()
    {
        $this->assertWrappedWords("x\nx", ["xx", 1]);
        $this->assertWrappedWords("x\nx\nx", ["xxx", 1]);
        $this->assertWrappedWords("x\nx", ["x x", 1]);
    }

    /** @test */
    public function wrap_words_need_to_be_break_in_last_space_shorter_than_length()
    {
        $this->assertWrappedWords("x\nxx", ["x xx", 3]);
    }

    /** @test */
    public function integration_test_for_random_words()
    {
        $this->assertWrappedWords(
            "four\nscore\nand\nseven\nyears\nago our\nfathers\nbrought\nforth\nupon\nthis\ncontine\nnt", 
            ["four score and seven years ago our fathers brought forth upon this continent", 7]
        );
    }   

    public function assertWrappedWords($expected, $original)
    {
        $this->assertSame($expected, call_user_func_array([$this->wrapper, 'wrap'], $original));
    }

}