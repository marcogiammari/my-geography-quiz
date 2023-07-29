const { createApp } = Vue;

createApp({
    data() {
        return {
            database: {},
            api: 'https://countriesnow.space/api/v0.1/countries/capital',
            gameStarted: false,
            opzioni: [],
            randomNum: null,
            questionsTotal: 5,
            questionsNum: 5,
            correctAnswers: 0,
            check: false
        };
    },
    mounted() {
        this.getData();
    },
    methods: {
        sendData() {
            axios.post('capitali.php', this.database, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then(risp => {
                    this.opzioni = risp.data;
                    this.randomNum = Math.floor(Math.random() * 4);
                    this.domanda = this.opzioni[this.randomNum].name;
                })
                .catch(error => {
                    console.log("Errore nell'inviare i dati: ", error);
                })
        },
        // getData
        getData() {
            axios.get(this.api)
                .then(response => {
                    console.log("La risposta dell'api delle capitali è: " + response);
                    this.database = { database: response.data };

                    // sendData
                    this.sendData();

                })
                .catch(error => {
                    console.log('Errore nel recuperare i dati: ', error);
                })
        },
        checkAnswer(i) {
            this.check = true;
            setTimeout(() => {
                this.questionsNum--;
                if (i == this.randomNum) {
                    this.correctAnswers++;
                }

                if (this.questionsNum > 0) {
                    // sendData
                    this.sendData();
                }
                this.check = false;
            }, 2000);
        },
        toggleBtn(i) {
            if (i == this.randomNum && this.check) {
                return "btn-success"
            } else {
                return "btn-light"
            }
        }
    }
}).mount("#app");

