<?php

declare(strict_types = 1);

namespace Avtocod\Specifications\Structures;

use Traversable;

class Field extends AbstractStructure
{
    /**
     * Path nesting signature.
     */
    const NESTING_SIGNATURE = '[]';

    /**
     * Path parts delimiter.
     */
    const PATH_DELIMITER = '.';

    /**
     * Path.
     *
     * @var string|null
     */
    protected $path;

    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;

    /**
     * Possible data types.
     *
     * @var string[]|null
     */
    protected $types;

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'path'        => $this->path,
            'description' => $this->description,
            'types'       => $this->types,
        ];
    }

    /**
     * Get description.
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get path.
     *
     * @return null|string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Get path parts.
     *
     * @return string[]|array
     */
    public function getPathParts(): array
    {
        return \array_values(\array_filter(\explode(static::PATH_DELIMITER, (string) $this->path)));
    }

    /**
     * Get possible data types.
     *
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Get field nesting depth.
     *
     * @return int
     */
    public function nestingDepth(): int
    {
        return \mb_substr_count((string) $this->path, static::NESTING_SIGNATURE);
    }

    /**
     * This field is nested?
     *
     * @return bool
     */
    public function isNested(): bool
    {
        return $this->nestingDepth() > 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure($raw_data)
    {
        if (\is_array($raw_data) || $raw_data instanceof Traversable) {
            foreach ($raw_data as $key => $value) {
                switch ($key) {
                    case 'path':
                        $this->path = $value === null
                            ? null
                            : (string) $value;
                        break;

                    case 'description':
                        $this->description = $value === null
                            ? null
                            : (string) $value;
                        break;

                    case 'types':
                        /** @var string[]|null $value */
                        $value === null
                            ? null
                            : \array_filter((array) $value, '\is_string');

                        $this->types = $value;
                        break;
                }
            }
        }
    }
}
