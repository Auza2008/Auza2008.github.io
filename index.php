<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>免费主机开通</title>
  <link href="//lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://www.layuicdn.com/layui/css/layui.css" rel="stylesheet"/>
  <link rel="stylesheet" href="//ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/404/bg.css" type="text/css" />
  <script src="https://www.layuicdn.com/layui/layui.js"></script>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/layer/2.3/layer.js"></script>
   <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!--免费主机开通-->
<!--请求接口-->
<script>
$(document).ready(function(){
  $("button").click(function(){
  layer.msg('正在开通中', {icon: 1});
  var username = $("#username").val();
  var password = $("#password").val();
    $.post("api.php",
    {
      username:username,
      password:password
    },
    function(data,status){
    var obj = JSON.parse(data);    
    if (obj.code == 1) {
    layer.confirm('开通成功\n结果：'+obj.msg+'<br>登录地址：'+obj.login+'<br>接口由'+obj.tg+'提供～',{
    btn: ['登录','好的'] }, 
    function(){
    window.location.href=""+obj.login;}, 
    function(){
});
                
            } else {
            layer.confirm('开通失败\n结果：'+obj.msg+'<br>登录地址：'+obj.login+'接口由'+obj.tg+'提供～',{
    btn: ['好的'] }, 
    );   
         }
    
    });
  });
});
</script>
<!--请求结束-->
<body>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">免费主机-  时长一年（买了发现自己用不着，就用作公益主机）</h3></div>
<section id="1_609" class="yead_editor" οnmοusedοwn="shifuMouseDown('1_609')" label="Copyright ? 2015 Yead All Rights Reserved." style="font-size:14px;font-family:'Microsoft YaHei';margin: 5px auto;white-space: normal;">
    <section class="yead_bgc" style="position: static; box-sizing: border-box; padding: 0px 10px; background-color: rgb(5, 157, 127);">
        <section style="margin:0;padding:0;text-align:center">
            <svg style="height:2em" data-width="100%">
                <text y="138.494%" x="50%" fill="#ffffff" style="font-size:16px;text-anchor:middle;box-sizing:border-box">
                    <tspan>
服务器信息：1H1H 10M  无限流量； 
                    </tspan>

                    <animate attributename="y" from="0%" to="150%" begin="0s" dur="5s" repeatcount="indefinite"></animate>
                </text>
            </svg>
        </section>
    </section>
</section>
        <div class="panel-body">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-cloud"></span></span>
              <input type="text" name="username" id="username" class="form-control" placeholder="主机账号" required>
              </div><br/>
              <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-cloud"></span></span>
              <input type="password" name="password" id="password" class="form-control" placeholder="主机密码" required>
              </div><br/>             
              </form>
            
            <div class="form-group">
              <div class="col-xs-12">
                <button type="button" name="button" class="btn btn-primary form-control">开通主机</button>
               </div>
              
            </div>
        </div>
      </div>
<section id="1_607" class="yead_editor" οnmοusedοwn="shifuMouseDown('1_607')" label="Copyright ? 2015 Yead All Rights Reserved." style="font-size:14px;font-family:'Microsoft YaHei';margin: 5px auto;white-space: normal;">
    <section class="yead_bgc" style="position:static;box-sizing:border-box;text-align:center;background-color:#ff391f;padding-top:10px">
        <svg style="width:100%;height:2em" data-width="100%">
            <text y="16" x="294.184" fill="#ffffff" style="font-size:16px;box-sizing:border-box">
                <tspan>
                     公告：免费主机仅用做测试网站使用，请勿搭建违法网站；
                </tspan>
                <tspan>
                    如有发现删机处理！
                </tspan>
                <animate attributename="x" from="0" to="120%" begin="0s" dur="5s" repeatcount="indefinite"></animate>

</body>
</html>