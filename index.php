<!doctype html>
<html>
<?php
$_BACKGROUND_COLOR = "#2196F3";
?>
<head>
    <title>一天一千次郎</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="mui/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="mui/js/mui.min.js"></script>
    <script type="text/javascript">
        function getmethod_iframe() {
            textarea = document.getElementById("chatvalue");
            chatvalue = textarea.value;
            if(chatvalue.length == 0){
                alert("貌似还没有输入内容");
                return;
            }
            var iframe = document.getElementById("chat-form");
            iframe.src = "chat.php?chat-value=" + chatvalue;
            //iframe.contentDocument.body.scrollTo(0,99999999);
            textarea.value = "";
            textarea.focus();
            // if(window.XMLHttpRequest){
            //     xmlhttp=new XMLHttpRequest();
            // }else{
            //     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            // }
            // xmlhttp.onreadystatechange        echo "<tr>", "<td align=\"left\"><button class=\"mui-btn\" style=\"background-color:$_BACKGROUND_COLOR;color:white;\">$value</button></td>", "</tr>";=function () {
            //     if(xmlhttp.readyState==4 && xmlhttp.status==200){
            //
            //     }
            //
            // }
            // xmlhttp.open("GET","chat.php?chat-value="+chatvalue,true);
            // xmlhttp.send();
        }
        function scrolltobuttom() {
            var iframe_cw = document.getElementById("chat-form").contentWindow;
            var iframe_doc = iframe_cw.document;
            iframe_cw.scroll(0,iframe_doc.body.scrollHeight);
        }
    </script>
</head>
<body>
<div class="mui-appbar mui--z2" style="background-color:<?php echo $_BACKGROUND_COLOR;?>;">
    <table width="100%">
        <tr style="vertical-align:middle;">
            <td class="mui--appbar-height" align = "center" valign="center"><p style="font-size:22px;text-align: center;">一天一千次郎</p></td>
        </tr>
    </table>
</div>
<div class="mui-panel">
    <div class="mui-panel mui--z3">
        <!-- 这里放iframe标签 -->
        <iframe id="chat-form" scrolling="yes" src="chat.php" height="250px" width="100%" frameborder="no" style="margin:auto;"></iframe>
    </div>
    <div class="mui-panel mui--z3">
        <form class="mui-form" name="form-chat">
            <legend>快来跟我说话哈：</legend>
            <div class="mui-textfield mui-textfield--float-label">
                <textarea id="chatvalue"></textarea>
                <label>你想对我说什么？</label>
            </div>
            <button type="button" name="Submit" class="mui-btn mui-btn--raised mui-btn--primary" style="background-color:<?php echo $_BACKGROUND_COLOR;?>;color:white;" onclick="getmethod_iframe();scrolltobuttom();">发送</button>
        </form>
    </div>
</div>
<footer>
    <div align="center">
        <a style="text-align: center" src="#">github开源地址</a>
    </div>

    <p style="text-align:center;">PHP是世界上最好的语言</p>
    <p style="text-align:center;">每天前一千次比较智能（包括所有访问用户的聊天），之后不太智能</p>
</footer>
</body>
</html>