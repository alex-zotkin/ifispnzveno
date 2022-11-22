new Vue({
    el: "#app",
    data: {
        labels: [1000, 2000, 5000, 10000, 20000, 30000, 40000, 50000],
        currentLabel: 0,
        bank: 0, 
        allBank: 0,


        timer: 0,
        timerM: "00",
        timerS: "00",
        interval : 0
    }, 
    methods: {
        plus(){
            if(this.currentLabel < this.labels.length - 1){
                this.currentLabel += 1;
            }
        },

        minus(){
            this.currentLabel = 0;
        },

        addBank(){
            if(this.currentLabel > 0 && this.currentLabel < this.labels.length){
                for (let i = 0; i < this.currentLabel; i++) {
                    this.bank +=  this.labels[i];
                }
            }
            this.minus();
        }, 

        zero(){
            this.bank = 0;
            this.minus();
        },

        round_end(){
            this.allBank += this.bank;
            this.zero();
        },




        timer_start(){
            this.timer_stop();
            let text = $(".time").val().split(":");
            let m = (Number)(text[0]);
            let s = (Number)(text[1]);
            this.timer = m*60 + s;


            this.timerM = m.toString();
            this.timerS = s.toString();
            
            if(m < 10){
                this.timerM = "0" + this.timerM;
            }

            if(s < 10){
                this.timerS = "0" + this.timerS;
            }

            this.interval = setInterval(this.time, 1000);
        },

        time(){
            if(this.timer > 0){
                this.timer -= 1;
            }

            else{
                this.timer_stop();
            }

            let m = (Number)(Math.floor(this.timer / 60));
            let s = this.timer % 60;

            this.timerM = m.toString();
            this.timerS = s.toString();
            
            if(m < 10){
                this.timerM = "0" + this.timerM;
            }

            if(s < 10){
                this.timerS = "0" + this.timerS;
            }
        },

        timer_stop(){
            clearInterval(this.interval);
            this.timer = 0;
            this.timerM = "00";
            this.timerS = "00";
        }
    }
});