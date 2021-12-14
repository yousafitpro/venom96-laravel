<?php

namespace Database\Seeders;

use App\Models\gateway;
use App\Models\role;
use App\Models\state;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->fname="Muhammad";
        $user->lname="Yousaf";
        $user->phone="+923417414093";
        $user->type="supper-admin";
        $user->status="1";
        $user->address="here will be the address";
        $user->email="admin@gmail.com";
        $user->password=bcrypt('12');
        $user->profile_image="1.png";
        $user->save();

        $role=new role();
        $role->user_id="1";
        $role->name="User";
        $role->save();



        $gw=new gateway();
        $gw->title="Paypal";
        $gw->email="temp@gmail.com";
        $gw->status="1";
        $gw->save();

        $gw=new gateway();
        $gw->title="Stripe";
        $gw->public_key="key-43dfg3432dfg345fd4545gdfg45";
        $gw->private_key="key-sfsd234234dfssdf34435";
        $gw->status="1";
        $gw->save();



    }
}
