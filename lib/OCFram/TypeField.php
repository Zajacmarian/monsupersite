<?php
namespace OCFram;

class TypeField extends Field
{
  protected $types = [];

  public function buildWidget()
  {
    $widget = '';
    
    if (!empty($this->errorMessage))
    {
      $widget .= $this->errorMessage.'<br />';
    }
    
    $widget .= '<label>'.$this->label.'</label><select name="'.$this->name.'" ';
    
    $widget .= '>';

    foreach($this->types AS $type)
    {
    	   // var_dump($type);die;
       	//Utilise le tableau de valeurs
       	$widget .= '<option value='.$type['BAY_id'].'>'.$type['BAY_description'].'</option>';
    }
    $widget .= '</select>';
    
    return $widget;
  }
  public function setType($types)
  {
  	$this->types = $types;
  }
  
}
?>