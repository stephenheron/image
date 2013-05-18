<?php

class UserTableSeeder extends Seeder{
  public function run() {
    $now = new DateTime('NOW');
    DB::table('users')->delete();

    User::create(
      array(
        'id'         => 1,
        'username'   => 'stephen.heron@gmail.com',
        'password'   => Hash::make('password'),
        'forename'   => 'Stephen',
        'surname'    => 'Heron',
        'created_at' => $now,
        'updated_at' => $now,
      )
    );
  }
}
