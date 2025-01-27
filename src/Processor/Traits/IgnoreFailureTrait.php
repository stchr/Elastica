<?php

namespace Elastica\Processor\Traits;

trait IgnoreFailureTrait
{
    /**
     * Set "ignore_failure" option.
     */
    public function setIgnoreFailure(bool $ignoreFailure): self
    {
        return $this->setParam('ignore_failure', $ignoreFailure);
    }
}
