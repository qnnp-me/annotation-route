<?php
/**
 * This file is part of webman-auto-route.
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    qnnp<qnnp@qnnp.me>
 * @copyright qnnp<qnnp@qnnp.me>
 * @link      https://main.qnnp.me
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Qnnp\WebmanRoute\Module\OpenAPI;

/**
 * @link https://swagger.io/specification/#tag-object 规范文档
 */
class tag {
  /**
   * <div style="color:#E97230;">string</div>
   */
  const name = 'name';
  /**
   * <div style="color:#E97230;">string</div>
   */
  const description = 'description';
  /**
   * <div style="color:#E97230;">External Documentation Object</div>
   *
   * @see externalDocs
   */
  const externalDocs = 'externalDocs';
}