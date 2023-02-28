<?php

namespace dnj\ErrorTracker\Contracts;

use dnj\AAA\Contracts\IOwnerableModel;

interface IDevice extends IOwnerableModel
{
    public function getId(): int;

    public function getTitle(): ?string;

    /**
     * @return array<string,mixed>|null
     */
    public function getMeta(): ?array;

    public function getCreatedAt(): \DateTimeInterface;

    public function getUpdatedAt(): \DateTimeInterface;
}
