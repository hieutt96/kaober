// document.addEventListener("DOMContentLoaded", function(event) { 
// 	$("#addCateProduct").click(function() {
// 		// alert(1);
// 		$.ajax({
// 			type: 'post',
// 			url: 'category/add',
// 			data: {
// 				'_token': $('input[name=_token]').val(),
// 				'titleVi': $('input[name=titleVi]').val,
// 				'descriptionVi': $('input[name=descriptionVi]').val(),
// 				'slug': $('input[name=slug]').val()
// 			},
// 			success: function(data) {
// 				if(data.errors) {
// 					$('.error').removeClass('hidden');
// 					$('error').text(data.errors.titleVi);
// 					$('error').text(data.errors.descriptionVi);
// 					$('error').text(data.errors.slug);
// 				} else{
// 					$('error').remove();

// 					alert("ok rồi");
// 					// $('#addcatecolumn').append('<tr></tr>')
// 				}
// 			}
// 		});
// 	});
// 	$('#titleVi').val('');
// 	$('#descriptionVi').val('');
// 	$('#slug').val('');
// });