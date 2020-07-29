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
        //I wanted to select match the one from the page adress
        if(sessionStorage.getItem('selector'))
        {
            const currentPage=window.location.href.split('/').reverse()[0];
            if(currentPage == "")
            {
               this.selector="all"; 
            }
            else
            {
              this.selector=sessionStorage.getItem('selector')  
            }
        }
        else
        {
            this.selector="all"; 
        }
    },
})