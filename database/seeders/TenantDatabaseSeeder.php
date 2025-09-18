<?php

declare(strict_types=1);

namespace Modules\Tenant\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // Seed test domains
        $this->call([
            DomainsSeeder::class,
            TestSushiSeeder::class,
        ]);
=======
        // $this->call("OthersTableSeeder");
>>>>>>> c6db7044 (.)
=======
        // $this->call("OthersTableSeeder");
>>>>>>> 567888eb (.)
=======
        // $this->call("OthersTableSeeder");
>>>>>>> 55534405 (.)
    }
}
