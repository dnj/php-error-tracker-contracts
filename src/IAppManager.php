<?php

namespace dnj\ErrorTracker\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;

interface IAppManager
{
    /**
     * @param array{title?:string,owner?:int|Authenticatable,user?:int} $filters
     *
     * @return iterable<IApp>
     */
    public function search(array $filters): iterable;

    /**
     * @param array<mixed,mixed>|null $meta
     */
    public function store(
        string $title,
        int|Authenticatable $owner,
        ?array $meta = null,
        bool $userActivityLog = false,
    ): IApp;

    /**
     * @param array{title?:string,meta?:array<mixed,mixed>|null,owner?:int|Authenticatable|null} $changes
     */
    public function update(
        IApp|int $app,
        array $changes,
        bool $userActivityLog = false,
    ): IApp;

    public function destroy(
        IApp|int $app,
        bool $userActivityLog = false,
    ): void;
}
