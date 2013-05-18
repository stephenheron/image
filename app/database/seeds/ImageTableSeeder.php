<?php
class ImageTableSeeder extends Seeder{
  public function run() {
    $now = new DateTime('NOW');
    DB::table('images')->delete();

    Image::create(
      array(
        'selected_topic_id'    => 1,
        'user_id'              => 1,
        'url'                  => 'http://static.giantbomb.com/bundles/phoenixsite/images/core/loose/logo-gb.png',
        'created_at'           => $now,
        'updated_at'           => $now,
      )
    );
  }
}
