<?php

namespace npc
{
	//不需要躲避禁区的NPC
	$killzone_resistant_typelist = Array(1,4,7,9,13,15,16,20,21,22,40,42,46,88);
	
	$npc_typeinfo=Array(
		1=>'红杀将军',
		2=>'全息幻象',
		//3=>'各路党派',
		4=>'拟似意识',
		5=>'杏仁豆腐',
		6=>'黑幕',
		7=>'幻影执行官',
		8=>'管理员',
		9=>'红杀菁英',
		10=>'',
		11=>'真职人',
		12=>'未名存在',
		13=>'循环使者',
		14=>'数据碎片',
		15=>'模因总裁',
		16=>'幻境技术总监',
		20=>'英雄',
		21=>'武神',
		22=>'天神',
		40=>'模因卫队',
		41=>'卖萌女神',
		42=>'断罪女神',
		45=>'电波幽灵',
		46=>'全息实体',
		88=>'■■',
		90=>'各路党派',
		101=>'妖幻碎片',
		102=>'妖幻片段',
		103=>'妖幻倩影',
		//104=>'你的良心',
		//105=>'妖幻清道夫'
		//91=>'测试品',//教程模式用
	);
	
	$npc_killmsginfo=Array(
		//1=>'任务完结。',
		2=>'猎杀任务执行中。',
		//3=>'你弱爆了！',
		4=>'………………',
		//5=>'记住，轻敌可是会死的。',
		//6=>'忘记历史就意味着背叛，背叛就意味着……死亡。',
		//7=>'你的实力还远远不及董事长的脚根呢。',
		8=>'死吧。',
		//9=>'MISSION COMPLETE',
		10=>'这是我必须做的事，给您添麻烦了……',
		11=>'看看职人的力量！',
		//12=>'你要反省的事情还有很多。',
		14=>Array(
			'战斗模式 梦美' => '目标破坏世界的行为已被阻止。',
			'本气（？） 叶留佳' => '小叶子多谢大触指教！',
			'守卫者 静流' => '………………………………',
		),
		90=>Array(
			'复读机' => '不要打断我的复读！',
			'秦国人' => 'Rua！',
			'白学家' => '为什么你翻得这么熟练啊！',
			'膜触党' => '触手爷爷你不要死啊！',
		),
	);
	
