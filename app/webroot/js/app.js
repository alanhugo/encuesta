/**
 * la_jsdk LivingAlpha jsdk
 * @author LivingAlpha
 * @version 1.0.0
 * @copyright LivingAlpha 2013 All Rights Reserved.
 * @license Licensed under the Apache License, Version 2.0
 * 			http://www.apache.org/licenses/LICENSE-2.0
 * @see: http://livingalpha.com for details
 */
window.name = 'livingalpha-oauth';
var la_jsdk = {
		
		appID: null,
		
		init: function(){
			la_jsdk.getParameters();
			la_jsdk.applyBindings();
			la_jsdk.loadCSS();
			console.log('INIT: la_jsdk (LivingAlpha)');
		},
		getParameters: function(){
			//get query string
			var qs = document.getElementById("livingalpha-jssdk").src.match(/\w+=\w+/g);			 
			var t,i = qs.length;
			while (i--) {			 
			     //t[0] name y t[1] value
			     t = qs[i].split("=");
			 
			     la_jsdk.appID = t[1];
			}
		},
		applyBindings: function(){
			if (document.addEventListener){
				document.getElementById("la-login-button").addEventListener('click', la_jsdk.login, false); 
			} else if (document.attachEvent){
				document.getElementById("la-login-button").attachEvent('onclick', la_jsdk.login);
			}
		},
		login: function(){
			ventana_secundaria = window.open("//localhost/encuesta/preguntas/popup/"+la_jsdk.appID,'_blank','scrollbars=1,width=500,height=580');
		},
		loadCSS: function(){
			(function(d, s, id) {
			  var css, lacss = d.getElementsByTagName('head')[0];
			  if (d.getElementById(id)) return;
			  css = d.createElement(s); css.id = id; css.rel = 'stylesheet'; css.type = 'text/css';
			  css.href = "//localhost/encuesta/css/alpha-connect.css";
			  lacss.appendChild(css);
			}(document, 'link', 'livingalpha-css'));
		}
}
la_jsdk.init();