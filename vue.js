const { createApp } = Vue;

createApp({
    data() {
        return {
            database: {},
            api: 'https://countriesnow.space/api/v0.1/countries/capital',
            opzioni: [],
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        // getData
        getData() {
            axios.get(this.api)
            .then(response => {
                console.log("La risposta dell'api delle capitali è: " + response);
                this.database = {database: response.data};

                // sendData
                axios.post('capitali.php', this.database, {
                    headers: { 'Content-Type': 'multipart/form-data'}
                })
                .then(risp => {
                    this.opzioni = risp.data;
                    console.log(this.opzioni);
                })
                .catch(error => {
                    console.log("Errore nell'inviare i dati: ", error);
                })
                
            })
            .catch(error => {
                console.log('Errore nel recuperare i dati: ', error);
            })
        },
    }
}).mount("#app");

