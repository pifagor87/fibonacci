<?php

/**
 * Class handler logic Fibonacci.
 */
class fibonacciNumbers {
  private $count;
  private $functionName;

  /**
   * Method construct.
   */
  public function __construct($name, $count) {
    $this->count = $count;
    $this->functionName = $name;
  }

  /**
   * Calculation Fibonacci. Method fibonacciFirst().
   */
  private function fibonacciFirst() {
    $root = sqrt(5);
    $numericA = (1 + $root) / 2;
    $numericB = (1 - $root) / 2;
    return (pow($numericA, $this->count) - pow($numericB, $this->count)) / $root;
  }

  /**
   * Calculation Fibonacci. Method fibonacciSecond().
   */
  private function fibonacciSecond() {
    return round(pow((sqrt(5) + 1) / 2, $this->count) / sqrt(5));
  }

  /**
   * Calculation Fibonacci. Method  fibonacciFirst().
   */
  private function fibonacciThird() {
    $n = $this->count;
    $a = 1;
    $b = 0;
    for ($i = 0; $i < $n; $i++) {
      $x = $a + $b;
      $a = $b;
      $b = $x;
    }
    return $b;
  }

  /**
   * Return result.
   */
  function getValue() {
    if (method_exists($this, $this->functionName)) {
      return $this->{$this->functionName}();
    }
    return '<strong>An error occured when calling function.</strong>';
  }

}

?>