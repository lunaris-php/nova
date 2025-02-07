<?php

    namespace Lunaris\Nova\Utils;

    class Template {
        public static function command($moduleName, $commandName=null) {
            if(!$commandName) {
                $commandName = $moduleName . 'Command';
            }

            $commandContent = <<<PHP
            <?php

                namespace Module\\{$moduleName}\\Commands;

                use Lunaris\\Nova\\Utils\\Loggable;

                class {$commandName}
                {
                    use Loggable;
                    
                    private string \$path;
                    private array \$args;

                    public function __construct(string \$path, array \$args = []) {
                        \$this->path = \$path;
                        \$this->args = \$args;
                    }

                    public function execute(): void {
                        // Write your command logic on execution
                        // Use \$args in your logic as needed
                    }
                }
            PHP;

            return $commandContent;
        }
    }