	$npc_lwinfo = Array(
	1 => '任务执行成功率下降，重新计算成功率。',
	2 => Array(
    '幻影斗将神 S.A.S' => '机体受损过重，任务被迫中止。',
    '熵魔法传人 Howling' => '机体受损过重，任务被迫中止。',
    '通灵冒险家 星海' => '机体受损过重，任务被迫中止。',
    '银白愿天使 Annabelle' => '机体受损过重，任务被迫中止。',
    '麻烦妖精 Sophia' => '机体受损过重，任务被迫中止。',
    '思念体-触手众' => '设定脱出路线。目标：非洲大陆。',
    '水濑 名雪-改' => '机体受损过重，任务被迫中止。',
    '立华 奏-改' => '机体受损过重，任务被迫中止。',
    '思念体-海马 濑人' => '机体受损过重，任务被迫中止。',
	),
	//3 => '我觉得我还可以抢救一下……',
	4 => Array(
    '■' => '…………还真的是优秀的个体呢……',
	),
	5 => Array(
		'冴月 麟' => '【RETREAT】',
		'某四面' => ' ♪ Sharing kindness ♪ ',
	),
	6 => '不……不准拿走……快还给我……还给我……',
	7 => Array(
		'电击使 御坂 美琴' => '力尽了……我还……不够强大啊……',
		'班主任 坂持 金发' => '记住吧：如果你憎恨一个人，便要为此付出代价。',
		'花之领主 风见 幽香' => '输掉了啊，不过下次死的就是你了哦！'
	),
	8 => '系统出错了吗？',
	9 => 'Mission in jeopardy, Begin ALT_ROUTINE.',
	10 => '……',
	11 => Array(
    'Hank' => '咳，时代变了么……',
    '爱情上甘岭' => '咳，时代变了么……', 
    '221' => '咳，时代变了么……',
    'Erul Tron' => '咳，时代变了么……',
		'亚玛丽欧·维拉蒂安' => '咳，时代变了么……',
		'便当盒' => '启动ALT+F4紧急脱出程序。',
    '霜火协奏曲' => '咳，时代变了么……', 
    '脸骑士-菜包' => '咳，时代变了么……',
		'东方地雷殿' => '啊。。！放开这个地雷！他还年轻！',		
		'別忘了我' => '做得很好，你又更邁進PVE之路的終點了，加油加油！願我的筆記本可以為你帶來幸運。',
	),
	12 => Array(
		'Dark Force幼体' => '我……!',
		'Dark Force' => '请记住，我是由人类的欲望而生的存在，只要人类存在，我也一样会。我们还会再见的，勇敢的人。',
	),
	13 => Array(
		'库特' => '我……我还不能死在这里……还有人在等着我……！',
		'莱卡' => 'Dangerous Situation...Retreat.',
		'卡玛·克莱因' => '干得不错！在新的世界里再会吧，勇敢的挑战者。'
	),
	14 => Array(
		'讲解员 梦美' => '出了故障的，并不是我，而是——',
//		'吉祥物 库特' => '我……我还不能死在这里……还有人在等着我……！',
		'风纪委员 静流' => '………………………………！',
		'喧哗少女 叶留佳' => '超級火大！要知道現在小葉子的火氣比海平面還高了啊！',
		'战斗模式 梦美' => '受损超出预期值……放弃武装、脱出。',
		'本气（？） 叶留佳' => '输掉了？这不可能！我的LP难道不是你的80倍么？！',
//		'科学监察 莱卡' => 'Dangerous situation...Escape capsule launched.',
		'守卫者 静流' => '………………………………？！',
	),
	15 => Array(
		'狂飙' => '猫抓老鼠的游戏得先放一放了。',
		'无尽狂飙' => '我又……坠机了吗……？可恶，全员、准备撤离！',
	),
	16 => '我说过了，这是徒劳无功的。',
	20 => '這就是善有善報嗎？',
	21 => Array(
		'黑熊' => '雪崩！',
		'水月' => '……',
		'北京推倒你' => '看起来快结束了呢。小心不要一时疏忽领便当了哦。',
	  'BorisX' => 'Boris retreating.',
		'Yoshiko-G' => '什麼？你敢殺我，小心吃我權限啦！',
		'Renamon' => '啊！反正我很没存在感嘛……消失了也无所谓的……吧。',
		'beijuzhu' => '北極豬已逃，搬運９課任務完成。',
		'黑色奪魂曲' => 'THE END.',
		'捂脸姬' => '作為ACFUN大逃殺第一批的玩家，肯定是跟不上現代的腳步了啊。',
		'埃尔兰卡' => '直此之前，我为尘埃。即此之后，便作泥土。',
	),	
	22 => Array(
		'冴月麟MK-II' => '一场酣畅淋漓的战斗！脱出！',
		'星莲船四面BOSS' => '我～还～会～再～回～来～的～',
		'虚子' => '你做完后，你的心理得到什么样的满足感，你自己清楚！',
		'lemon' => 'Mission failed.',
	),
	24 => Array(
		'测试用鱼装自走兵器' => '有些东西，不靠战争是保护不了的！',
	),
	25 => Array(
	  '肥宅' => '你要干什么！不要过来！',
		'春原 阳平' => '呜哇~',
		'真猎人' => '在怪物猎人在索系平台上出新作之前我还不能死啊……',
	  '彩虹独角兽' => '[sob][sob]',
		'海星王' => '没有“他”，我果然还是不行么……',
		'红帽少年' => '现在你就是新的联盟冠军了！',
		'海豹部队' => 'Mission Failed.',
		'萨鲁法尔大王' => '今天，如果我们战死，死在这片战场上，我们虽死犹荣。',
		'Chuck Norris' => 'That’s no glitch.',
	),	
	40 => '总裁女士，情况不容乐观，在下先走一步。',
	41 => '在一个地方逗留太久会爆人品。观众们也是这么想的吧！',
	42 => Array(
		'一一五' => '呵呵……莫非你真的以为，我 会 死 ？',
		'一一五 i' => '你的执念比我的套装还强！这个世界……究竟怎么回事？！',
	),
	44 => '怎……怎么会这样？',
	45 => '幽灵的背后是尊严，而电波的尊严是不怕子弹的！',
	46 => Array(
    '幻影斗将神 S.A.S' => '没关系，我钱多，我去买复活药……',
    '熵魔法传人 Howling' => '啊～啊，还没玩够呢，撤退撤退～',
    '通灵冒险家 星海' => '咕，幸亏我做好了医疗保险！',
    '银白愿天使 Annabelle' => '飞不起来了啊！这时候就要……隐身术！',
    '麻烦妖精 Sophia' => '在这里就被干掉的话还叫什么主角！主角都要从舞台左边离开的！',
	),
	89 => '咕咕……鹌鹑，咕咕咕，大鹌鹑……',
	90 => Array(
		'复读机' => '复读机撤回了一条消息',
		'秦国人' => '停一下，pong友，停一下！',
		'白学家' => '可是，为什么会变成这样呢？',
		'膜触党' => '群地位-1',
	),
	101 => '数据回收完成，上传数据中。',
	102 => '虽然还没玩够，但还是到此为止！',
	103 => '尘归尘，土归土，字节归字节，数据归数据……',
	//104 => '天明姐，海鸣姐……这次大概到此为止了……对不起……',
	//105 => '这活还真的是不好干啊……',
	//91 => '系统严重受损，进入待机模式。'
	);
	$npc_revive_info = array(
		1 => '看来运气站在我这一边。',
		42 => Array(
			'一一五 i' => '干得不错，但是——我 也 能 投 币 ！',
		),
	);

