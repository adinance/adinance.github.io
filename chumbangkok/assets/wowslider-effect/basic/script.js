/* ws_basic */
function ws_basic(b,e,c){var d=$(this);this.go=function(a){c.find(".ws_list").css("transform","translate3d(0,0,0)").stop(!0).animate({left:a?-a+"00%":/Safari/.test(navigator.userAgent)?"0%":0},b.duration,"easeInOutExpo",function(){d.trigger("effectEnd")})}};
