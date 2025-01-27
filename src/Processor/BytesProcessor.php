<?php

namespace Elastica\Processor;

/**
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/bytes-processor.html
 */
class BytesProcessor extends AbstractProcessor
{
    use Traits\IgnoreFailureTrait;
    use Traits\IgnoreMissingTrait;

    public function __construct(string $field)
    {
        $this->setField($field);
    }

    /**
     * Set field.
     *
     * @return $this
     */
    public function setField(string $field): self
    {
        return $this->setParam('field', $field);
    }

    /**
     * Set target_field.
     *
     * @return $this
     */
    public function setTargetField(string $targetField): self
    {
        return $this->setParam('target_field', $targetField);
    }
}
