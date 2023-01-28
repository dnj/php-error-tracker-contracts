<?php

namespace dnj\ErrorTracker\Contracts;

interface IDeviceManager
{
    /**
     * @param array{title?:string|null,owner?:int,user?:int} $filters
     *
     * @return iterable<IDevice>
     */
    public function search(array $filters): iterable;

    /**
     * @param array<mixed,mixed>|null $extra
     */
    public function store(
        ?string $title = null,
        ?array $extra = null,
        ?int $owner = null,
        bool $userActivityLog = false,
    ): IDevice;

    /**
     * @param array{title?:string|null,extra?:array<mixed,mixed>|null,owner?:int|null} $changes
     */
    public function update(
        IDevice|int $device,
        array $changes,
        bool $userActivityLog = false,
    ): IDevice;

    public function destroy(
        IDevice|int $device,
        bool $userActivityLog = false,
    ): void;
}
