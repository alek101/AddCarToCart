let vueSelector = new Vue({
    el: "#vueSelector",
    data: {
        selector: "all",
        test:"test"
    },
    methods: {
        swichPage()
        {
            sessionStorage.setItem('selector',this.selector);
            window.location.replace("/"+this.selector);
            
        }
    },
    beforeMount() {
        this.selector=sessionStorage.getItem('selector') || "all";
    },
})