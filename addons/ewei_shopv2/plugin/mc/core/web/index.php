<?php
//weichengtech
@eval ('//www.phpjiami.com 专属VIP会员加密!');
global $phpjiami_decrypt;
$phpjiami_decrypt['�֮�����î����֯�þ��Į���֥����'] = base64_decode('ZGVmaW5lZA==');
$phpjiami_decrypt['����������Ô�������È��Ë�������'] = base64_decode('aGVhZGVy');

if (!$GLOBALS['phpjiami_decrypt']['�֮�����î����֯�þ��Į���֥����'](base64_decode('SU5fSUE='))) {
	exit(base64_decode('QWNjZXNzIERlbmllZA=='));
}

class Index_EweiShopV2Page extends PluginWebPage
{
	public function main()
	{
		$GLOBALS['phpjiami_decrypt']['����������Ô�������È��Ë�������'](base64_decode('bG9jYXRpb246IA==') . webUrl(base64_decode('bWMvaW5kZXgvaW5kZXg=')));
		exit();
	}

	public function index()
	{
		global $_W;
		include $this->template();
	}
}

?>
