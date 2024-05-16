import { defineConfig } from "vite";
import { v4wp } from "@kucrut/vite-for-wp";

export default defineConfig({
  plugins: [v4wp({ input: "assets/js/index.js", outDir: "assets/dist" })],
});
