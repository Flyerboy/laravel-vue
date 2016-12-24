<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>Laravel&Vue</title>
    </head>
    <body>
        <div id="app" class="container"><router-view class="view"></router-view>
        </div>
    </body>
<script type="text/javascript">
    var Laravel = {
        // 设置 csrfToken
       csrfToken: '{{ csrf_token() }}' 
    };
</script>
<script src="/js/app.js"></script>
</html>