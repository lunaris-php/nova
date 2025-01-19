<?php

    namespace Lunaris\Nova\Providers;

    class NovaProvider {
        public function getCommands() {
            return [
                "make:command" => \Lunaris\Nova\Commands\MakeCommand::class,
            ];
        }
    }