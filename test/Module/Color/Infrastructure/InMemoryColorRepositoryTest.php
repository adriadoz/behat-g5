<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\Color\Infrastructure;

use LaSalle\ChupiProject\Module\Color\Infrastructure\InMemoryColorRepository;
use LaSalle\ChupiProject\Test\Module\Color\Domain\Value\ColorsStub;
use LaSalle\ChupiProject\Test\Module\Color\Domain\Value\ColorStub;
use PHPUnit\Framework\TestCase;

final class InMemoryColorRepositoryTest extends TestCase
{
    /** @var InMemoryColorRepository $repository */
    private $repository;

    protected function setUp()
    {
        parent::setUp();

        $this->repository = new InMemoryColorRepository();
    }

    /** @test */
    public function it_should_return_all_colors()
    {
        $words = ColorsStub::allColorsInMemory();

        $this->assertEquals($words, $this->repository->all());
    }

    /** @test */
    public function it_should_return_the_correct_size()
    {
        $this->assertSame(8, $this->repository->all()->count());
    }

    /**
     * @test
     * @dataProvider validColors
     */
    public function it_should_return_an_existing_color(int $position, string $expected)
    {
        $this->assertSame($expected, $this->repository->all()->get($position)->name()->value());
    }


    public function validColors()
    {
        return [
            "color is red"  => [
                "position"   => 0,
                "expected" => ColorStub::red()->name()->value(),
            ],
            "color is cyan" => [
                "position"   => 1,
                "expected" => ColorStub::cyan()->name()->value(),
            ],
            "color is magenta" => [
                "position"   => 2,
                "expected" => ColorStub::magenta()->name()->value(),
            ],
            "color is green" => [
                "position"   => 3,
                "expected" => ColorStub::green()->name()->value(),
            ],
            "color is black" => [
                "position"   => 4,
                "expected" => ColorStub::black()->name()->value(),
            ],
            "color is yellow" => [
                "position"   => 5,
                "expected" => ColorStub::yellow()->name()->value(),
            ],
            "color is blue" => [
                "position"   => 6,
                "expected" => ColorStub::blue()->name()->value(),
            ],
            "color is light gray" => [
                "position"   => 7,
                "expected" => ColorStub::light_gray()->name()->value(),
            ]
        ];
    }
}