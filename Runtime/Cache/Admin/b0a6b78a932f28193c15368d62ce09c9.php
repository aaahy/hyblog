<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>标签列表</title><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/hyblog/Public/static/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/hyblog/Public/static/bootstrap-3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/hyblog/Public/static/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/hyblog/Public/static/css/bjy.css">
    <link rel="stylesheet" type="text/css" href="/hyblog/Template/default/Home/Public/css/index.css"></head><body><table class="table table-bordered table-striped table-hover table-condensed"><thead><tr><th>tid</th><th>标签名</th><th>操作</th></tr></thead><?php if(is_array($data)): foreach($data as $key=>$v): ?><tr><td><?php echo ($v['tid']); ?></td><td><?php echo ($v['tname']); ?></td><td> <a href="<?php echo U('Admin/Tag/edit',array('tid'=>$v['tid']));?>">修改</a> | <a href="javascript:if(confirm('确定要删除吗?')) location='<?php echo U('Admin/Tag/delete',array('tid'=>$v['tid']));?>'">删除</a></td></tr><?php endforeach; endif; ?></table><script src="/hyblog/Public/static/js/jquery-2.0.0.min.js"></script>
<script>
    logoutUrl="<?php echo U('Home/User/logout');?>";
</script>
<script src="/hyblog/Public/static/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="/hyblog/Public/static/js/html5shiv.min.js"></script>
<script src="/hyblog/Public/static/js/respond.min.js"></script>
<![endif]-->
<script src="/hyblog/Public/static/pace/pace.min.js"></script>
<script src="/hyblog/Template/default/Home/Public/js/index.js"></script>
<!-- 百度页面自动提交开始 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- 百度页面自动提交结束 -->

<!-- 百度统计开始 -->

<!-- 百度统计结束 --></body></html>