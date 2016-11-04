/*
	var data = ajax({
		url:'json.php',
		type:'get',
		data:{username:'liwenkai',password:123456},
		async:true,
		success:function(json){
			
		}
	});

*/

function ajax(obj)
{
	//����ʵ����ajax����
	var xhr = (function(){
		
		//ajaxҲ���ڼ��������� 
		if (typeof XMLHttpRequest != 'undefined') {
			
			return new XMLHttpRequest();
			
		} else if(typeof ActiveXObject != 'undefined') {
			//ActiveXObject
			var versions = ['Microsoft.XMLHTTP','MSXML2.XMLHttp.6.0','MSXML2.XMLHttp','MSXML2.XMLHttp.3.0'];
			
			for (var i = 0 ; i < versions.length; i++) {
				try {
					return new ActiveXObject(versions[i]);
				} catch(e) {
					
				}
			}
			
		} else {
			
			throw new Error('��ǰ�������֧��ajax����');
		}
	})();
	
	//����url,����?rand = Math.random();
	obj.url = obj.url + '?rand=' + Math.random();
	
	//username=123&password=456
	obj.data = (function(data){
		
		var arr = [];
		
		for (var temp in data) {
				
				arr.push(encodeURIComponent(temp) + '=' + encodeURIComponent(data[temp]));
		}
		
		return arr.join('&');
		
	})(obj.data);
	
	//�ж���get�����ִ������
	//����ķ�ʽ���в�ͬ
	
	if (obj.type == 'get') {
		
		if (obj.url.indexOf('?') == -1) {
			obj.url += '?' + obj.data;
		} else {
			obj.url += '&' + obj.data;
		}
	}
	
	//�첽�����ʱ����ô��
	if (obj.async == true) {
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4) {
				callback();
			}
			
		};
		
	}
	
	//��
	xhr.open(obj.type, obj.url, obj.async);
	
	
	//��Ϊpost�������ݺ�get���������������
	if (obj.type == 'post') {
		xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		xhr.send(obj.data);
	} else {
		xhr.send(null);
	}
	
	if (obj.async === false) {
		
		callback();
			
	}
	
	//�첽������ɺ�Ļص�
	function callback()
	{
		
		if (xhr.status == 200) {
			obj.success(xhr.responseText);
		} else {
			alert('��ȡ����ʧ��' + xhr.status);
		}
		
	}
	
	
	
	
	
	
	
}