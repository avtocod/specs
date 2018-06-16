<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\Field;

class FieldTest extends AbstractStructureTestCase
{
    /**
     * @var Field
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    public function testConfigure()
    {
        $this->instance = $this->factory($input = [
            'path'        => $path = 'some path',
            'description' => $description = 'some description',
            'types'       => $types = ['some', 'types'],
        ]);

        $this->assertEquals($path, $this->instance->getPath());
        $this->assertEquals($description, $this->instance->getDescription());
        $this->assertEquals($types, $this->instance->getTypes());

        $this->assertEquals($input, $this->instance->toArray());
    }

    /**
     * @return void
     */
    public function testConfigureWithNulls()
    {
        $this->instance = $this->factory($input = [
            'path'        => null,
            'description' => null,
            'types'       => null,
        ]);

        $this->assertNull($this->instance->getPath());
        $this->assertNull($this->instance->getDescription());
        $this->assertNull($this->instance->getTypes());
    }

    /**
     * {@inheritdoc}
     */
    public function testArrayAccess()
    {
        $this->instance = $this->factory([
            'path' => $path = 'some path',
        ]);

        $this->assertTrue(isset($this->instance['path']));
        $this->assertEquals($path, $this->instance['path']);

        $this->assertFalse(isset($this->instance['bar']));
    }

    /**
     * @return void
     */
    public function testNesting()
    {
        $this->instance = $this->factory([
            'path' => 'some path',
        ]);

        $this->assertEquals(0, $this->instance->nestingDepth());
        $this->assertFalse($this->instance->isNested());

        $this->instance = $this->factory([
            'path' => 'some.path[].included',
        ]);

        $this->assertEquals(1, $this->instance->nestingDepth());
        $this->assertTrue($this->instance->isNested());

        $this->instance = $this->factory([
            'path' => 'some.path[].included.in[].me',
        ]);

        $this->assertEquals(2, $this->instance->nestingDepth());
        $this->assertTrue($this->instance->isNested());
    }

    /**
     * @return void
     */
    public function testPathParts()
    {
        $this->instance = $this->factory([
            'path' => 'some.path[].included',
        ]);
        $this->assertEquals(['some', 'path[]', 'included'], $this->instance->getPathParts());

        $this->instance = $this->factory([
            'path' => 'some...foo.....bar',
        ]);

        $this->assertEquals(['some', 'foo', 'bar'], $this->instance->getPathParts());

        $this->instance = $this->factory([
            'path' => null,
        ]);
        $this->assertEquals([], $this->instance->getPathParts());
    }

    /**
     * {@inheritdoc}
     *
     * @return Field
     */
    protected function factory(...$arguments)
    {
        return new Field(...$arguments);
    }
}
