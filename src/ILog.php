<?php

namespace dnj\ErrorTracker\Contracts;

interface ILog
{
    public function getId(): int;

    public function getCreatedAt(): \DateTimeInterface;

    public function getAppId(): int;

    public function getDeviceId(): int;

    public function getReaderUserId(): ?int;

    public function getReadAt(): ?\DateTimeInterface;

    public function getLevel(): LogLevel;

    public function getMessage(): string;

    /**
     * @return array<mixed,mixed>|null
     */
    public function getData(): ?array;
}
