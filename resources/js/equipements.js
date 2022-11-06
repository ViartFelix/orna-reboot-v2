import { createApp } from "Vue"
import EquipAllComponent from "./equipements/all/EquipementsAll.vue";
import vuetify from "./plugins/vuetify"

createApp(EquipAllComponent).use(vuetify).mount('#app')