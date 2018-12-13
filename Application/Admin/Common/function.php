<?php

// 根据id获取名字
function getNameById($id, $tablename = "admin_module", $field = "name", $str = "顶级模块"){
    $db = M($tablename);
    if ($id > 0) {
        $info = $db->info(array('id'=>$id));
        return $info[$field];
    } else {
        return $str;
    }
}
// 分页
function bootstrap_page_style($page_html){
    if ($page_html) {
        $page_show = str_replace('<div>','<nav><ul class="pagination">',$page_html);
        $page_show = str_replace('</div>','</ul></nav>',$page_show);
        $page_show = str_replace('<span class="current">','<li class="active"><a>',$page_show);
        $page_show = str_replace('</span>','</a></li>',$page_show);
        $page_show = str_replace(array('<a class="num"','<a class="prev"','<a class="next"','<a class="end"','<a class="first"'),'<li><a',$page_show);
        $page_show = str_replace('</a>','</a></li>',$page_show);
    }
    return $page_show;
}

?>