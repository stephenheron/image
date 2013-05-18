<?php
class TopicTableSeeder extends Seeder{
  public function run() {
    $now = new DateTime('NOW');
    DB::table('topics')->delete();

    Topic::create(
      array(
        'name'        => 'Test Topic',
        'created_at'  => $now,
        'updated_at'  => $now,
      )
    );
  }
}
