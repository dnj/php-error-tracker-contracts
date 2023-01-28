<?php

namespace dnj\ErrorTracker\Contracts;

interface IAppManager
{
    /**
     * @param array{title?:string,owner?:int,user?:int} $filters
     *
     * @return iterable<IApp>
     */
    public function search(array $filters): iterable;

    /**
     * @param array<mixed,mixed>|null $extra
     */
    public function store(
        string $title,
        ?array $extra = null,
        ?int $owner = null,
        bool $userActivityLog = false,
    ): IApp;

    /**
     * @param array{title?:string,extra?:array<mixed,mixed>|null,owner?:int|null} $changes
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
