<?php
//weichengtech
@eval ('//www.phpjiami.com ä¸“å±VIPä¼šå‘˜åŠ å¯†!');
global $phpjiami_decrypt;
$phpjiami_decrypt['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'] = base64_decode('ZGVmaW5lZA==');
$phpjiami_decrypt['Ö””ˆ¥ˆÁÁ®Ö¾Ã¯ÀÁÄ¾Ö”ÁÖÃˆÀÁÀÀ¾ÄÄ¥'] = base64_decode('bWF4');
$phpjiami_decrypt['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ'] = base64_decode('aW50dmFs');
$phpjiami_decrypt['”¯ÁÁÖ¥”ıÃˆ”¯Ä”ˆ¯ıÃÄÖ”ˆ¾ÖÖÀÀ¥'] = base64_decode('c3RydG9sb3dlcg==');
$phpjiami_decrypt['¯ˆÖıÃ®À¥¯ÖÁÖˆ‹¥ÖÃ®¥Ã¥ıÄÖÁÖÁÖ‹¯®Ã'] = base64_decode('dHJpbQ==');
$phpjiami_decrypt['‹¥ı‹”ÖÁÁÃ¾”¥®ÖÁ”Ö‹Ö¯ˆ‹ÄÖÖ‹ÖÖ‹'] = base64_decode('aXNfYXJyYXk=');
$phpjiami_decrypt['ÃÁ¥ÃÖÄˆ®Ö¾¾‹¯ÄˆÖÖÁ”Ö¥¯¯Ä¾ÀˆÄˆ'] = base64_decode('aW1wbG9kZQ==');

if (!$GLOBALS['phpjiami_decrypt']['ÁÖ®ÖÀıÃÃÃ®ˆ¾ˆÖ¯ÃÃ¾¯ˆÄ®¥ÃıÖ¥”ıÄ'](base64_decode('SU5fSUE='))) {
	exit(base64_decode('QWNjZXNzIERlbmllZA=='));
}

class Merchant_EweiShopV2Page extends PluginWebPage
{
	public function main()
	{
		global $_W;
		global $_GPC;
		ca(base64_decode('Y29tbWlzc2lvbi5hZ2VudC52aWV3'));
		$level = $this->set['level'];
		$pindex = $GLOBALS['phpjiami_decrypt']['Ö””ˆ¥ˆÁÁ®Ö¾Ã¯ÀÁÄ¾Ö”ÁÖÃˆÀÁÀÀ¾ÄÄ¥'](1, $GLOBALS['phpjiami_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_GPC['page']));
		$psize = 20;
		$params = array();
		$condition = '';
		$searchfield = $GLOBALS['phpjiami_decrypt']['”¯ÁÁÖ¥”ıÃˆ”¯Ä”ˆ¯ıÃÄÖ”ˆ¾ÖÖÀÀ¥']($GLOBALS['phpjiami_decrypt']['¯ˆÖıÃ®À¥¯ÖÁÖˆ‹¥ÖÃ®¥Ã¥ıÄÖÁÖÁÖ‹¯®Ã']($_GPC['searchfield']));
		$keyword = $GLOBALS['phpjiami_decrypt']['¯ˆÖıÃ®À¥¯ÖÁÖˆ‹¥ÖÃ®¥Ã¥ıÄÖÁÖÁÖ‹¯®Ã']($_GPC['keyword']);
		load()->func(base64_decode('dHBs'));
		include $this->template();
	}

	public function add()
	{
		$this->post();
	}

	public function edit()
	{
		$this->post();
	}

	protected function post()
	{
		include $this->template();
	}

	public function delete()
	{
		global $_W;
		global $_GPC;
		$id = $GLOBALS['phpjiami_decrypt']['”‹¥Ö¯Ö‹ıÁ®ÖÀ®¾¾ÄÖˆ®Ä¯”ı¾‹¾ÄÃıÃ']($_GPC['id']);

		if (empty($id)) {
			$id = ($GLOBALS['phpjiami_decrypt']['‹¥ı‹”ÖÁÁÃ¾”¥®ÖÁ”Ö‹Ö¯ˆ‹ÄÖÖ‹ÖÖ‹']($_GPC['ids']) ? $GLOBALS['phpjiami_decrypt']['ÃÁ¥ÃÖÄˆ®Ö¾¾‹¯ÄˆÖÖÁ”Ö¥¯¯Ä¾ÀˆÄˆ'](',', $_GPC['ids']) : 0);
		}

		$members = pdo_fetchall('SELECT * FROM ' . tablename('ewei_shop_member') . ' WHERE id in( ' . $id . ' ) AND uniacid=' . $_W['uniacid']);

		foreach ($members as $member) {
			pdo_update('ewei_shop_member', array('isagent' => 0, 'status' => 0), array('id' => $member['id']));
			plog(base64_decode('Y29tbWlzc2lvbi5hZ2VudC5kZWxldGU='), 'å–æ¶ˆåˆ†é”€å•†èµ„æ ¼ <br/>åˆ†é”€å•†ä¿¡æ¯:  ID: ' . $member['id'] . ' /  ' . $member['openid'] . '/' . $member['nickname'] . '/' . $member['realname'] . '/' . $member['mobile']);
		}

		show_json(1, array(base64_decode('dXJs') => referer()));
	}
}

?>
