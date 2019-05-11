<?php
/**
*@package SPDXSpecificationPlugin
*/

class SPDXPluginDeactivate
{
  public static function deactivate() {

    flush_rewrite_rules();

  }

}
