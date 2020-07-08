<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

class Field extends AbstractStructure
{
    /**
     * Path nesting signature.
     */
    public const NESTING_SIGNATURE = '[]';

    /**
     * Path parts delimiter.
     */
    public const PATH_DELIMITER = '.';

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
     * Possible sources.
     *
     * @var string[]|array
     */
    protected $fillable_by;

    /**
     * Get the instance as an array.
     *
     * @return mixed[]
     *
     * @deprecated Will be removed in closest major release
     */
    public function toArray(): array
    {
        return [
            'path'        => $this->path,
            'description' => $this->description,
            'types'       => $this->types,
            'fillable_by' => $this->fillable_by,
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
     * Get possible sources.
     *
     * @return string[]|null
     */
    public function getFillableBy()
    {
        return $this->fillable_by;
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
     *
     * @deprecated Will be removed in closest major release
     */
    protected function configure($raw_data)
    {
        if (\is_iterable($raw_data)) {
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
                        /* @var string[]|null $value */
                        $value === null
                            ? null
                            : \array_filter((array) $value, '\is_string');

                        $this->types = $value;
                        break;

                    case 'fillable_by':
                        /* @var string[]|null $value */
                        $value === null
                            ? null
                            : \array_filter((array) $value, '\is_string');

                        $this->fillable_by = $value;
                        break;
                }
            }
        }
    }
}
