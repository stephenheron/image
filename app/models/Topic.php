<?php

class Topic extends Eloquent {
  public function selectedTopics()
  {
    return $this->hasMany('Topic');
  }
}
