import { reactive } from "vue";

export const store = reactive({
    TechList: [],
    apiURL: "http://localhost:8000/api/v1/technology",
});
