Yaf-demo
========
++++++++
========
nginx 
    if ($request_uri !~ ^/public|favicon.ico|\.php$) {
        rewrite ^/(.*) /index.php/$1 last;
    }
