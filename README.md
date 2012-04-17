# Sneaky
## Overview
Sneaky is a simple plugin that detects whether a template was requested via
AJAX.

## Usage
Sneaky provides a single template tag--`{exp:sneaky}`--which returns a boolean.

    {if {exp:sneaky}}AJAX{/if}

    <!--
      IMPORTANT:
      {if {exp:sneaky} == true} will not work.
    -->
    {if {exp:sneaky} == false}Not AJAX{/if}

    {if {exp:sneaky}}AJAX{if:else}Not AJAX{/if}
