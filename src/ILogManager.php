<?php

namespace dnj\ErrorTracker\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;

interface ILogManager
{
    /**
     * @param array{apps?:array<IApp|int>,devices?:array<IDevice|int>,levels?:LogLevel[],message?:string,unread?:bool,user?:int|Authenticatable} $filters
     *
     * @return iterable<ILog>
     */
    public function search(array $filters): iterable;

    /**
     * @param array<mixed,mixed>|null                            $data
     * @param array{user:int|IUser,readAt?:\DateTimeInterface}|null $read
     */
    public function store(
        IApp|int $app,
        IDevice|int $device,
        LogLevel $level,
        string $message,
        ?array $data = null,
        ?array $read = null,
    ): ILog;

    public function markAsRead(ILog|int $log, int|Authenticatable $user, ?\DateTimeInterface $readAt = null): ILog;

    public function markAsUnread(ILog|int $log, bool $userActivityLog = false): ILog;

    public function destroy(
        ILog|int $log,
        bool $userActivityLog = false,
    ): void;
}
