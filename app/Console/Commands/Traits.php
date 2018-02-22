<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class Traits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:traits {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Trais';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
			$file_path = app_path('Traits');
			
		if (!File::exists($file_path)) {
		File::makeDirectory($file_path);
		}

		
		$file_name = $this->argument('file') . '.php';
		$file_content = "<?php" . "\n" . "namespace App\Traits;" . "\n\n" . "class " . $this->argument('file') . "\n" .
		"{". "\n\n	//Your Code here. \n\n" ."}";

		
		File::put($file_path . '/' . $file_name, $file_content);

		
		$this->info('Helper File ' . $file_name . ' Created successfully in ' . $file_path);
    }
}
