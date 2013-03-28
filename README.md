## An Important Note About Support
Sneaky (in common with all of my ExpressionEngine add-ons) is not officially supported.

The source code is reasonably well-documented, and this README includes basic usage instructions. You are also free to fork the repo if you'd like to make some changes or improvements (it's distributed under a liberal open source license).

Hopefully this will be everything you need to use this add-on in your projects, but if not please don't email me asking for support; I don't even have ExpressionEngine installed locally any more.

## Overview
Sneaky is a simple plugin that detects whether a template was requested via AJAX.

## Usage
Sneaky provides a single template tag--`{exp:sneaky}`--which returns a boolean.

~~~~~php
{if {exp:sneaky}}AJAX{/if}

<!-- IMPORTANT: {if {exp:sneaky} == true} will not work. -->
{if {exp:sneaky} == false}Not AJAX{/if}
{if {exp:sneaky}}AJAX{if:else}Not AJAX{/if}
~~~~~
