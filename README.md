# Sneaky
## Overview
Sneaky is a simple plugin that detects whether a template was requested via
AJAX.

Unlike some other "is AJAX" plugins, Sneaky doesn't use ExpressionEngine's
`$this->EE->input->is_ajax()` method, preferring instead to perform its own
(somewhat more robust) check.

This isn't simply uncontrollable hubris on the part of the author. Rather, it is
due to the fact that the EE method is occasionally unreliable, and therefore a
bit useless.

## Usage
Sneaky provides a single template tag--`{exp:sneaky}`--which returns a boolean.
 
    {if {exp:sneaky}}AJAX{/if}

    <!--
      IMPORTANT:
      {if {exp:sneaky} == true} will not work.
    -->
    {if {exp:sneaky} == false}Not AJAX{/if}

    {if {exp:sneaky}}AJAX{if:else}Not AJAX{/if}
