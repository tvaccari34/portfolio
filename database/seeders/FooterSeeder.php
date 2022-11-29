<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('footers')->insert([
            'footer_phone_number' => '+11111 111 111',
            'footer_short_description' => 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.',
            'footer_country' => 'United Kingdom',
            'footer_address' => '1st Floor Eton Mansions Bolton Close, Bournemouth',
            'footer_email' => 'team@devkonnect.com',
            'footer_social_title' => 'SOCIALLY CONNECT',
            'footer_social_description' => 'Lorem ipsum dolor sit amet enim. Etiam ullamcorper.',
            'footer_social_facebook' => 'https://www.facebook.com',
            'footer_social_twitter' => 'https://www.twitter.com',
            'footer_social_behance' => 'https://www.behance.net',
            'footer_social_linkedin' => 'https://www.linkedin.com',
            'footer_social_instagram' => 'https://www.instagram.com',
            'footer_copyright' => 'Copyright @ DevKonnect 2022 All right Reserved',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