	//campfireMOD中不需要躲避禁区的NPC
	$campfire_killzone_resistant_typelist=Array(1003,1004);
	$killzone_resistant_typelist = $killzone_resistant_typelist+$campfire_killzone_resistant_typelist;
	//campfireMOD新增NPC类别
	$campfire_npc_typeinfo = Array
	(
		1001 => '虚拟体-C型',
		1002 => '虚拟体-V型',
		1003 => '错误：未授权人员',
		1004 => '高自律型战斗模块',
		1005 => '残留信息',		
	);
	$npc_typeinfo = $npc_typeinfo+$campfire_npc_typeinfo;
	//campfireMOD新增NPC类别的击杀信息
	$campfire_npc_killmsginfo = Array
	(
		1001 => '1BF52:MEME COLLECTED;',
		1002 => '1BF52:MEME COLLECTED',
		1003 => Array(
			'Mr.Lein' => '采集到不错的样本了。',
		),
		1004 => 'MISSION：BATTLE DATA UPLOADING...',
		1005 => '好好感受我的怨念吧！',
	);
	$npc_killmsginfo = $npc_killmsginfo+$campfire_npc_killmsginfo;
	//campfireMOD新增NPC类别的死亡信息
	$campfire_npc_lwinfo = Array
	(
		1001 => '1BF52:ERROR_COULD_NOT_FIND_...',
		1002 => '1BF52:ERROR_COULD_NOT_FIND_...',
		1003 => Array(
			'Mr.Lein' => '还没采集到足够的数据样本……不过……这样也不赖……',
		),
		1004 => 'WARNING：BAT...',
		1005 => '活着被系统欺负，死了还被你们鞭尸，这世界还有没有人性啦！',
	);
	$npc_lwinfo = $npc_lwinfo+$campfire_npc_lwinfo;
}

?>