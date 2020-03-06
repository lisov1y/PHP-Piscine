<?php
  include "Fighter.class.php";

  class UnholyFactory {
    private $_soldiers = array();
    public function absorb($per) {
      if ($per instanceof Fighter and in_array($per, $this->_soldiers) == false) {
        $this->_soldiers[] = $per;
        echo "(Factory absorbed a fighter of type " . $per->name . ")\n";
      }
      else if ($per instanceof Fighter == false) {
        echo "(Factory can't absorb this, it's not a fighter)\n";
      }
      else if (in_array($per, $this->_soldiers)) {
        echo "(Factory already absorbed a fighter of type " . $per->name . ")\n";
      }
    }
    public function fabricate($per) {
      foreach ($this->_soldiers as $obj) {
        if ($obj->name == $per) {
          echo "(Factory fabricates a fighter of type " . $per . ")\n";
          return $obj;
        }
      }
      echo "(Factory hasn't absorbed any fighter of type " . $per . ")\n";
    }
}
?>