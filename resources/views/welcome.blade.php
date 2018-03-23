<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="@{{ csrf_token }}">
    <title>Laravel & Vue</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse">
            <div class=" container">
                 <div class="navbar-header">
                    <a class="navbar-brand" href="/">LaravelVue</a>
                </div>
            </div>
        </nav>    
        <div class="container main">
            <router-view />
        </div>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>