import vue from "@vitejs/plugin-vue";
import { defineConfig } from "vite";
import vueDevTools from "vite-plugin-vue-devtools";

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue(), vueDevTools()],
  build: {
    outDir: "../../public/dist",
    emptyOutDir: true,
    rollupOptions: {
      input: "./src/main.js",
      output: { entryFileNames: "assets/main.js" }
    }
  }
});
