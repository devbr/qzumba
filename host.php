<?php

$passw = 'xj3xx123456';
$msg = '<div class="no">Digite a CHAVE!</div>';

if (isset($_POST['passw']) && $_POST['passw'] == $passw) {
    if (isset($_POST['p'])) {
        $p = $_POST['p'];
    } else {
        $p = '81';
    }
    $msg = '<div class="yes">Servidor RODANDO!</div>';
    exec('start php server.php -p:'.$p.' -s > server.out &');
}?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <style>@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);html{margin:0;padding:0;border:0}body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,code,del,dfn,em,img,q,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,dialog,figure,footer,header,hgroup,nav,section{margin:0;padding:0;border:0;font-weight:inherit;font-style:inherit;font-size:100%;font-family:inherit;vertical-align:baseline}article,aside,dialog,figure,footer,header,hgroup,nav,section{display:block}body{line-height:1.5;background:white}table{border-collapse:separate;border-spacing:0}caption,th,td{text-align:left;font-weight:normal;float:none!important}table,th,td{vertical-align:middle}blockquote:before,blockquote:after,q:before,q:after{content:''}blockquote,q{quotes:"" ""}a img{border:0}:focus{outline:0}html{font-size:100.01%}body{font-size:90%;color:#222;font-family:"Trebuchet MS",Optima,Arial,Helvetica,sans-serif}h1,h2,h3,h4,h5,h6{font-weight:normal;color:#111}h1{font-size:5em;line-height:1;margin-bottom:.5em}h2{font-size:3em;margin-bottom:.75em}h3{font-size:2em;line-height:1;margin-bottom:1em}h4{font-size:1.5em;line-height:1.25;margin-bottom:1.25em}h5{font-size:1em;font-weight:bold;margin-bottom:1.5em}h6{font-size:1em;font-weight:bold}h1 img,h2 img,h3 img,h4 img,h5 img,h6 img{margin:0}p{margin:0 0 1.5em}.left{float:left!important}p .left{margin:1.5em 1.5em 1.5em 0;padding:0}.right{float:right!important}p .right{margin:1.5em 0 1.5em 1.5em;padding:0}a:focus,a:hover{color:#09f}a{color:#06c;text-decoration:underline}blockquote{margin:1.5em;color:#666;font-style:italic}strong,dfn{font-weight:bold}em,dfn{font-style:italic}sup,sub{line-height:0}abbr,acronym{border-bottom:1px dotted #666}address{margin:0 0 1.5em;font-style:italic}del{color:#666}pre{margin:1.5em 0;white-space:pre}pre,code,tt{font:1em consolas,'andale mono','lucida console',monospace;line-height:1.5}li ul,li ol{margin:0}ul,ol{margin:0 1.5em 1.5em 0;padding-left:1.5em}ul{list-style-type:disc}ol{list-style-type:decimal}dl{margin:0 0 1.5em 0}dl dt{font-weight:bold}dd{margin-left:1.5em}table{margin-bottom:1.4em;width:100%}th{font-weight:bold}thead th{background:#c3d9ff}th,td,caption{padding:4px 10px 4px 5px}tfoot{font-style:italic}caption{background:#eee}.small{font-size:.8em;margin-bottom:1.875em;line-height:1.875em}.large{font-size:1.2em;line-height:2.5em;margin-bottom:1.25em}.hide{display:none}.quiet{color:#666}.loud{color:#000}.highlight{background:#ff0}.added{background:#060;color:#fff}.removed{background:#900;color:#fff}.first{margin-left:0;padding-left:0}.last{margin-right:0;padding-right:0}.top{margin-top:0;padding-top:0}.bottom{margin-bottom:0;padding-bottom:0}label{font-weight:normal}fieldset{padding:0 1.4em 1.4em 1.4em;margin:0 0 1.5em 0;border:1px solid #ccc}legend{font-weight:bold;font-size:1.2em;margin-top:-0.2em;margin-bottom:1em}fieldset,#IE8#HACK{padding-top:1.4em}legend,#IE8#HACK{margin-top:0;margin-bottom:0}input[type=text],input[type=password],input.text,input.title,textarea{background-color:#fff;border:1px solid #bbb}input[type=text]:focus,input[type=password]:focus,input.text:focus,input.title:focus,textarea:focus{border-color:#666}select{background-color:#fff;border-width:1px;border-style:solid}input[type=text],input[type=password],input.text,input.title,textarea,select{margin:.5em 0}input.text,input.title{width:300px;padding:5px}input.title{font-size:1.5em}textarea{width:390px;height:250px;padding:5px}form.inline{line-height:3}form.inline p{margin-bottom:0}.error,.alert,.notice,.success,.info{padding:.8em;margin-bottom:1em;border:2px solid #ddd}.error,.alert{background:#fbe3e4;color:#8a1f11;border-color:#fbc2c4}.notice{background:#fff6bf;color:#514721;border-color:#ffd324}.success{background:#e6efc2;color:#264409;border-color:#c6d880}.info{background:#d5edf8;color:#205791;border-color:#92cae4}.error a,.alert a{color:#F00}.notice a{color:#514721}.success a{color:#264409}.info a{color:#205791}
        .container {width:400px; margin:10px auto;}
        input{display:block; width:96%; padding:5px 2%;}
        </style>
    </head>
    <body>

        <div class="container">
            <h1>Host Start</h1>
            <?php echo $msg?>
            <form method="post">
                <label>Chave</label>
                <input type="password" name="passw" value="" placeholder="Senha">
                <label>Port</label>
                <input type="text" name="p" placeholder="Port">
                <button>Run</button>
            </form>
        </div>

        <script src="./script/lib/util.js"></script>
        <script src="./script/screl.js"></script>
    </body>
</html>
