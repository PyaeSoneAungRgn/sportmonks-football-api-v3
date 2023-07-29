<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanOrder
{
    public function orderAsc(): static
    {
        $this->query['order'] = 'asc';

        return $this;
    }

    public function orderDesc(): static
    {
        $this->query['order'] = 'desc';

        return $this;
    }
}
