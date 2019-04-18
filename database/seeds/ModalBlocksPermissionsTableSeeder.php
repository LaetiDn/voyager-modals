<?php

namespace Ctrlweb\VoyagerModals\Seeds;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class ModalBlocksPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $keys = [
            'browse_admin',
            'browse_database',
            'browse_media',
            'browse_compass',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }

        Permission::generateFor('modal_blocks');
    }
}
