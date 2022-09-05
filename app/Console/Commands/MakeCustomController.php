<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeCustomController extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:customController';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a custom controller';

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Controllers\Api';
    }

    public function getStub()
    {
        return base_path('stubs/controller.stub');
    }
}
