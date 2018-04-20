<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\CoolWord\Domain;

use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordRepository;
use LaSalle\ChupiProject\Module\CoolWord\Domain\RandomCoolWordSearcher;
use LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value\WordsStub;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class RandomCoolWordSearcherTest extends TestCase
{
    /** @var CoolWordRepository|MockInterface $repositoryMock */
    private $repositoryMock;
    /** @var RandomCoolWordSearcher $randomCoolWordSearcher */
    private $randomCoolWordSearcher;

    protected function setUp()
    {
        parent::setUp();

        $this->repositoryMock = \Mockery::mock(CoolWordRepository::class);
        $this->randomCoolWordSearcher = new RandomCoolWordSearcher($this->repositoryMock);
    }

    /** @test */
    public function it_should_return_an_existing_random_word_name()
    {
        $this->shouldGetAllRandomWords();

        $this->assertContains(
            $this->randomCoolWordSearcher->__invoke(),
            WordsStub::allWordNamesInMemory()
        );
    }

    private function shouldGetAllRandomWords()
    {
        $this->repositoryMock
            ->shouldReceive('all')
            ->once()
            ->andReturn(WordsStub::allWordsInMemory());
    }

}