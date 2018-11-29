<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

use ArrayAccess;
use ArrayIterator;
use LogicException;
use IteratorAggregate;
use Tarampampam\Wrappers\Json;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Contracts\Support\Arrayable;
use Tarampampam\Wrappers\Exceptions\JsonEncodeDecodeException;

abstract class AbstractStructure implements Arrayable, Jsonable, ArrayAccess, IteratorAggregate
{
    /**
     * AbstractStructure constructor.
     *
     * @param mixed|null $raw_data
     */
    public function __construct($raw_data = null)
    {
        $this->configure($raw_data);
    }

    /**
     * {@inheritdoc}
     *
     * @throws JsonEncodeDecodeException
     */
    public function toJson($options = 0): string
    {
        return Json::encode($this->toArray(), $options);
    }

    /**
     * Get an iterator for the items.
     *
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->toArray());
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset): bool
    {
        return \property_exists($this, $offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->{$offset};
    }

    /**
     * {@inheritdoc}
     *
     * @throws LogicException
     */
    public function offsetSet($offset, $value)
    {
        throw new LogicException('Changing are not allowed');
    }

    /**
     * {@inheritdoc}
     *
     * @throws LogicException
     */
    public function offsetUnset($offset)
    {
        throw new LogicException('Changing are not allowed');
    }

    /**
     * Configure itself.
     *
     * @param mixed|null $raw_data
     */
    abstract protected function configure($raw_data);
}
