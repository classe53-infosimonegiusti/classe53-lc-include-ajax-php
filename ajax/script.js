const app = new Vue({

    el: '#root',

    created() {

        axios.get('http://localhost/lc-include-ajax-php/ajax/api_integers.php?min=5&max=100&items=15').then((response) => {
            console.log(response);
        });

    }

})