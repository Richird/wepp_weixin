<?php
//weichengtech
@eval ('//www.phpjiami.com 专属VIP会员加密!');
global $phpjiami_decrypt;
$phpjiami_decrypt['�֮�����î����֯�þ��Į���֥����'] = base64_decode('ZGVmaW5lZA==');
$phpjiami_decrypt['֔�������־ï��ľ֔���È������ĥ'] = base64_decode('bWF4');
$phpjiami_decrypt['���֯֎����������ֈ�Ď����������'] = base64_decode('aW50dmFs');
$phpjiami_decrypt['������֥���È���Ĕ�����֔�������'] = base64_decode('c3RydG9sb3dlcg==');
$phpjiami_decrypt['����î�����ֈ���î�å������֋���'] = base64_decode('dHJpbQ==');
$phpjiami_decrypt['���������þ�������֋֯����֋�֋�'] = base64_decode('aXNfYXJyYXk=');
$phpjiami_decrypt['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�'] = base64_decode('aW1wbG9kZQ==');

if (!$GLOBALS['phpjiami_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fSUE='))) {
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
		$pindex = $GLOBALS['phpjiami_decrypt']['֔�������־ï��ľ֔���È������ĥ'](1, $GLOBALS['phpjiami_decrypt']['���֯֎����������ֈ�Ď����������']($_GPC['page']));
		$psize = 20;
		$params = array();
		$condition = '';
		$searchfield = $GLOBALS['phpjiami_decrypt']['������֥���È���Ĕ�����֔�������']($GLOBALS['phpjiami_decrypt']['����î�����ֈ���î�å������֋���']($_GPC['searchfield']));
		$keyword = $GLOBALS['phpjiami_decrypt']['����î�����ֈ���î�å������֋���']($_GPC['keyword']);
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
		$id = $GLOBALS['phpjiami_decrypt']['���֯֎����������ֈ�Ď����������']($_GPC['id']);

		if (empty($id)) {
			$id = ($GLOBALS['phpjiami_decrypt']['���������þ�������֋֯����֋�֋�']($_GPC['ids']) ? $GLOBALS['phpjiami_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�'](',', $_GPC['ids']) : 0);
		}

		$members = pdo_fetchall('SELECT * FROM ' . tablename('ewei_shop_member') . ' WHERE id in( ' . $id . ' ) AND uniacid=' . $_W['uniacid']);

		foreach ($members as $member) {
			pdo_update('ewei_shop_member', array('isagent' => 0, 'status' => 0), array('id' => $member['id']));
			plog(base64_decode('Y29tbWlzc2lvbi5hZ2VudC5kZWxldGU='), '取消分销商资格 <br/>分销商信息:  ID: ' . $member['id'] . ' /  ' . $member['openid'] . '/' . $member['nickname'] . '/' . $member['realname'] . '/' . $member['mobile']);
		}

		show_json(1, array(base64_decode('dXJs') => referer()));
	}
}

?>
