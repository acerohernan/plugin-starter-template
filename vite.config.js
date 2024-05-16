import { defineConfig } from "vite";
import { v4wp } from "@kucrut/vite-for-wp";

const hash = Math.floor(Math.random() * 90000) + 10000;

export default defineConfig({
  plugins: [
    v4wp({ input: "assets/js/index.js", outDir: "assets/dist" }),
    {
      name: "override-config",
      config: () => ({
        build: {
          manifest: "manifest.json",
        },
      }),
    },
  ],
  build: {
    rollupOptions: {
      output: {
        sourcemap: false,
        entryFileNames: `[name]` + hash + `.js`,
        chunkFileNames: `[name]` + hash + `.js`,
        assetFileNames: `[name]` + hash + `.[ext]`,
      },
    },
  },
});
