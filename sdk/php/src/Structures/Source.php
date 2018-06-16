<?php

namespace Avtocod\Specifications\Structures;

use Traversable;

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
     * {@inheritdoc}
     */
    protected function configure($raw_data)
    {
        if (\is_array($raw_data) || $raw_data instanceof Traversable) {
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

    /**
     * {@inheritdoc}
     */
    public function toArray()
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
}
