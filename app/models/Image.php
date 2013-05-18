<?php

class Image extends Eloquent {

  public function user()
  {
    return $this->belongsTo('User');
  }    

  public function selectedTopic()
  {
    return $this->belongsTo('SelectedTopic');
  }

}
