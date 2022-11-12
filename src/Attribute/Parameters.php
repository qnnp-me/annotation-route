<?php
/*
 * This file is part of webman-auto-route.
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    qnnp<qnnp@qnnp.me>
 * @copyright qnnp<qnnp@qnnp.me>
 * @link      https://qnnp.me
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Qnnp\WebmanRoute\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class Parameters {
  /**
   * <span style="color:#E97230;">用于路径（Path Item）或者操作（Operation）的参数（Parameter Object）列表</span>
   *
   * @see https://spec.openapis.org/oas/v3.1.0#path-item-object Path Item Object
   * @see https://spec.openapis.org/oas/v3.1.0#operation-object Operation Object
   * @see https://spec.openapis.org/oas/v3.1.0#parameter-object Parameter Object
   * @see https://spec.openapis.org/oas/v3.1.0#reference-object Reference Object
   *
   * @param array $parameters <span style="color:#E97230;">[ParameterObject|ReferenceObject, ...[]]</span>
   */
  public function __construct(
    array $parameters = [ParameterObject || ReferenceObject, ...[]]
  ) {

  }
}