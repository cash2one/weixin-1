<?php
global $_W,$_GPC;
	$from_user=$_GPC['openid'];
	$goods=pdo_fetch("SELECT * FROM ".tablename('weliam_indiana_goodslist')." WHERE uniacid = '{$uniacid}' and id ='{$_GPC['sid']}'" );
	$member=pdo_fetch("SELECT * FROM ".tablename('weliam_indiana_member')." WHERE from_user = '{$from_user}' and uniacid = '{$uniacid}'" );

	if (checksubmit()) {
		$data = $_GPC['express']; // 获取打包值
		$data['send_state']=1;
		$data['send_time']=TIMESTAMP;

		$ret = pdo_update(weliam_indiana_goodslist, $data, array('id'=>$goods['id']));
		if (!empty($ret)) {
			message('发货成功', referer(), 'success');
		} else {
			message('发货失败');
		}
	}

	include $this->template('sendprize');
?>