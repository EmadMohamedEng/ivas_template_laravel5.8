!function(e){function t(t){void 0==window.DOMParser&&window.ActiveXObject&&(DOMParser=function(){},DOMParser.prototype.parseFromString=function(e){var t=new ActiveXObject("Microsoft.XMLDOM");return t.async="false",t.loadXML(e),t});try{var n=(new DOMParser).parseFromString(t,"text/xml");if(!e.isXMLDoc(n))throw"Unable to parse XML";if(1==e("parsererror",n).length)throw"Error: "+e(n).text()}catch(t){var s=void 0==t.name?t:t.name+": "+t.message;return void e(document).trigger("xmlParseError",[s])}return n}var n=e.ajax,s=[];e.extend({ajax:function(o){var r=jQuery.extend(!0,{},jQuery.ajaxSettings,o),a=!1;return e.each(s,function(i,p){function u(){r.success&&r.success.call(m,d.response?d.response.toString():d.responseText||"",status,{}),r.global&&l("ajaxSuccess",[{},r])}function c(){r.complete&&r.complete.call(m,{},status),r.global&&l("ajaxComplete",[{},r]),r.global&&!--jQuery.active&&jQuery.event.trigger("ajaxStop")}function l(e,t){(r.context?jQuery(r.context):jQuery.event).trigger(e,t)}if(s[i]){var d=null;if(e.isFunction(s[i]))d=s[i](r);else{if(d=s[i],e.isFunction(d.url.test))d.url.test(r.url)||(d=null);else{var y=d.url.indexOf("*");("*"!=d.url&&d.url!=r.url&&-1==y||y>-1&&d.url.substr(0,y)!=r.url.substr(0,y))&&(d=null)}if(d){if(d.data&&r.data){var f=!1;!function t(n,s){if("string"==typeof s)return f=e.isFunction(n.test)?n.test(s):n==s;e.each(n,function(o,r){return void 0===s[o]?(f=!1,!1):(f=!0,"object"==typeof s[o]?t(n[o],s[o]):f=e.isFunction(n[o].test)?n[o].test(s[o]):n[o]==s[o])})}(d.data,r.data),0==f&&(d=null)}d&&d.type&&d.type!=r.type&&(d=null)}}if(d){a=!0;var x=e.extend({},e.mockjaxSettings,d);x.log&&e.isFunction(x.log)&&x.log("MOCK "+r.type.toUpperCase()+": "+r.url,e.extend({},r));var g=/=\?(&|$)/,T=(new Date).getTime();"jsonp"===r.dataType&&("GET"===r.type.toUpperCase()?g.test(r.url)||(r.url+=(rquery.test(r.url)?"&":"?")+(r.jsonp||"callback")+"=?"):r.data&&g.test(r.data)||(r.data=(r.data?r.data+"&":"")+(r.jsonp||"callback")+"=?"),r.dataType="json"),"json"===r.dataType&&(r.data&&g.test(r.data)||g.test(r.url))&&(jsonp=r.jsonpCallback||"jsonp"+T++,r.data&&(r.data=(r.data+"").replace(g,"="+jsonp+"$1")),r.url=r.url.replace(g,"="+jsonp+"$1"),r.dataType="script",window[jsonp]=window[jsonp]||function(e){data=e,u(),c(),window[jsonp]=void 0;try{delete window[jsonp]}catch(e){}head&&head.removeChild(script)});var j=/^(\w+:)?\/\/([^\/?#]+)/.exec(r.url),h=j&&(j[1]&&j[1]!==location.protocol||j[2]!==location.host);if("script"===r.dataType&&"GET"===r.type.toUpperCase()&&h){var m=o&&o.context||r;return d.response&&e.isFunction(d.response)?d.response(o):e.globalEval(d.responseText),u(),c(),!1}return a=n.call(e,e.extend(!0,{},o,{xhr:function(){return(d=e.extend({},e.mockjaxSettings,d)).contentType&&(d.headers["content-type"]=d.contentType),{status:d.status,readyState:1,open:function(){},send:function(){var s=function(n){return function(){return function(){this.status=d.status,this.readyState=4,e.isFunction(d.response)&&d.response(o),"json"==r.dataType&&"object"==typeof d.responseText?this.responseText=JSON.stringify(d.responseText):"xml"==r.dataType?"string"==typeof d.responseXML?this.responseXML=t(d.responseXML):this.responseXML=d.responseXML:this.responseText=d.responseText,e.isFunction(this.onreadystatechange)&&this.onreadystatechange(d.isTimeout?"timeout":void 0)}.apply(n)}}(this);d.proxy?n({global:!1,url:d.proxy,type:d.proxyType,data:d.data,dataType:r.dataType,complete:function(e,t){d.responseXML=e.responseXML,d.responseText=e.responseText,this.responseTimer=setTimeout(s,d.responseTime||0)}}):!1===r.async?s():this.responseTimer=setTimeout(s,d.responseTime||50)},abort:function(){clearTimeout(this.responseTimer)},setRequestHeader:function(){},getResponseHeader:function(e){return d.headers&&d.headers[e]?d.headers[e]:"last-modified"==e.toLowerCase()?d.lastModified||(new Date).toString():"etag"==e.toLowerCase()?d.etag||"":"content-type"==e.toLowerCase()?d.contentType||"text/plain":void 0},getAllResponseHeaders:function(){var t="";return e.each(d.headers,function(e,n){t+=e+": "+n+"\n"}),t}}}})),!1}}}),a||n.apply(e,arguments)}}),e.mockjaxSettings={log:function(e){window.console&&window.console.log&&window.console.log(e)},status:200,responseTime:500,isTimeout:!1,contentType:"text/plain",response:"",responseText:"",responseXML:"",proxy:"",proxyType:"GET",lastModified:null,etag:"",headers:{etag:"IJF@H#@923uf8023hFO@I#H#","content-type":"text/plain"}},e.mockjax=function(e){var t=s.length;return s[t]=e,t},e.mockjaxClear=function(e){1==arguments.length?s[e]=null:s=[]}}(jQuery);