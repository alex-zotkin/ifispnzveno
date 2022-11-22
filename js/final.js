new Vue({
    el: "#app",
    data: {
        row: [
            [0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0]
        ]
    }, 
    methods: {
        change(r, index){
            this.row[r][index] = (this.row[r][index] + 1) % 3;
            this.$forceUpdate();
        }
    }
});