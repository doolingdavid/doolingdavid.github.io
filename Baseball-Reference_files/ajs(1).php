(function(){
var s = "<"+"div class=\"adiply_ad_holder\" style=\"width:160px;height:600px;margin:0;padding:0\">\n";
s += "<"+"/div>\n";
s += "<"+"script type=\"text/javascript\">\n";
s += "var adiply_divs = document.getElementsByClassName(\"adiply_ad_holder\");\n";
s += "var adiply_final_div_id = \"adiply_ad_holder_\" + Math.floor((Math.random() * 100000) + 1);\n";
s += "for(var i=0;i<"+"adiply_divs.length; i++){\n";
s += "     if(adiply_divs[i].id) continue;\n";
s += "     adiply_divs[i].setAttribute(\"id\", adiply_final_div_id);\n";
s += "     break;\n";
s += "}\n";
s += "\n";
s += "  var OX_ads = OX_ads || [];\n";
s += "  OX_ads.push({\n";
s += "     slot_id: adiply_final_div_id,\n";
s += "     auid: \"537209676\"\n";
s += "  });\n";
s += "<"+"/script>\n";
s += "<"+"script type=\"text/javascript\" src=\"http://us-ads.openx.net/w/1.0/jstag\"><"+"/script>\n";
s += "<"+"div id=\'beacon_fea7f17584\' style=\'position: absolute; left: 0px; top: 0px; visibility: hidden;\'>\n";
s += "<"+"img width=\"0\" height=\"0\" src=\"http://cat.ny.us.criteo.com/delivery/lg.php?cppv=1&cpp=JwpmmHxnbUgrMWFoM0k4RnRJNURpVFBwSVpPT3djMzAyK0pPTjJhOG1pUTFzWmlNWjJBV2hDV3ZNaWxUMkE1V25GMjJDaFZtTUJnc0N2akRJck5HYUN1ZEJNTU9yRlhqY0pXVzZkVmQ1QkNaM0o4Tm5yWVJrdTREaFhIWUM3cy9OTTJLRzZqNEhGVEhyTWRTK3pscUhBMC9uRkVVS2RqOWJNc1c1TW41L1BRTzNhY3RYOHZmaVlKRFJsb3FFczB5bGZkcktkMGZuMnJBcjJibEUvOVVHcFA5YVNYM21DOEMzWno5Ri9IVWYxT0lYRkxVPXw%3D\"/>\n";
s += "<"+"img width=\"0\" height=\"0\" src=\"http://rtb.metrigo.com/delivery/sync/criteo/pixel_match?redirect=http%3a%2f%2fdis.criteo.com%2frex%2fmatch.aspx%3fc%3d21%26uid%3d%25%25USER_ID%25%25\"/>\n";
s += "<"+"/div>\n";
s += "\n";
document.write(s);})();
