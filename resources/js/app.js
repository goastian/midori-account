import { createApp } from "vue";
import App from "./App.vue";

import { router } from "./config/rutes.js";
import { components } from "./config/globalComponents";
import { $channels, $echo } from "./config/echo.js";
import { $server } from "./config/axios.js";

import "./config/matomo.js";

//Loading App
const app = createApp(App);
/**
 * Get the user id
 */

try {
    const res = await $server.get("/api/gateway/user");

    if (res.status == 200) {
        app.config.globalProperties.$id = res.data.id;
    }
} catch (error) {}

app.config.globalProperties.$echo = $echo;
app.config.globalProperties.$channels = $channels;
app.config.globalProperties.$server = $server;

app.use(router);

/**
 * Global components
 */
components.forEach((index) => {
    app.component(index[0], index[1]);
});

app.mount("#app");
