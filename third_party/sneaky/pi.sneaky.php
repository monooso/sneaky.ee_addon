<?php if ( ! defined('BASEPATH')) exit('Direct script access not allowed');

/**
 * Sneaky plugin.
 *
 * @author          Stephen Lewis (http://github.com/experience/)
 * @copyright       Experience Internet
 * @package         Sneaky
 */

require_once dirname(__FILE__) .'/config.php';

$plugin_info = array(
  'pi_author'       => 'Stephen Lewis',
  'pi_author_url'   => 'http://experienceinternet.co.uk/',
  'pi_description'  => 'Simple plugin that detects whether a template was
                        requested via AJAX.',
  'pi_name'         => SNEAKY_TITLE,
  'pi_usage'        => Sneaky::usage(),
  'pi_version'      => SNEAKY_VERSION
);


class Sneaky {

  private $EE;

  public $return_data = '';


  /* --------------------------------------------------------------
   * STATIC METHODS
   * ------------------------------------------------------------ */

  /**
   * Plugin usage information.
   *
   * @access  public
   * @return  string
   */
  public static function usage()
  {
    return <<<USAGE

# Sneaky
## Overview
Sneaky is a simple plugin that detects whether a template was requested via
AJAX.

## Usage
Sneaky provides a single template tag--{exp:sneaky}--which returns a boolean.
 
    {if {exp:sneaky}}AJAX{/if}

    <!--
      IMPORTANT:
      {if {exp:sneaky} == true} will not work.
    -->
    {if {exp:sneaky} == false}Not AJAX{/if}

    {if {exp:sneaky}}AJAX{if:else}Not AJAX{/if}

USAGE;
  }



  /* --------------------------------------------------------------
   * PUBLIC METHODS
   * ------------------------------------------------------------ */

  /**
   * Constructor.
   *
   * @access  public
   * @param   string    $content    Field content if used for field formatting.
   * @return  void
   */
  public function __construct($content = '')
  {
    // NOTE: EE->input->is_ajax is pretty unreliable, so we do our own checks.
    $is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH'])
      && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

    $this->return_data = $is_ajax ? 'TRUE' : 'FALSE';
  }


}


/* End of file      : pi.sneaky.php */
/* File location    : third_party/sneaky/pi.sneaky.php */
