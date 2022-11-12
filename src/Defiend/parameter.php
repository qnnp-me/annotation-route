<?php

namespace Qnnp\WebmanRoute\Defiend;
/**
 * @link https://spec.openapis.org/oas/v3.1.0#parameter-object
 */
class parameter {
  /**
   * REQUIRED
   */
  const name = 'name';
  /**
   * REQUIRED <br/>
   * Possible values are "query", "header", "path" or "cookie".
   */
  const in              = 'in';
  const description     = 'description';
  const required        = 'required';
  const deprecated      = 'deprecated';
  const allowEmptyValue = 'allowEmptyValue';
  /**
   * The values see styleEnumObject
   *
   * @see styleEnum
   */
  const style         = 'style';
  const explode       = 'explode';
  const allowReserved = 'allowReserved';
  const schema        = 'schema';
  const example       = 'example';
  /**
   * {name:exampleObject, ...}
   */
  const examples = 'examples';
  /**
   * {name:mediaTypeObject, ...}
   */
  const content  = 'content';

  static $required        = boolean::class;
  static $deprecated      = boolean::class;
  static $allowEmptyValue = boolean::class;
  static $explode         = boolean::class;
  static $allowReserved   = boolean::class;
  static $styleEnum       = styleEnum::class;
  static $example         = example::class;
  static $content         = mediaType::class;
}