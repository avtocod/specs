<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

class VehicleType extends AbstractStructure
{
    /**
     * Name.
     *
     * @var string|null
     */
    protected $name;

    /**
     * Unique identifier.
     *
     * @var string|null
     */
    protected $id;

    /**
     * Alias.
     *
     * @var string|null
     */
    protected $alias;

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get vehicle type identifier.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get vehicle type alias.
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->alias;
    }

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
            'name'  => $this->name,
            'id'    => $this->id,
            'alias' => $this->alias,
        ];
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
                    case 'name':
                        $this->name = $value === null
                            ? null
                            : (string) $value;
                        break;

                    case 'id':
                        $this->id = $value === null
                            ? null
                            : (string) $value;
                        break;

                    case 'alias':
                        $this->alias = $value === null
                            ? null
                            : (string) $value;
                        break;
                }
            }
        }
    }
}
