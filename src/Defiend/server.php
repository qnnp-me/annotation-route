<?php

namespace Qnnp\WebmanRoute\Defiend;

class server {
  /**
   * ^http(s?)://example.com/{variable}...
   */
  const url         = 'url';
  const description = 'description';
  /**
   * {serverVariableName: serverVariableObject, ...}
   *
   * @see serverVariable
   */
  const variables = 'variables';

  static $variable = serverVariable::class;
}