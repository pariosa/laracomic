<?php

namespace Testing;

use Illuminate\Database\Seeder;
use App\Issue;
use App\Volume;
use App\Authority;
use App\Role;
use App\User;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authority::create([
            'authorables_id' => Issue::create([
                'volume_id' => Volume::where(['number' => -1.5])->first()->id,
                'number' => 0,
                'title' => 'Introduction',
                'description' => 'MOAR test!',
            ])->id,
            'authorables_type' => 'issue',
            'role_id' => Role::where(['name' => 'creator'])->first()->id,
            'user_id' => User::where(['is_author' => true])->first()->id,
        ]);
    }
}
