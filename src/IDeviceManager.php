<?php

namespace dnj\ErrorTracker\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;

interface IDeviceManager
{
    /**
     * @param array{title?:string|null,owner?:int|Authenticatable|null,user?:int} $filters
     *
     * @return iterable<IDevice>
     */
    public function search(array $filters): iterable;

    /**
     * @param array<mixed,mixed>|null $meta
     */
    public function store(
        ?string $title = null,
        int|Authenticatable|null $owner = null,
        ?array $meta = null,
        bool $userActivityLog = false,
    ): IDevice;

    /**
     * @param array{title?:string|null,meta?:array<mixed,mixed>|null,owner?:int|Authenticatable|null} $changes
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
