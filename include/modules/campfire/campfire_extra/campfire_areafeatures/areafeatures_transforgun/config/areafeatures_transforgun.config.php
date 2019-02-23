<?php

namespace areafeatures_transforgun
{
	//areafeatures_transforgun
	//手动改造的成功率最大值
	$notools_succ = 75;
	//工坊改造的成功率最大值
	$area_succ = 99;
	//在工坊上改造可增加成功率
	$area_addsucc = 20;
	//枪械部件的属性稀有度信息
	$sk_rarity = Array(
		'z' => 1,//天然
		'x' => 1,//奇迹
		'S' => 1,//消音
		'^01001' => 2,//扩容
		'C' => 3,//防投
		'P' => 3,//防殴
		'K' => 3,//防斩
		'G' => 3,//防射
		'F' => 3,//防符
		'D' => 4,//防爆
		'E' => 4,//防电
		'I' => 4,//防冻
		'U' => 4,//防火
		'W' => 4,//隔音
		'R' => 5,//防连
		'q' => 4,//防毒
		'e' => 6,//电击
		'i' => 6,//冻气
		'c' => 6,//集气
		'p' => 7,//带毒
		'w' => 7,//音波
		'm' => 10,//防雷
		'M' => 10,//探雷
		'u' => 10,//火焰
		'a' => 13,//属防
		'A' => 14,//物防
		'N' => 16,//冲击
		'd' => 19,//爆炸
		'f' => 19,//灼焰
		'k' => 19,//冰华
		'r' => 21,//连击
		'Z' => 22,//菁英
		'n' => 26,//物穿
		'y' => 26,//属穿
		'b' => 29,//属抹
		'B' => 29,//物抹
		'j' => 15,//多重
		'h' => 29,//控血
		'H' => 10,//控噬
		'o' => 25,//一发
		'O' => 25,//诅咒
		'^hu' => 15,//升血
		'^dd' => 15,//降防
		'L' => 29,//直击
		'v' => 25,//直死
		'V' => 35,//弑神
	);
	//使用特定道具进行修复可增加成功率
	//最大可增加效果百分比值
	$max_adding_item_effect = 25;
	//最大可增加成功率
	$max_repair_item_effect = 50;
	//失败时武器最多下降效果的百分比
	$max_down_wepe = 5;
	//成功率表
	$repair_item_effect = Array
	(
		'一堆废铁' => 'e',
		'某种机械设备' => 18,
		'非法枪械部件' => 23,
		'原型武器G' => 30,
	);
}

?>