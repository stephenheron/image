<?php

class SelectedTopic extends Eloquent {

  public function topic()
  {
    return $this->belongsTo('Topic');
  }    

}
