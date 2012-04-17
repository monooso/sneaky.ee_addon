<?php if ( ! defined('BASEPATH')) exit('Invalid file request');

/**
 * Sneaky plugin tests.
 *
 * @author          Stephen Lewis (http://github.com/experience/)
 * @copyright       Experience Internet
 * @package         Sneaky
 */

require_once PATH_THIRD .'sneaky/pi.sneaky.php';

class Test_sneaky extends Testee_unit_test_case {


  /* --------------------------------------------------------------
   * PUBLIC METHODS
   * ------------------------------------------------------------ */

  /**
   * Constructor.
   *
   * @access  public
   * @return  void
   */
  public function setUp()
  {
    parent::setUp();
  }


  public function test__constructor__works_if_valid_ajax_request()
  {
    $_SERVER['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';

    $subject = new Sneaky();
    $this->assertIdentical('true', $subject->return_data);
  }


  public function test__constructor__returns_false_if_server_variable_not_set()
  {
    unset($_SERVER['HTTP_X_REQUESTED_WITH']);

    $subject = new Sneaky();
    $this->assertIdentical('false', $subject->return_data);
  }


  public function test__constructor__returns_false_if_server_variable_not_ajax()
  {
    $_SERVER['HTTP_X_REQUESTED_WITH'] = 'ClearlyNotAJAX';

    $subject = new Sneaky();
    $this->assertIdentical('false', $subject->return_data);
  }


}


/* End of file      : test.pi_sneaky.php */
/* File location    : third_party/sneaky/tests/test.pi_sneaky.php */
