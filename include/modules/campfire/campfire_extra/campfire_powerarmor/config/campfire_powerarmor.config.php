<?php

namespace campfire_powerarmor
{
	//动力装甲系统最高能提供的减伤比例
	$max_pa_reduce_dmg_per = 100;
	//每件动力装甲带来的减伤比例，乘以4后必须小于等于上面的总百分比
	$once_pa_reduce_dmg_per = Array(
		'T' => 25,
		'S' => 20,
		'A' => 17,
		'B' => 13,
		'C' => 8,
		'O' => 5,
	);
	//每点耐久可抵消伤害的系数（实际抵消值=装甲效果*系数/100）
	$once_pas_reduce_dmg  = Array(
		'T' => 35,
		'S' => 29,
		'A' => 23,
		'B' => 14,
		'C' => 7,
		'O' => 5,
	);
	//身体装甲可以让1点耐久当成多少点来用
	$bpa_reduce_pas_cost_per = Array(
		'T' => 2,
		'S' => 1.85,
		'A' => 1.65,
		'B' => 1.45,
		'C' => 1.25,
		'O' => 1.05,
	);
	//头部装甲，作战/强袭/偷袭时增加先攻率
	$hpa_add_acitve_obbs = Array(
		'T' => 1.3,
		'S' => 1.2,
		'A' => 1.15,
		'B' => 1.1,
		'C' => 1.05,
		'O' => 1,
	);
	//头部装甲，作战/强袭/偷袭时增加遇敌率
	$hpa_add_metman_obbs = Array(
		'T' => 1.4,
		'S' => 1.3,
		'A' => 1.25,
		'B' => 1.15,
		'C' => 1.1,
		'O' => 1,
	);
	//头部装甲，探索时增加道具发现率
	$hpa_add_metman_obbs = Array(
		'T' => 1.4,
		'S' => 1.3,
		'A' => 1.25,
		'B' => 1.15,
		'C' => 1.1,
		'O' => 1,
	);
	//手部装甲，增加命中率
	$apa_add_hitrate_obbs = Array(
		'T' => 2,
		'S' => 1.8,
		'A' => 1.7,
		'B' => 1.5,
		'C' => 1.3,
		'O' => 1.1,
	);
	//腿部装甲，降低移动时的体力消耗
	$fpa_reduce_move_cost = Array(
		'T' => 14,
		'S' => 13,
		'A' => 11,
		'B' => 8,
		'C' => 7,
		'O' => 6,
	);
	//腿部装甲，降低探索时的体力消耗
	$fpa_reduce_explore_cost = Array(
		'T' => 14,
		'S' => 13,
		'A' => 11,
		'B' => 8,
		'C' => 7,
		'O' => 6,
	);
}

?>
