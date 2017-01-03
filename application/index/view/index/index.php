<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript">
    $(function(){
        var code = prompt("为了证明你是我老婆，请输入暗号");
        $.post("<?php echo url('index/index/check') ?>",{"code":code},function(data){
            data = eval("("+data+")");
            if (data.status) {
                alert("老婆来了！欢迎~~~~~");
                window.location.href = "<?php echo url('index/index/chat') ?>";
            }else{
                alert("你不是我老婆，快走开！！");
            }
        },'json');
    })
</script>
</body>
</html>