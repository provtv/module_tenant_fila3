<?php

declare(strict_types=1);

namespace Modules\Tenant\Console\Commands;

use Illuminate\Console\Command;
use Modules\Tenant\Services\TenantService;

class TestCommand extends Command
{
    /** @var string */
    protected $signature = 'tenant:test';

    /** @var string */
    protected $description = 'Check Tenant';

    /**
     * Execute the console command.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle(): void {
=======
    public function handle()
    {
>>>>>>> c6db7044 (.)
=======
    public function handle()
    {
>>>>>>> 567888eb (.)
=======
    public function handle()
    {
>>>>>>> 55534405 (.)
        $name = TenantService::getName();
        $this->info('tenant name :'.$name);
    }
}
