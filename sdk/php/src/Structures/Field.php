<?php

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
     * @var string[]|array
     */
    protected $types = [];

    /**
     * Possible sources.
     *
     * @var string[]|array
     */
    protected $fillable_by = [];

    /**
     * {@inheritdoc}
     */
    public function toArray()
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
    public function getPathParts()
    {
        return \array_values(\array_filter(\explode(static::PATH_DELIMITER, $this->path)));
    }

    /**
     * Get possible data types.
     *
     * @return array|string[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Get possible sources.
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
    public function nestingDepth()
    {
        return \mb_substr_count($this->path, static::NESTING_SIGNATURE);
    }

    /**
     * This field is nested?
     *
     * @return bool
     */
    public function isNested()
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
                        $this->types = $value === null
                            ? null
                            : (array) $value;
                        break;

                    case 'fillable_by':
                        $this->fillable_by = $value === null
                            ? null
                            : (array) $value;
                        break;
                }
            }
        }
    }
}
