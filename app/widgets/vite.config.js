import vue from "@vitejs/plugin-vue";
import { defineConfig } from "vite";

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    outDir: "../../public/dist",
    emptyOutDir: true,
    rollupOptions: {
      input: "./src/main.js",
      output: { entryFileNames: "assets/main.js" }
    }
  }
});
