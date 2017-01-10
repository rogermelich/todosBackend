<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    *{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }


    #block1
    {
        position: relative;
        max-width: 600px;
        margin: 0 auto;
        border: solid;
        box-sizing: border-box;
    }

    #block2
    {
        position: relative;
        top: 100px;
        left: 30px;
        max-width: 600px;
        margin: 0 auto;
        padding: 50px;
        border: solid;
        box-sizing: border-box;
    }

    #block3
    {
        position: absolute;
        margin: 20px auto;
        padding: 50px;
        border: solid;
        box-sizing: border-box;
    }
</style>

<div id="block1">
    <span>Això es una prova inline</span>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequuntur, cum deleniti dolorum, eius fugiat modi neque nesciunt odio officiis provident quasi quibusdam, quos repellat temporibus velit vero voluptatem!
    <a href="http://www.google.es" style="display: block">Google</a>
</div>
<div id="block2">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci alias deleniti ex expedita id ipsam molestias non odit provident! Blanditiis delectus et eum molestias non, nostrum possimus repudiandae velit.


    <div id="block3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eos in magnam tempora vel. Accusantium aliquid, assumenda, ducimus eos harum id maxime natus nesciunt nisi nobis optio quidem saepe, unde.
    </div>
</div>
</body>
</html>