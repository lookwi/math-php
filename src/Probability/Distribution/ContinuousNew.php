<?php
namespace Math\Probability\Distribution;
//use Math\Solver\Newton;
abstract class Continuous extends Distribution {
  /**
   * The Probability Density Function
   *
   * https://en.wikipedia.org/wiki/Probability_density_function
   */
  static function PDF(){}
  /**
   * The Cumulative Distribution Function
   *
   * All children should define their own CDF, ensuring that the $x parameter
   * is first in the parmeter list. This is neeed for the default inverse
   * function to correctly work.
   *
   * https://en.wikipedia.org/wiki/Cumulative_distribution_function
   */
  static function CDF(){}
  /**
   * The Inverse CDF of the distribution
   * 
   * $target - The area for which we are trying to find the $x
   * $params - a list of all the parameters that are needed for the CDF of the
   *   calling class. This list must be absent the $x parameter.
   *
   * For example, if the calling class CDF definition is CDF($x, $d1, $d2)
   * than the inverse is called as inverse($target, $d1, $d2)
   *  
   */ 
  static function inverse($target, ...$params){
    //$params = array_merge (['x'], $params);
    //$classname = get_called_class();
    //$callback = [$classname, 'CDF'];
    //return Newton::solve($callback, $params, $target, .5, .00000000000001);
  }
}
