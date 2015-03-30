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
	$('img#hinh2').hide();
	var width = $( window ).width();
	if(width<= 375){
		$('img#hinh1').hide();
		$('img#hinh2').show();
		$('.portfolio-link img').resizecrop({
			width:200,
			height:100,
			vertical:"top"
		});
	}
	else if(width>320 && width <=768){
		$('img#hinh1').hide();
		$('img#hinh2').show();
		$('.portfolio-link img').resizecrop({
			width:330,
			height:230,
			vertical:"top"
		});

	}else{
		$('img#hinh1').show();
		$('img#hinh2').hide();
		$('.portfolio-link img').resizecrop({
			width:330,
			height:230,
			vertical:"top"
		});
	}


	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	})

	$('.img_ne').hide();
	if ($(".noti").length != 0){
		$('#thongbao').click();
	}

	$('#btn_submit').click(function(){
		console.log($("#form_landing").valid());
		if($("#form_landing").valid() ==true){
			$('.img_ne').show();
		}
	})



	jQuery.extend(jQuery.validator.messages, {
		required: "Bạn phải nhập trường này !",
		email: "Chưa đúng định dạng email! vidu@gmail.com",
		remote: "Email này đã được sử dụng! Vui lòng chọn Email khác.",
	});


	$('#culao').click(function(){
		//chay ajax
		var photoset_id =  '72157649238768654';
		loadimg(photoset_id);
	})
	$('#vanhanh').click(function(){
		//chay ajax
		var photoset_id =  '72157651163550928';
		loadimg(photoset_id);
	})
	$('#hongphong').click(function(){
		//chay ajax
		var photoset_id =  '72157651154810419';
		loadimg(photoset_id);
	})
	$('#trungson').click(function(){
		//chay ajax
		var photoset_id =  '72157651578775365';
		loadimg(photoset_id);
	})


	//bat lỗi form
	$("#form_landing").validate({
		rules: {
			// simple rule, converted to {required:true}
			phone: "required",
			visit: "required",
			service: "required",
			// compound rule
			email: {
				required: true,
				email: true,
				remote: {
					url: "check_email",
					type: "get",
					data: {
						email: function() {
							return $( "#in_email" ).val();
						}
					}
				} ,
			},
		},
		messages: {
			visit: "",
			service: "",
		}
	});

	$("input:radio[name='service']").click(function(){
		$('#service-error2').hide();
	})
	$("input:radio[name='visit']").click(function(){
		$('#visit-error2').hide();
	})

	$('#visit-error2').hide();
	$('#service-error2').hide();

	$('#visit-error').hide();
	$('#btn_submit').click(function(){
		if ($("input:radio[name='visit']").is(":checked")){
			// go on with script
			$('#visit-error2').hide();
		}else{
			$('#visit-error2').show();
		}

		if ($("input:radio[name='service']").is(":checked")){
			// go on with script
			$('#service-error2').hide();
		}else{
			$('#service-error2').show();
		}




	})


	// Load demo images from flickr:
	function loadimg(photoset_id){
		//xóa all img
		$('#links a').remove();
		$.ajax({
			url: 'https://api.flickr.com/services/rest/',
			data: {
				format: 'json',
				method: 'flickr.photosets.getPhotos',
				api_key: '6a44dde461f28499023c6d389c1e57f9',
				user_id: '132056464@N04',
				photoset_id: photoset_id
			},
			dataType: 'jsonp',
			jsonp: 'jsoncallback'
		}).done(function (result) {
			//			console.log(arr_album);
			var linksContainer = $('#links'),
			baseUrl;
			// Add the demo images as links with thumbnails to the page:
			$.each(result.photoset.photo, function (index, photo) {
				//				console.log(photo);
				baseUrl = 'http://farm' + photo['farm'] + '.static.flickr.com/' +
				photo['server'] + '/' + photo['id'] + '_' + photo['secret'];

				$('<a/>')
				.append($('<img class="img_thum">').prop('src', baseUrl + '_b.jpg'))
				.prop('href', baseUrl + '_b.jpg')
				.prop('title', photo['title'])
				.attr('data-gallery', '')
				.appendTo(linksContainer);

				//resize
				$('#links a img').resizecrop({
					width:200,
					height:200,
					vertical:"top"
				});
			});
		});
	}


});
