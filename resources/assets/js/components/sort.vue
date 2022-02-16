Vue.component('example-component', {
 
    data() {
        return {
            // You could have $route.query.sort or set a custom value as per your backend
            // sort: Number(this.$route.query.sort),
            sort: 1,
            sorttype: 'asc',
        }
    },
 
    methods: {
        sortData(sort, direction) {
            this.sort = sort;
            this.sorttype = direction;
            this.filterData();
        },
        // Our method to GET results from a Laravel endpoint
        filterData() {
            // Using vue-resource as an example
            t.$http.get('/api/v1/posts?sort=' + t.sort + '&sorttype=' + t.sorttype)
                .then(response => {
                    // do whatever you do with response data
                }).catch(error => {
                    // do whatever you do with error data
                });
        }
    }
 
});