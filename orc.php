
<?php
/**
 * class orc
 * 
 */
class orc extends character
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   * 
   * @access public
   */
  public $health;

  /**
   * 
   *
   * @return bool
   * @access public
   */
  function useHammer()
  {
    
  } // end of member function useHammer

  /**
   * 
   *
   * @return bool
   * @access public
   */
  function useSword()
  {
    
  } // end of member function useSword




  /**
   * initAttributes sets all orc attributes to its default value. Make sure to call
   * this method within your class constructor
   */
  function initAttributes()
  {
    $this->health = 1000;
  }


} // end of orc
?>
