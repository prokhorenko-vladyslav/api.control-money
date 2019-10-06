<?php

namespace App\Events;

use App\Models\User;

class GetInvoicesEvent extends Event
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($apiToken)
    {
        parent::__construct($apiToken);
    }
}
