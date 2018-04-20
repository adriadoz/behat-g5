<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\CoolWord\Repository;

use LaSalle\ChupiProject\Module\CoolWord\Infrastructure\InMemoryCoolWordRepository;
use LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value\WordsStub;
use LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value\WordStub;
use PHPUnit\Framework\TestCase;

final class InMemoryCoolWordRepositoryTest extends TestCase
{
    /** @var InMemoryCoolWordRepository $repository */
    private $repository;

    protected function setUp()
    {
        parent::setUp();

        $this->repository = new InMemoryCoolWordRepository();
    }

    /** @test */
    public function it_should_return_all_words()
    {
        $words = WordsStub::allWordsInMemory();

        $this->assertEquals($words, $this->repository->all());
    }

    /** @test */
    public function it_should_return_the_correct_size()
    {
        $this->assertSame(6, $this->repository->all()->count());
    }

    /**
     * @test
     * @dataProvider validWords
     */
    public function it_should_return_an_existing_word(int $position, string $expected)
    {
        $this->assertSame($expected, $this->repository->all()->get($position)->name()->value());
    }

    public function validWords()
    {
        return [
            "word is Chachi pistachi!" => [
                "position" => 0,
                "expected" => WordStub::chachipistachi()->name()->value(),
            ],
            "word is Esto mola mogollón, tío!" => [
                "position" => 1,
                "expected" => WordStub::molamogollon()->name()->value(),
            ],
            "word is Mola mazo!" => [
                "position" => 2,
                "expected" => WordStub::molamazo()->name()->value(),
            ],
            "word is Eres mazo guay" => [
                "position" => 3,
                "expected" => WordStub::mazoguay()->name()->value(),
            ],
            "word is Holiiiiii" => [
                "position" => 4,
                "expected" => WordStub::holiiiiii()->name()->value(),
            ],
            "word is Besiis" => [
                "position" => 5,
                "expected" => WordStub::besiis()->name()->value(),
            ]
        ];
    }
}