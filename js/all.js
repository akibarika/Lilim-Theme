$(document).ready(function(){
	jQuery(function() {
		$('#search #s').focus(function() {
			if ($(this).val() == '找东西？') {
				$(this).val('')
			}
		}).blur(function() {
			if ($(this).val() == '') {
				$(this).val('找东西？')
			}
		})
	});

	$('.item').addClass('stop');

	
	$(window).scroll(function() {
		if ($(window).scrollTop() > 58) {
			$("#content").css("top", "50px");
			$("#fixed_menu").removeClass('none');
			$("#menu").addClass('none');
			$("#left-sidebar").css({
				"position": "fixed",
				"top": "50px"
			});
			$("#right-sidebar").css({
				"position": "fixed",
				"top": "50px"
			});
			$("#mini-search").removeClass('none');						
		} else {
			$("#content").css("top", "0px");
			$("#fixed_menu").addClass('none');
			$("#menu").removeClass('none');
			$("#left-sidebar").css({
				"position": "absolute",
				"top": "0px"
			});		
			$("#right-sidebar").css({
				"position": "absolute",
				"top": "0px"
			});	
			$("#mini-search").addClass('none');	
		}
	});	
	var cd_more = 0;
	$("#more").click(function() {
		if (cd_more == 0) {
			$("#left-sidebar").animate({
				left: '0px'
			}, 200);
			cd_more = 1
		} else {
			$("#left-sidebar").animate({
				left: '-250px'
			}, 200);
			cd_more = 0
		}
	});
	$("#more_more").click(function() {
		if (cd_more == 0) {
			$("#left-sidebar").animate({
				left: '0px'
			}, 200);
			cd_more = 1
		} else {
			$("#left-sidebar").animate({
				left: '-250px'
			}, 200);
			cd_more = 0
		}
	});	
	var cd_tool = 0;
	$("#tool").click(function() {
		if (cd_tool == 0) {
			$("#right-sidebar").animate({
				right: '0px'
			}, 200);
			cd_tool = 1
		} else {
			$("#right-sidebar").animate({
				right: '-250px'
			}, 200);
			cd_tool = 0
		}
	});
	$("#right-sidebar .closer").click(function() {
		$("#right-sidebar").animate({
			right: '-250px'
		}, 200);
		cd_tool = 0
	});
})
function grin(tag) {
	var myField;
	tag = ' ' + tag + ' ';
	if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
		myField = document.getElementById('comment')
	} else {
		return false
	}
	if (document.selection) {
		myField.focus();
		sel = document.selection.createRange();
		sel.text = tag;
		myField.focus()
	} else if (myField.selectionStart || myField.selectionStart == '0') {
		var startPos = myField.selectionStart;
		var endPos = myField.selectionEnd;
		var cursorPos = endPos;
		myField.value = myField.value.substring(0, startPos) + tag + myField.value.substring(endPos, myField.value.length);
		cursorPos += tag.length;
		myField.focus();
		myField.selectionStart = cursorPos;
		myField.selectionEnd = cursorPos
	} else {
		myField.value += tag;
		myField.focus()
	}
}