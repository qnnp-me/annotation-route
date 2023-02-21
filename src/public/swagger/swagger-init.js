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

window.onload = function () {
  const HideCurlPlugin  = (system) => {
    return {
      wrapComponents: {
        curl: () => () => null
      }
    }
  }
  
  window.ui = SwaggerUIBundle(
    {
      // 请求超时时间？，毫秒
      displayRequestDuration: 60000,
      // 显示标签组数量，0全部
      maxDisplayedTags: 0,
      //
      requestSnippets: {},
      urls           : [
        {
          name: 'Develop API: ' + window.location.protocol + '//' + window.location.host + '/openapi.json',
          url : window.location.protocol + '//' + window.location.host + '/openapi.json'
        },
        {
          name: 'Product API: ' + window.location.protocol + '//' + window.location.host + '/openapi-product.json',
          url : window.location.protocol + '//' + window.location.host + '/openapi-product.json'
        },
      ],
      url            : window.location.protocol + '//' + window.location.host + '/openapi.json',
      dom_id         : '#swagger-ui',
      // 链接自动打开 Tag
      deepLinking: true,
      // 默认标签展示方式，list|full|none
      docExpansion: 'none',
      // 标签筛选器
      filter: true,
      // 测试按钮默认启用
      tryItOutEnabled: true,
      //
      showExtensions: true,
      //
      showCommonExtensions: true,
      // 保存验证信息
      persistAuthorization: true,
      // 代码高亮主题
      syntaxHighlight: {
        active: true,
        theme : 'obsidian'
      },
      // 标签组排序
      tagsSorter (a, b) {
        // 将默认 Tag 排到最后
        if (a === 'default') {
          return 1
        }
        if (b === 'default') {
          return -1
        }
        // 按照中文排序
        return a.localeCompare(b, 'zh-hans')
      },
      responseInterceptor (res) {  // 请求响应回调
        return res
      },
      // 请求代码
      requestSnippetsEnabled: false,
      presets               : [
        SwaggerUIBundle.presets.apis,
        SwaggerUIStandalonePreset
      ],
      plugins               : [
        HideCurlPlugin,
        HierarchicalTagsPlugin,
      ],
      layout                : 'StandaloneLayout'
    })
}
