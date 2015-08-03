<?php
class Hooks_cp_clean extends Hooks {

  //version < 1.5
  function add_to_control_panel_head() {
    return self::include_css('cp_clean.css');
  }


  //version 1.5 and above
  function control_panel__add_to_head() {
    return $this->css->link('cp_clean.css');
  }
  /*function control_panel__add_to_foot() {
    return $this->js->link('cp_clean.js');
  }*/

}
