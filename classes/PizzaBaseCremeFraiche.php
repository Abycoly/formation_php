<?php
  include('./Pizza.php');

  class PizzaBaseCremeFraiche extends Pizza {

    public function __construct($nom, $listeIngredients, $prix) {
      parent::__construct($nom, $listeIngredients, $prix);
      $this->listeIngredients = array_merge(array('base crème fraiche'), $this->listeIngredients);
    }

    public function display(){
      echo '<div style="color: yellow;">';
      
      parent::display();
      
      echo '</div>';
    }
  }

  $pizza = new PizzaBaseCremeFraiche('tartiflette', array('reblochon', 'lard fumé'), 15);
  $pizza->display();