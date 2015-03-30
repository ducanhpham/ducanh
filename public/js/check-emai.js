/*
* Bootstrap Image Gallery JS Demo 3.0.1
* https://github.com/blueimp/Bootstrap-Image-Gallery
*
* Copyright 2013, Sebastian Tschan
* https://blueimp.net
*
* Licensed under the MIT license:
* http://www.opensource.org/licenses/MIT
*/

/*jslint unparam: true */
/*global blueimp, $ */


$(function () {
	'use strict';
	$('#no').hide();
	$('#sai').hide();
	$('#roi').hide();
	$('#chua').hide();
	$('#btn_sub').hide();

	function sai(){
		$('#no').hide();
		$('#sai').show();
		$('#roi').hide();
		$('#chua').hide();
		$('#btn_sub').hide();
	}

	function hideall(){
		$('#sai').hide();
		$('#roi').hide();
		$('#chua').hide();
	}

	function roi(){
		$('#no').hide();
		$('#sai').hide();
		$('#roi').show();
		$('#chua').hide();
		$('#btn_sub').hide();
	}

	function chua(){
		$('#no').hide();
		$('#sai').hide();
		$('#roi').hide();
		$('#chua').show();
		$('#btn_sub').show();
	}

	$('.img_loading').hide();

	$('#btn_check_code').click(function(){
		var code = $('#in_code').val();
		hideall();

		if(code.trim() != ""){
			$('.img_loading').show();

			$.get( "check_code",
				{ code: code } )
			.done(function( data ) {
				if(data == "sai")
					sai();
				if(data == "roi")
					roi();
				if(data == "chua")
					chua();
				$('.img_loading').hide();
			});
		}else{
			$('#no').show();
		}

	});
});
