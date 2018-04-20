<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\Color\Domain;

use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;
use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiProject\Test\Module\Color\Domain\Value\ColorsStub;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class RandomColorSearcherTest extends TestCase
{
    /** @var RandomColorSearcher $randomColorSearcher */
    private $randomColorSearcher;
    /** @var ColorRepository|MockInterface $repositoryMock */
    private $repositoryMock;

    protected function setUp()
    {
        parent::setUp();

        $this->repositoryMock = \Mockery::mock(ColorRepository::class);
        $this->randomColorSearcher = new RandomColorSearcher($this->repositoryMock);
    }

    /** @test */
    public function it_should_return_a_colors_name()
    {
        $this->shouldGetAllRandomColors();

        $this->assertContains(
            $this->randomColorSearcher->__invoke(),
            ColorsStub::allColorNamesInMemory()
        );
    }

    private function shouldGetAllRandomColors()
    {
        $this->repositoryMock
            ->shouldReceive('all')
            ->once()
            ->andReturn(ColorsStub::allColorsInMemory());
    }

}