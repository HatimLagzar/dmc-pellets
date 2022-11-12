<?php

namespace Database\Seeders;

use App\Models\AppImage;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $password = '1234567890'; // TEMPORARY!
        DB::table('users')
            ->upsert([
                'name'     => 'Admin',
                'email'    => 'm.negelya@gmail.com',
                'password' => bcrypt($password)
            ], ['email']);

        DB::table('content')
            ->upsert([
                'user_id'   => 1,
                'type'      => 'contacts',
                'html_data' => '<p>You can reach them at:</p>
<p>Phone: 03841-303060</p>
<p>Email: contact@dmc-pellets.com</p>
<p><br></p>
<p>DMC Pellets is a brand of Wismar Pellets GmbH</p>
<p><span class="ql - size - small">Wismar Pellets GmbH</span></p>
<p><span class="ql - size - small">At Torney 2a</span></p>
<p><span class="ql - size - small">23970 Wismar</span></p>'
            ], ['type']);

        DB::table('content')
            ->upsert([
                'user_id'   => 1,
                'type'      => 'dealer_name',
                'html_data' => 'DMC Pellets'
            ], ['type']);

        $images = [
            'DMC_LOGO.jpg',
            'Ganze Palette GP-Saecke.jpg',
            'GermanPellets Paletten.jpg',
            'GP LKW Abfahrt.jpg',
            'GP LKW Herbrechtingen.jpg',
            'GP Palette Nah.jpg',
            'GP Sack einzeln.jpeg',
            'GP_Sackware offen.jpg',
            'GP-Sack auf Foerderband.jpg',
            'LW Schlaeuche.jpg',
            'Silo-LKW-unter-Verladung.jpg',
        ];

        foreach ($images as $image) {
            AppImage::query()
                ->upsert([
                    AppImage::FILE_NAME_COLUMN => $image
                ], [AppImage::FILE_NAME_COLUMN]);
        }
    }
}
