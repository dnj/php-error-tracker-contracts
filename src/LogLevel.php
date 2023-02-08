<?php

namespace dnj\ErrorTracker\Contracts;

enum LogLevel
{
    case DEBUG; // Designates fine-grained informational events that are most useful to debug an application.
    case INFO; // Designates informational messages that highlight the progress of the application at coarse-grained level.
    case WARN; // Designates potentially harmful situations.
    case ERROR; // Designates error events that might still allow the application to continue running.
    case FATAL; // Designates very severe error events that will presumably lead the application to abort.

    public static function getAllValues(): array
    {
        return array_column(LogLevel::cases(), 'value');
    }

}
