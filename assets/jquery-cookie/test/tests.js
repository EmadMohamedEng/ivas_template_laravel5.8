var lifecycle={teardown:function(){$.cookie.defaults={},delete $.cookie.raw,delete $.cookie.json,$.each($.cookie(),$.removeCookie)}};module("read",lifecycle),test("simple value",function(){expect(1),document.cookie="c=v",strictEqual($.cookie("c"),"v","should return value")}),test("empty value",function(){expect(1),$.cookie("c",""),strictEqual($.cookie("c"),"","should return value")}),test("not existing",function(){expect(1),strictEqual($.cookie("whatever"),void 0,"return undefined")}),test("RFC 2068 quoted string",function(){expect(1),document.cookie='c="v@address.com\\"\\\\\\""',strictEqual($.cookie("c"),'v@address.com"\\"',"should decode RFC 2068 quoted string")}),test("decode",function(){expect(1),document.cookie=encodeURIComponent(" c")+"="+encodeURIComponent(" v"),strictEqual($.cookie(" c")," v","should decode key and value")}),test("decode pluses to space for server side written cookie",function(){expect(1),document.cookie="c=foo+bar",strictEqual($.cookie("c"),"foo bar","should convert pluses back to space")}),test("raw = true",function(){expect(2),$.cookie.raw=!0,document.cookie="c=%20v",strictEqual($.cookie("c"),"%20v","should not decode value"),$.cookie("c","foo=bar"),strictEqual($.cookie("c"),"foo=bar","should include the entire value")}),test("json = true",function(){expect(1),"JSON"in window?($.cookie.json=!0,$.cookie("c",{foo:"bar"}),deepEqual($.cookie("c"),{foo:"bar"},"should parse JSON")):ok(!0)}),test("not existing with json = true",function(){expect(1),"JSON"in window?($.cookie.json=!0,strictEqual($.cookie("whatever"),void 0,"won't throw exception")):ok(!0)}),test("invalid JSON string with json = true",function(){expect(1),"JSON"in window?($.cookie.json=!0,$.cookie("c","v"),strictEqual($.cookie("c"),void 0,"won't throw exception, returns undefined")):ok(!0)}),asyncTest("malformed cookie value in IE (#88, #117)",function(){expect(1);var e=$('<iframe src="malformed_cookie.html"></iframe>')[0];$(e).on("load",function(){start(),e.contentWindow.ok?strictEqual(e.contentWindow.testValue,"two",'reads all cookie values, skipping duplicate occurences of "; "'):ok(!0,"N/A")}),document.body.appendChild(e)}),test("call without arguments",function(){$.cookie("c","v"),$.cookie("foo","bar"),deepEqual($.cookie(),{c:"v",foo:"bar"},"should return all cookies"),$.each($.cookie(),$.removeCookie),$.cookie.json=!0,$.cookie("c",{foo:"bar"}),deepEqual($.cookie(),{c:{foo:"bar"}},"returns all cookies with JSON parsed")}),module("write",lifecycle),test("String primitive",function(){expect(1),$.cookie("c","v"),strictEqual($.cookie("c"),"v","should write value")}),test("String object",function(){expect(1),$.cookie("c",new String("v")),strictEqual($.cookie("c"),"v","should write value")}),test('value "[object Object]"',function(){expect(1),$.cookie("c","[object Object]"),strictEqual($.cookie("c"),"[object Object]","should write value")}),test("number",function(){expect(1),$.cookie("c",1234),strictEqual($.cookie("c"),"1234","should write value")}),test("expires option as days from now",function(){expect(1);var e=new Date;e.setDate(e.getDate()+7),strictEqual($.cookie("c","v",{expires:7}),"c=v; expires="+e.toUTCString(),"should write the cookie string with expires")}),test("expires option as Date instance",function(){expect(1);var e=new Date;e.setDate(e.getDate()+7),strictEqual($.cookie("c","v",{expires:e}),"c=v; expires="+e.toUTCString(),"should write the cookie string with expires")}),test("return value",function(){expect(1),strictEqual($.cookie("c","v"),"c=v","should return written cookie string")}),test("defaults",function(){expect(2),$.cookie.defaults.path="/foo",ok($.cookie("c","v").match(/path=\/foo/),"should use options from defaults"),ok($.cookie("c","v",{path:"/bar"}).match(/path=\/bar/),"options argument has precedence")}),test("raw = true",function(){expect(1),$.cookie.raw=!0,strictEqual($.cookie("c[1]","v[1]"),"c[1]=v[1]","should not encode"),$.each($.cookie(),$.removeCookie)}),test("json = true",function(){expect(1),$.cookie.json=!0,"JSON"in window?($.cookie("c",{foo:"bar"}),strictEqual(document.cookie,"c="+encodeURIComponent(JSON.stringify({foo:"bar"})),"should stringify JSON")):ok(!0)}),module("removeCookie",lifecycle),test("deletion",function(){expect(1),$.cookie("c","v"),$.removeCookie("c"),strictEqual(document.cookie,"","should delete the cookie")}),test("return",function(){expect(2),strictEqual($.removeCookie("c"),!1,"return false if the cookie wasn't found"),$.cookie("c","v"),strictEqual($.removeCookie("c"),!0,"return true if the cookie was found")}),test("with options",function(){expect(3);var e=$.cookie,o=0;$.cookie=function(){if(1==++o)return strictEqual(arguments.length,1,"look up cookie instead of accidently writing a new"),"cookie";2===o&&strictEqual(arguments[2].foo,"bar","pass along options when deleting cookie")},$.removeCookie("c",{foo:"bar"}),strictEqual(o,2),$.cookie=e}),test("passing options reference",function(){expect(1);var e={path:"/"};$.cookie("c","v",e),$.removeCookie("c",e),deepEqual(e,{path:"/"},"won't alter options object")}),test("[] used in name",function(){expect(1),$.cookie.raw=!0,document.cookie="c[1]=foo",$.removeCookie("c[1]"),strictEqual(document.cookie,"","delete the cookie")});