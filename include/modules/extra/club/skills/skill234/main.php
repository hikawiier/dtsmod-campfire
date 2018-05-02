<?php

namespace skill234
{
	function init() 
	{
		define('MOD_SKILL234_INFO','club;active;locked;');
		eval(import_module('clubbase'));
		$clubskillname[234] = '破解';
	}
	
	function acquire234(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		\skillbase\skill_setvalue(234,'lvl',0,$pa);
		\skillbase\skill_setvalue(234,'cur1',0,$pa);
		\skillbase\skill_setvalue(234,'cur2',1,$pa);
	}
	
	function lost234(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		\skillbase\skill_delvalue(234,'lvl',$pa);
		\skillbase\skill_delvalue(234,'cur1',$pa);
		\skillbase\skill_delvalue(234,'cur2',$pa);
	}
	
	function check_unlocked234(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return 1;
	}
		
	function wdecode(){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		eval(import_module('sys','player','itemmain','logger','skill234','skillbase','map'));
		if(\skillbase\skill_query(234)){
			$req1=$goal234[\skillbase\skill_getvalue(234,'cur1')];
			$req2=$goal234[\skillbase\skill_getvalue(234,'cur2')];
			$clv=\skillbase\skill_getvalue(234,'lvl');
			$position = 0;
			foreach(Array(1,2,3,4,5,6) as $imn){
				global ${'itm'.$imn},${'itmk'.$imn},${'itme'.$imn},${'itms'.$imn},${'itmsk'.$imn};
				if((${'itm'.$imn}==$req1)||(${'itm'.$imn}==$req2)){
					$position = $imn;
					break;
				}
			}
			if($position){
				$itm = ${'itm'.$position};
				$log .= '<span class="yellow b">破解成功。</span><br>';
				if(!$clv) {
					$log .= '旗开得胜。你心中泛起一丝得意。这个幻境系统也不过如此嘛。<br>';
				}elseif(9 == $clv){
					$log .= '你轻轻松松就找到了10个漏洞，看来红杀菁英们根本不懂怎么维护。<br>';
				}elseif(19 == $clv){
					$log .= '你手中积累的“肉鸡道具”已经有20个了，你开始怀疑金龙通讯社的运维都是吃白饭的。<br>';
				}elseif(29 == $clv){
					$log .= '30个了！<br>你正准备给自己造个钥匙，眼前突然泛起一层“白雾”。<br>恍惚间，似乎有名女子不怀好意地朝你微笑着，你觉得她像早已失踪的林无月。<br><span class="evergreen b">“好身手，轻易把你干掉似乎太可惜了……”</span><br>你启动了紧急代码，奋力挣脱了控制。<br>惊惧之余你决定多加几层保险。<br>';
				}elseif(39 == $clv){
					$log .= '40层了。<br>“林无月”没有再来干扰你，不过代码里的蛛丝马迹让你觉得这一切似乎都在她的安排之中。还是争取万无一失吧……<br>';
				}elseif(49 == $clv){
					$log .= '应该差不多了，现在就算天网现身也拿你没有办法。<br>您感觉自己离胜利只有一步之遥。<br>';
				}
				$log .= "<br /><span class=\"red b\">$itm</span>用光了。<br />";
				addnews ( 0, 'skill234', $name, $clv+1);
				${'itm'.$position} = ${'itmk'.$position} = ${'itmsk'.$position} = '';
				${'itme'.$position} =${'itms'.$position} =0;
				if ($clv==50){
					$log .="<span class=\"evergreen b\">游戏系统已经完全破解。</span><br />";
					${'itm'.$position} = '游戏解除钥匙';
					${'itmk'.$position} = 'Y';
					${'itmsk'.$position} = 'Z';
					${'itme'.$position} =1;
					${'itms'.$position} =1;
					\skillbase\skill_lost(234);
					
//					if ((($areanum/$areaadd)<4)&&(!in_array($gametype,$qiegao_ignore_mode))){
//						$get_card_id=63;
//						$ext = '您在'.($room_prefix ? '房间' : '').'第'.$gamenum.'局完成了破解流程，获得了奖励卡！';
//						\cardbase\get_card_message($get_card_id,$ext);
//						$log.='<span class="yellow b">您获得了活动奖励卡，请前往“站内邮件”查收。</span><br>';
//					}
					
					$mode = 'command';
					return;
				}
				$gdice=rand(1,4);
				if ($clv<5){
					if ($gdice==1){
						$exp+=10;
						$log .="<span class=\"yellow b\">获得了10点经验值。</span><br />";
					}
					if ($gdice==2){
						$att+=10;
						$log .="<span class=\"yellow b\">获得了10点基础攻击。</span><br />";
					}
					if ($gdice==3){ 
						$def+=10;
						$log .="<span class=\"yellow b\">获得了10点基础防御。</span><br />";
					}if ($gdice==4){
						$wp+=10;$wk+=10;$wc+=10;$wd+=10;$wg+=10;$wf+=10;
						$log .="<span class=\"yellow b\">获得了10点全熟练。</span><br />";
					}					
				}else if ($clv<20){
					if ($gdice==1){
						$money+=200;
						$log .="<span class=\"yellow b\">获得了180元。</span><br />";
					}
					if ($gdice==2){
						$mhp+=7;
						$log .="<span class=\"yellow b\">生命上限提高了7点。</span><br />";
					}
					if ($gdice==3){
						$att+=10;$def+=10;
						$log .="<span class=\"yellow b\">基础攻防提高了10点。</span><br />";
					}
					if ($gdice==4){
						$wp+=10;$wk+=10;$wc+=10;$wd+=10;$wg+=10;$wf+=10;
						$log .="<span class=\"yellow b\">获得了10点全熟练。</span><br />";
					}		
				}else{
					if ($gdice==1){
						$money+=320;
						$log .="<span class=\"yellow b\">获得了320元。</span><br />";
					}
					if ($gdice==2){
						$mhp+=12;
						$log .="<span class=\"yellow b\">生命上限提高了12点。</span><br />";
					}
					if ($gdice==3){
						$att+=15;$def+=15;
						$log .="<span class=\"yellow b\">基础攻防提高了15点。</span><br />";
					}
					if ($gdice==4){
						$wp+=13;$wk+=13;$wc+=13;$wd+=13;$wg+=13;$wf+=13;
						$log .="<span class=\"yellow b\">获得了13点全熟练。</span><br />";
					}		
				}
				$clv++;
				$t=count($goal234)-1;
				if ($clv<10) $t=19;
				if ($clv<5) $t=9;
				$nx=rand(0,$t);
				$ed=$goal234[$nx];
				$log .="下次破解需要物品<span class=\"yellow b\">{$ed}</span>或";
				\skillbase\skill_setvalue(234,'cur1',$nx);	
				$nx1=rand(0,$t);
				while ($nx1==$nx) $nx1=rand(0,$t);
				$ed=$goal234[$nx1];
				$log .="<span class=\"yellow b\">{$ed}</span>。<br />";
				\skillbase\skill_setvalue(234,'cur2',$nx1);				
				\skillbase\skill_setvalue(234,'lvl',$clv);
				$mode = 'command';
				return;
			}else{
				$log .= "你没有进行破解所需的物品。<br />";
				$mode = 'command';
				return;
			}
		}else{
			$log .= '<span class="red b">你没有这个技能！</span><br />';
			$mode = 'command';
			return;
		}
	}
	
	function act()
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player','logger','input'));
	
		if ($mode == 'special' && $command == 'skill234_special' && $subcmd=='wdecode') 
		{
			wdecode();
			return;
		}
			
		$chprocess();
	}
	
	function parse_news($nid, $news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr = array())
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		
		eval(import_module('sys','player'));
		
		if($news == 'skill234') 
			if ($b==51)
				return "<li id=\"nid$nid\">{$hour}时{$min}分{$sec}秒，<span class=\"evergreen b\">{$a}完成了对幻境系统的破解</span></li>";
			else
				return "<li id=\"nid$nid\">{$hour}时{$min}分{$sec}秒，<span class=\"cyan b\">{$a}完成了第{$b}次<span class=\"yellow b\">「破解」</span>尝试</span></li>";
		
		return $chprocess($nid, $news, $hour, $min, $sec, $a, $b, $c, $d, $e, $exarr);
	}
	
}

?>