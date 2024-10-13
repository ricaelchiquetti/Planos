<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeEnum extends Command
{
    protected $signature = 'make:enum {name} {--cases=}';
    protected $description = 'Create a new Enum class';

    public function handle()
    {
        $name = $this->argument('name');
        $cases = $this->option('cases');

        // Se o usuário não fornecer casos, retorna um aviso.
        if (!$cases) {
            $this->error('Please provide cases for the enum using --cases option.');
            return;
        }

        $casesArray = explode(',', $cases);
        $enumClass = "<?php\n\nnamespace App\\Enums;\n\nenum $name: string\n{\n";

        foreach ($casesArray as $case) {
            $caseName = strtoupper(trim($case));
            $enumClass .= "    case $caseName = '" . trim($case) . "';\n";
        }

        $enumClass .= "}\n";

        // Verifica se a pasta Enums existe, se não, cria.
        $enumDir = app_path('Enums');
        if (!is_dir($enumDir)) {
            mkdir($enumDir, 0755, true);
        }

        $filePath = app_path("Enums/{$name}.php");

        // Tenta escrever o arquivo e captura possíveis erros.
        if (file_put_contents($filePath, $enumClass) === false) {
            $this->error("Failed to create enum $name.");
        } else {
            $this->info("Enum $name created successfully at $filePath.");
        }
    }
}
