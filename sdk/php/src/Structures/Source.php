<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

class Source extends AbstractStructure
{
    /**
     * Name.
     *
     * @var string|null
     */
    protected $name;

    /**
     * Type description.
     *
     * @var string|null
     */
    protected $description;

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
            'name'        => $this->name,
            'description' => $this->description,
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
     * Get name.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
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

                    case 'description':
                        $this->description = $value === null
                            ? null
                            : (string) $value;
                        break;
                }
            }
        }
    }
}
