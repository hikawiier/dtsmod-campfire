////////////////////////////////////////////////////////////////////////
///////////////////////////////标签页//////////////////////////////////
////////////////////////////////////////////////////////////////////////
now_tag = 'common';

function tag_choose(tgt)
{
	if(tgt != 'common') hotkey_ok=false;
	else hotkey_ok=true;
	now_tag = tgt;
	tag_display();
}

function tag_display(){
	jQuery('.cmd_tag').removeClass('choosed');
	jQuery('#'+now_tag+'_cmd_tag').addClass('choosed');
	jQuery('.cmd_subpage').css('display','none');
	jQuery('#'+now_tag+'_cmd_subpage').css('display','block');
}

////////////////////////////////////////////////////////////////////////
///////////////////////////////包裹选项//////////////////////////////////
////////////////////////////////////////////////////////////////////////

pack_switch_from = 0;
pack_switch_to = 0;

function pack_switch_set(packi){
	if(pack_switch_from && pack_switch_from != packi && !pack_switch_to) {
		pack_switch_to = packi;
	}else{
		pack_switch_from = packi;
		pack_switch_to = 0;
	}
	pack_switch_update_display();
}

function pack_switch_update_display(){
	for(var i=1;i<=6;i++){
		if(jQuery('#pack_switch_'+i).length > 0) {
			jQuery('#pack_switch_'+i).removeClass('pack_from pack_to');
			if(i == pack_switch_from) jQuery('#pack_switch_'+i).addClass('pack_from');
			else if(i == pack_switch_to) jQuery('#pack_switch_'+i).addClass('pack_to');
		}
	}
	if(pack_switch_from && pack_switch_to) {
		jQuery('#pack_cmd_switch')[0].disabled = false;
		jQuery('#pack_cmd_merge')[0].disabled = false;
	}else{
		jQuery('#pack_cmd_switch')[0].disabled = true;
		jQuery('#pack_cmd_merge')[0].disabled = true;
	}
}

function pack_send_cmd_prepare(tp){
	if(!pack_switch_from || !pack_switch_to) return;
	var name1, name2;
	if(tp == 'merge') {
		name1 = 'merge1'; name2 = 'merge2';
	}else if(tp == 'switch'){
		name1 = 'from'; name2 = 'to';
	}
	if(jQuery('#'+name1).length > 0){
		jQuery('#'+name1)[0].value=pack_switch_from;
	}else{
		jQuery('#subcmd').after("<input type='hidden' id='"+name1+"' name='"+name1+"' value='"+pack_switch_from+"'>");
	}
	if(jQuery('#'+name2).length > 0){
		jQuery('#'+name2)[0].value=pack_switch_to;
	}else{
		jQuery('#subcmd').after("<input type='hidden' id='"+name2+"' name='"+name2+"' value='"+pack_switch_to+"'>");
	}
}