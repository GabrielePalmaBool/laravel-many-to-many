<script>
//importo libreria axios
import axios from "axios";

//importo componenti figli
import TechList from "./components/TechList.vue";

//importo store
import { store } from "./store";

export default {
    components: {
        TechList,
    },

    data() {
        return {
            store,
        };
    },

    methods: {
        getTech() {
            let myURL = store.apiURL;

            console.log(myURL);

            //prima chiamata axios
            axios
                .get(myURL)
                .then((res) => {
                    store.TechList = res.data;

                    console.log(store.TechList);
                })
                .catch((err) => {
                    console.log("Errori", err);
                });
        },
    },

    mounted() {
        this.getTech();
    },
};
</script>

<template>
    <TechList />
</template>

<style lang="scss">
@use "./styles/general.scss";
</style>
