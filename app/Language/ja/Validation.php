<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'バリデーションに必要なルールが設定されていません。',
   'ruleNotFound'          => '{0} は有効なルールではありません。',
   'groupNotFound'         => '{0} はバリデーションルールグループではありません。',
   'groupNotArray'         => '{0} ルールグループは配列ではありません。',
   'invalidTemplate'       => '{0} は有効なバリデーションテンプレートではありません。',

	// Rule Messages
   'alpha'                 => '{field} にはアルファベットのみを入力してください。',
   'alpha_dash'            => '{field} には半角英数字、アンダースコア、ダッシュのみを入力してください。',
   'alpha_numeric'         => '{field} には半角英数字のみを入力してください。',
   'alpha_numeric_punct'   => '{field} には半角英数字、半角スペース、~ ! # $ % & * - _ + = | : .　のみを入力してください。',
   'alpha_numeric_space'   => '{field} には半角英数字と半角スペースのみを入力してください。',
   'alpha_space'           => '{field} にはアルファベットと半角スペースのみを入力してください。',
   'decimal'               => '{field} には半角で10進数を入力してください。',
   'differs'               => '{field} には{param} と異なる値を入力してください。。',
   'equals'                => '{field} は{param} と一致しなければなりません。',
   'exact_length'          => '{field} の長さは {param} 文字でなければなりません。',
   'greater_than'          => '{field} には{param} より大きい半角数値を入力してください。',
   'greater_than_equal_to' => '{field} には{param} 以上の半角数値を入力してください。',
   'hex'                   => '{field} には16進数文字を入力してください。',
   'in_list'               => '{field} には{param} のいずれかの値を入力してください。',
   'integer'               => '{field} には半角整数を入力してください。',
   'is_natural'            => '{field} には半角数字のみを入力してください。',
   'is_natural_no_zero'    => '{field} には半角数字のみを、0より大きい値で入力してください。',
   'is_not_unique'         => '{field} にはデータベース内の既存の値が含まれている必要があります。',
   'is_unique'             => '{field} には一意の値が含まれている必要があります。',
   'less_than'             => '{field} には{param} より小さい半角数値を入力してください。',
   'less_than_equal_to'    => '{field} には{param} 以下の半角数値を入力してください。',
   'matches'               => '{field} は {param} と一致しません。',
   'max_length'            => '{field} は {param} 文字以内で入力してください。',
   'min_length'            => '{field} は {param} 文字以上で入力してください。',
   'not_equals'            => '{field} は {param} と一致しません。',
   'numeric'               => '{field} には半角数字のみを入力してください。',
   'regex_match'           => '{field} の形式が正しくありません。',
   'required'              => '{field} は必須入力です。',
   'required_with'         => '{param} が存在する場合、{field} は必須となります。',
   'required_without'      => '{param} が存在しない場合、{field} は必須となります。',
   'timezone'              => '{field} は有効なタイムゾーンではありません。',
   'valid_base64'          => '{field} には有効なbase64文字列を入力してください。',
   'valid_email'           => '{field} は有効なメールアドレスではありません。',
   'valid_emails'          => '{field} に無効なメールアドレスが含まれています。',
   'valid_ip'              => '{field} には有効なIPアドレスを入力してください。',
   'valid_url'             => '{field} には有効なURLを入力してください。',
   'valid_date'            => '{field} には有効な日付を入力してください。',

	// Credit Cards
   'valid_cc_num'          => '{field} は有効なクレジットカード番号ではありません。',

	// Files
   'uploaded'              => '{field} は有効なファイルではありません。',
   'max_size'              => '{field} はファイルサイズが大きすぎます。',
   'is_image'              => '{field} には画像ファイルを指定してください。',
   'mime_in'               => '{field} は有効なMIMEタイプではありません。',
   'ext_in'                => '{field} は有効なファイル拡張子ではありません。',
   'max_dims'              => '{field} は画像ファイルではないか、幅が広すぎるか高すぎます。',
];