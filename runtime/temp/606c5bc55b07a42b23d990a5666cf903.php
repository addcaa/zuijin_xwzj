<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/Users/cuifangfang/www/tp5/public/../application/index/view/index/add.html";i:1577774694;}*/ ?>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style: none;
    }
    #love{
        position: relative;
        height: 250px;
        width: 300px;
        border: 3px solid black;
        border-radius: 10%;
        background-image: url(demo.jpg);
        background-size: cover;

    }
    .play{
        color: white;
        background-color: #87CEFA;
        margin:0 6px;
    }
    #love .mlist{
        margin:10px;
        background-color: rgba(1,1,1,0.5);
        height: 165px;
        border-radius: 5px;

    }
    #love ul li{
        line-height:30px;
        text-align: center;
        cursor:pointer;
        border-radius: 4px;
    }
    #love ul li:hover{
        line-height:45px;
        text-align: center;
        cursor:pointer;
        margin:0 5px;
        background-color: #F0F8FF;
        border-radius:6px;
    }
</style>
<!DOCTYPE html>
<html>
<head>
    <title>music</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="music.css">
</head>
<body>
<div id = love>
    <audio src="" controls class="music"></audio>
    <ul class="mlist">
        <li class="">这个年纪</li>
        <li>七月的风</li>
        <li>音乐</li>
    </ul>
</div>
</body>
</html>
<script>
    var musicNode = document.getElementsByClassName('music')[0];
    var     mlist = document.getElementsByClassName('mlist')[0];
    var       lis = document.getElementsByTagName('li');
    var       len = lis.length;
    var  musicsrc =[ ];//这个数组用来放歌单的url。详情可以看我的网页demo
    musicNode.src = musicsrc[0];
    for (var i = 0; i < len; i++) 
                this.className = 'play';
            }})(i);
    }
    musicNode.onended =function()else{
            musicNode.src = musicsrc[ended + 1];
            lis[ended + 1].className = 'play';
            lis[ended].className = '';
            musicNode.load();
            musicNode.play(); }

    }
    function getPlay()
        }
    }

</script>
