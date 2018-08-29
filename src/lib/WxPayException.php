<?php
// +----------------------------------------------------------------------
// | 微信支付API异常类
// +----------------------------------------------------------------------
// | Author: wk <weika@wcphp.com>
// +----------------------------------------------------------------------

namespace WxPay\lib;

use Exception;

class WxPayException extends Exception {
	public function errorMessage()
	{
		return $this->getMessage();
	}
}
