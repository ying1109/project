// 顶部点击展闭左侧导航栏
$('#top_icon').mousedown(function(event) {
	if ($('#navMenubox').is(':hidden')) {
		$('#navMenubox').show();
		$('.page_content').css('width', '80%');
	} else {
		$('#navMenubox').hide();
		$('.page_content').css('width', '100%');
	}
});

// 左侧导航栏菜单展闭
/*$(function(){
    // nav收缩展开
    $('.navMenu li a').on('click',function(){
        var parent = $(this).parent().parent();//获取当前页签的父级的父级
        var labeul = $(this).parent("li").find(">ul")	 
            console.log(11111);
        if ($(this).parent().hasClass('active') == false) {
            //展开未展开
            parent.find('ul').slideUp(400);
            parent.find("li").removeClass("open")
            parent.find('li a').removeClass("active").find(".arrow").removeClass("open")
            $(this).parent("li").addClass("open").find(labeul).slideDown(400);
            $(this).addClass("active").find(".arrow").addClass("open");
        }else{
            $(this).parent("li").removeClass("open").find(labeul).slideUp(400);
            if($(this).parent().find("ul").length>0){
                $(this).removeClass("active").find(".arrow").removeClass("open")
            }else{
                $(this).addClass("active");
            }
        }
    });
});*/
$(document).ready(function () {
    // nav收缩展开
    $('.navMenu li a').on('click',function(){
        var parent = $(this).parent().parent();//获取当前页签的父级的父级
        var labeul = $(this).parent("li").find(">ul");
        if ($(this).attr('class') != 'active') {
            //展开未展开
            parent.find('li a').removeClass("active").find(".arrow").removeClass("open");
            parent.find("li").removeClass("active");
            $(this).parent("li").addClass("active").find(labeul).slideDown(400);
            // alert($(this).parent("li").attr('class'));
            $(this).addClass("active").find(".arrow").addClass("open");
        }else{
            $(this).parent("li").removeClass("open").find(labeul).slideUp(400);
            if($(this).parent().find("ul").length>0){
                $(this).removeClass("active").find(".arrow").removeClass("open")
            }else{
                $(this).addClass("active");
            }
        }
    });
});