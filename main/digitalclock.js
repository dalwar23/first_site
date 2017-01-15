(function(){

var load_pics = [];
var pics = [];
for(i = 0; i < 12; i++){
 load_pics[i] = i+".gif";
}              

for(i = 0; i < load_pics.length; i++){
 pics[i] = new Image();
 pics[i].src = "digital/"+load_pics[i];
}

var idx = document.images.length;
var get_digit_pos = -1;
var digit_pos = [];
var ini_src = [];
var pic_width = [];

for (i = 0; i < 8; i++){
var comma = (i == 2 || i == 5);

if (!comma){ 
 get_digit_pos++;
}

ini_src[i] = (comma)?"digital/11.gif":"digital/10.gif";
pic_width[i] = (comma)?9:16;

digit_pos[i] = get_digit_pos;

if (digit_pos[i] == digit_pos[i-1]){ 
digit_pos[i] = "";
}

document.write("<img name='"+idx+"digits"+digit_pos[i]+"' src="+ini_src[i]+" height='21' width='"+pic_width[i]+"' alt=''/>")
}

function digitalclock(){
var x = new Date();
var s = x.getSeconds();
var m = x.getMinutes();
var h = x.getHours();
var the_time = ((h < 10)?"0"+h:h)+''+((m < 10)?"0"+m:m)+''+((s < 10)?"0"+s:s);
for (i = 0; i < the_time.length; i++){
document.images[idx+"digits"+i].src = pics[the_time.charAt(i)].src;
}
setTimeout(digitalclock,100);
}
digitalclock();
})();
