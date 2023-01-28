<?php

namespace dnj\ErrorTracker\Contracts;

interface IHasOwner
{
    public function getOwnerId(): ?int;

    public function getOwnerIdColumn(): string;
}
