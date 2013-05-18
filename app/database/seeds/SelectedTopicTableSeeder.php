<?php
class SelectedTopicTableSeeder extends Seeder{
  public function run() {
    $now = new DateTime('NOW');
    DB::table('selected_topics')->delete();

    SelectedTopic::create(
      array(
        'topic_id'    => 1,
        'created_at'  => $now,
        'updated_at'  => $now,
      )
    );
  }
}
