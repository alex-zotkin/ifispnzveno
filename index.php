<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слабое звено</title>
    <link rel="stylesheet" href="/index.css">
</head>
<body>
    <div id="app">
        <div class="bg"></div>
    
        <div class="box">
            <ul class="list">
                <li class="list_buttons">
                    <input type="button" value="+" v-on:click="plus">
                    <input type="button" value="-" v-on:click="minus">
                    <input type="button" value="Банк" v-on:click="addBank">
                    <input type="button" value="0" v-on:click="zero">
                    <input type="button" value="Конец раунда" v-on:click="round_end">
                </li>
                <li>
                    <h1 style="color: white;">ОБЩИЙ ВЫИГРЫШ: {{allBank}}</h1>
                </li>
                <li class="list_bank">
                    <h1>{{bank}} <br> БАНК</h1>
                </li>
                <li class="list_elem" v-for="(i, index) in labels.length" v-bind:style="index != currentLabel ? {backgroundImage: 'url(imgs/blue_btn.png)'} : {backgroundImage: 'url(imgs/red_btn.png)'}">
                    <h1>{{labels[index]}}</h1>
                </li>
            </ul>


        <div class="timer_box">
            <h1 class="timer">{{timerM}}:{{timerS}}</h1>

            <div class="timer_inputs">
                <input type="text" class="time">
                <input type="button" value="Старт" v-on:click="timer_start">
                <input type="button" value="Стоп" v-on:click="timer_stop">
            </div>
        </div>
        

        </div>



    </div>
</body>
<script src="js/vue.js"></script>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/index.js"></script>
</html>