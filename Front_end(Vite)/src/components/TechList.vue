<script>
//importo store
import { store } from "../store";

export default {
    name: "Myheader",

    data() {
        return {
            store,
        };
    },
};
</script>

<template>
    <div class="container">
        <h1>Lista Tecnologie</h1>
        <div class="row row-cols-5">
            <div v-for="(tech, i) in store.TechList" :key="i" class="col p-2">
                {{ tech.nome_tecnologia }}
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
//Scss relativo alla sola sezione di header
@use "../styles/partials/variables" as *;

h1 {
    text-align: center;
    margin-top: 20px;
    color: $secondary;
}
</style>
