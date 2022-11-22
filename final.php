<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слабое звено</title>
    <link rel="stylesheet" href="/final.css">
</head>
<body>
    <div id="app">
        <div class="bg"></div>
    
            <div class="box">

                <ul class="row">
                    <input type="text">
                    <li v-for="(i, index) in row[0]" :key="index" v-bind:style="{backgroundImage: 'url(imgs/'+ i +'.png)'}" v-on:click="change(0, index)">
                        <h1 v-if="i == 0">{{index + 1}}</h1>
                    </li>
                </ul>

                <ul class="row">
                    <input type="text">
                    <li v-for="(i, index) in row[1]"  v-bind:style="{backgroundImage: 'url(imgs/'+ i +'.png)'}" v-on:click="change(1, index)">
                        <h1 v-if="i == 0">{{index + 1}}</h1>
                    </li>
                </ul>

            </div>
        </div>



    </div>
</body>
<script src="js/vue.js"></script>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/final.js"></script>
</html>