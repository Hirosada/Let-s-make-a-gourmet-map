$(function () {
	$("#zipcode_btn").on('click', function () {
		var param = {zipcode: $('#zipcode').val()}
		var send_url = "http://zipcloud.ibsnet.co.jp/api/search";
		$.ajax({
			type: "GET",
			cache: false,
			data: param,
			url: send_url,
			dataType: "jsonp",
			success: function (res) {
				if (res.status == 200) {
					var addressData = '';
					for (var i = 0; i < res.results.length; i++) {
						var result = res.results[i];
						var addressData = result.address1 + result.address2 + result.address3;
					}
					$('#address').val(addressData);
				} else {
					//エラーだった時
					//エラー内容を表示
					$('#address').val(res.message);

				}
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				console.log(XMLHttpRequest);
			}
		});
	});
});