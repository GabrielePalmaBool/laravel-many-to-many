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
        <div class="row row-cols-5">
            <div v-for="(tech, i) in store.TechList" :key="i" class="col p-2">
                {{ tech[0].nome_tecnologia }}

                <div v-for="name in tech">
                    {{ name.nome_tecnologia }}
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
//Scss relativo alla sola sezione di header
@use "../styles/partials/variables" as *;
</style>
