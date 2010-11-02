<?php 

/**
 * knpTime allows the tester to set time directly, thus allowing him to test
 * the behavior of a function at two different times.
 *
 * @package knpTime
 */
class knpTime
{
  static protected $time = null;
  
  /**
   * Get the current timestamp (or the one forced via setDate or setTime)
   *
   * @return int The timestamp
   */
  static public function getTime()
  {
    if(self::$time) {
      return self::$time;
    }
    return time();
  }
  
  /**
   * Reset knpTime to use real time
   *
   * @return void
   */
  static public function reset()
  {
    self::$time = null;
  }

  /**
   * Force a timestamp
   *
   * @param int A timestamp
   */
  static public function setTime($time)
  {
    return self::$time = $time;
  }

  /**
   * Force about any English textual datetime description. Convenience function.
   *
   * @param string A date 
   * @return int The timestamp
   */
  static public function setDate($date)
  {
    if (self::$time) {
      return self::$time = strtotime($date, self::$time);
    }
    return self::$time = strtotime($date);
  }
}
