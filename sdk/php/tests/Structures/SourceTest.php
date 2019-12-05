<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\Source;

/**
 * @covers \Avtocod\Specifications\Structures\Source<extended>
 */
class SourceTest extends AbstractStructureTestCase
{
    /**
     * @var Source
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    public function testConfigure(): void
    {
        $this->instance = $this->factory($input = [
            'description' => $description = 'some description',
            'name'        => $name = 'some name',
        ]);

        $this->assertEquals($description, $this->instance->getDescription());
        $this->assertEquals($name, $this->instance->getName());

        $this->assertEquals($input, $this->instance->toArray());
    }

    /**
     * @return void
     */
    public function testConfigureWithNulls(): void
    {
        $this->instance = $this->factory($input = [
            'description' => null,
            'name'        => null,
        ]);

        $this->assertNull($this->instance->getDescription());
        $this->assertNull($this->instance->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function testArrayAccess(): void
    {
        $this->instance = $this->factory([
            'name' => $name = 'some name',
        ]);

        $this->assertTrue(isset($this->instance['name']));
        $this->assertEquals($name, $this->instance['name']);

        $this->assertFalse(isset($this->instance['bar']));
    }

    /**
     * {@inheritdoc}
     *
     * @return Source
     */
    protected function factory(...$arguments): Source
    {
        return new Source(...$arguments);
    }
}
