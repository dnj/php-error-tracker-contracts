<?php

namespace dnj\ErrorTracker\Contracts;

interface IApp extends IHasOwner
{
    public function getId(): int;

    public function getTitle(): string;

    /**
     * @return array<string,mixed>|null
     */
    public function getExtra(): ?array;

    public function getCreatedAt(): \DateTimeInterface;

    public function getUpdatedAt(): \DateTimeInterface;
}
