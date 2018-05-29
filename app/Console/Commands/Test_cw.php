<?php

namespace App\Console\Commands;

use App\Models\Keyword;
use Illuminate\Console\Command;

class Test_cw extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cw';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
//        $contents = file_get_contents('C:\Users\mayn\Desktop\tedst.txt');
        $file = fopen('C:\Users\mayn\Desktop\tedst.txt', "r");
        $user = array();
        $i = 0;
        while (!feof($file)) {
            $user[$i] = fgets($file);
            $i++;
        }
        fclose($file);
        $user = array_filter($user);
        foreach ($user as $item) {
            $item = trim($item);
            Keyword::create(['keyword' => $item]);
        }
    }
}
