<?php

namespace Qnnp\WebmanRoute\Defiend;

class path {
  /**
   * @link https://spec.openapis.org/oas/v3.1.0#path-item-object
   */
  const _ref        = '$ref';
  const summary     = 'summary';
  const description = 'description';
  const get         = 'get';
  const put         = 'put';
  const post        = 'post';
  const delete      = 'delete';
  const options     = 'options';
  const head        = 'head';
  const patch       = 'patch';
  const trace       = 'trace';
  const servers     = 'servers';
  const parameters  = 'parameters';

  static $get       = operation::class;
  static $put       = operation::class;
  static $post      = operation::class;
  static $delete    = operation::class;
  static $options   = operation::class;
  static $head      = operation::class;
  static $patch     = operation::class;
  static $trace     = operation::class;
  static $server    = server::class;
  static $parameter = parameter::class;
}