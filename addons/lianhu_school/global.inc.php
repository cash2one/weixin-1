<?php
global $_W;
$line_type=array(
	'班级活动',
	'班级公告',
	'日常点滴',
	'重要事务',
);
$_W['line_type']=$line_type;
$appointment=array(
	'课程预约',
	'兴趣小组',
	'集体活动',
);
#请不要变动appointment_limit
$appointment_limit=array(
	'全校',
	'年级限制',
	'班级限制',
	);
$_W['appointment']=$appointment;
$_W['appointment_limit']=$appointment_limit;