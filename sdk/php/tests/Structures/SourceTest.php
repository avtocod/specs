<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\Source;

class SourceTest extends AbstractStructureTestCase
{
    /**
     * @var Source
     */
    protected $instance;

    /**
     * {@inheritdoc}
     *
     * @return Source
     */
    protected function factory(...$arguments)
    {
        return new Source(...$arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function testConfigure()
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
    public function testConfigureWithNulls()
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
    public function testArrayAccess()
    {
        $this->instance = $this->factory([
            'name' => $name = 'some name',
        ]);

        $this->assertTrue(isset($this->instance['name']));
        $this->assertEquals($name, $this->instance['name']);

        $this->assertFalse(isset($this->instance['bar']));
    }
}
