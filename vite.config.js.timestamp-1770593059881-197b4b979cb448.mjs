// vite.config.js
import { defineConfig } from "file:///home/project/node_modules/vite/dist/node/index.js";
import laravel from "file:///home/project/node_modules/laravel-vite-plugin/dist/index.js";
import vue from "file:///home/project/node_modules/@vitejs/plugin-vue/dist/index.mjs";
import fs from "fs";
import tailwindcss from "file:///home/project/node_modules/@tailwindcss/vite/dist/index.mjs";
var { VITE_LOG_BUILD_WARNINGS } = process.env;
var vite_config_default = defineConfig({
  plugins: [
    tailwindcss(),
    vue({
      template: {
        compilerOptions: {
          isCustomElement: (tag) => tag.startsWith("swiper-")
        }
      }
    }),
    laravel({
      input: [
        "resources/js/spa/apps/desktop/bootstrap/application.js",
        "resources/js/spa/apps/mobile/bootstrap/application.js",
        // Business CSS/JS files
        "resources/css/business/main.css",
        "resources/js/business/main.js",
        // Desktop CSS files
        "resources/css/spa/apps/desktop/main.css",
        "resources/css/spa/apps/desktop/auth.css",
        "resources/css/spa/apps/mobile/main.css",
        "resources/fonts/sf-pro/stylesheet.css",
        "resources/fonts/sf-mono/stylesheet.css",
        // Document CSS
        "resources/css/document/main.css",
        "resources/js/document/main.js",
        "resources/css/admin/main.css",
        "resources/js/admin/main.js",
        "resources/js/mpa/apexcharts.js",
        "resources/js/mpa/rich.editor.js",
        "resources/css/mpa/rich.editor.css"
      ],
      refresh: true
    }),
    {
      name: "build-number",
      buildStart() {
        fs.writeFileSync("./storage/frontend/build.num", Math.floor(Math.random() * 1e6).toString());
      }
    }
  ],
  resolve: {
    alias: {
      "@": "/resources/js/spa",
      "@D": "/resources/js/spa/apps/desktop",
      "@M": "/resources/js/spa/apps/mobile"
    }
  },
  server: {
    port: 5173,
    strictPort: true,
    host: "0.0.0.0",
    hmr: {
      host: "localhost",
      port: 5173,
      overlay: false
    }
  },
  esbuild: {
    supported: {
      "top-level-await": true
      //browsers can handle top-level-await features
    }
  },
  build: {
    rollupOptions: {
      onwarn: function(warning, warn) {
        if (VITE_LOG_BUILD_WARNINGS) {
          const today = (/* @__PURE__ */ new Date()).toISOString().slice(0, 10);
          const logFile = `./node/npm/build-logs/${today}.log`;
          fs.appendFileSync(logFile, warning.message);
        }
        ;
      }
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCIvaG9tZS9wcm9qZWN0XCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCIvaG9tZS9wcm9qZWN0L3ZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9ob21lL3Byb2plY3Qvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuaW1wb3J0IHZ1ZSBmcm9tICdAdml0ZWpzL3BsdWdpbi12dWUnO1xuaW1wb3J0IGZzIGZyb20gJ2ZzJztcbmltcG9ydCB0YWlsd2luZGNzcyBmcm9tIFwiQHRhaWx3aW5kY3NzL3ZpdGVcIjtcblxuY29uc3QgeyBWSVRFX0xPR19CVUlMRF9XQVJOSU5HUyB9ID0gcHJvY2Vzcy5lbnY7XG5cbmV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZyh7XG4gICAgcGx1Z2luczogW1xuICAgICAgICB0YWlsd2luZGNzcygpLFxuICAgICAgICB2dWUoe1xuICAgICAgICAgICAgdGVtcGxhdGU6IHtcbiAgICAgICAgICAgICAgICBjb21waWxlck9wdGlvbnM6IHtcbiAgICAgICAgICAgICAgICAgICAgaXNDdXN0b21FbGVtZW50OiB0YWcgPT4gdGFnLnN0YXJ0c1dpdGgoJ3N3aXBlci0nKVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfSksXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL3NwYS9hcHBzL2Rlc2t0b3AvYm9vdHN0cmFwL2FwcGxpY2F0aW9uLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL3NwYS9hcHBzL21vYmlsZS9ib290c3RyYXAvYXBwbGljYXRpb24uanMnLFxuXG4gICAgICAgICAgICAgICAgLy8gQnVzaW5lc3MgQ1NTL0pTIGZpbGVzXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvYnVzaW5lc3MvbWFpbi5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvYnVzaW5lc3MvbWFpbi5qcycsXG5cblxuICAgICAgICAgICAgICAgIC8vIERlc2t0b3AgQ1NTIGZpbGVzXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3Mvc3BhL2FwcHMvZGVza3RvcC9tYWluLmNzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3Mvc3BhL2FwcHMvZGVza3RvcC9hdXRoLmNzcycsXG5cbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9zcGEvYXBwcy9tb2JpbGUvbWFpbi5jc3MnLFxuXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9mb250cy9zZi1wcm8vc3R5bGVzaGVldC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvZm9udHMvc2YtbW9uby9zdHlsZXNoZWV0LmNzcycsXG4gICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgLy8gRG9jdW1lbnQgQ1NTXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvZG9jdW1lbnQvbWFpbi5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvZG9jdW1lbnQvbWFpbi5qcycsXG5cbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9hZG1pbi9tYWluLmNzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9hZG1pbi9tYWluLmpzJyxcbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL21wYS9hcGV4Y2hhcnRzLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL21wYS9yaWNoLmVkaXRvci5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvbXBhL3JpY2guZWRpdG9yLmNzcydcbiAgICAgICAgICAgIF0sXG4gICAgICAgICAgICByZWZyZXNoOiB0cnVlXG4gICAgICAgIH0pLFxuICAgICAgICB7XG4gICAgICAgICAgICBuYW1lOiAnYnVpbGQtbnVtYmVyJyxcbiAgICAgICAgICAgIGJ1aWxkU3RhcnQoKSB7XG4gICAgICAgICAgICAgICAgLy8gR2VuZXJhdGUgYSByYW5kb20gYnVpbGQgbnVtYmVyIGFuZCBzYXZlIGl0IHRvIHRoZSBzdG9yYWdlL2Zyb250ZW5kL2J1aWxkLm51bSBmaWxlXG4gICAgICAgICAgICAgICAgLy8gVGhpcyBpcyB1c2VkIHRvIHByZXZlbnQgY2FjaGluZyBvZiB0aGUgYnVpbGQgbm9uZSBwYWNrZWQgd2l0aCB2aXRlIGxpa2UgZGFyayB0aGVtZSBjc3MgZmlsZS5cbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICBmcy53cml0ZUZpbGVTeW5jKCcuL3N0b3JhZ2UvZnJvbnRlbmQvYnVpbGQubnVtJywgTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogMTAwMDAwMCkudG9TdHJpbmcoKSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICBdLFxuICAgIHJlc29sdmU6IHtcbiAgICAgICAgYWxpYXM6IHtcbiAgICAgICAgICAgICdAJzogJy9yZXNvdXJjZXMvanMvc3BhJyxcbiAgICAgICAgICAgICdARCc6ICcvcmVzb3VyY2VzL2pzL3NwYS9hcHBzL2Rlc2t0b3AnLFxuICAgICAgICAgICAgJ0BNJzogJy9yZXNvdXJjZXMvanMvc3BhL2FwcHMvbW9iaWxlJyxcbiAgICAgICAgfVxuICAgIH0sXG4gICAgc2VydmVyOiB7XG4gICAgICAgIHBvcnQ6IDUxNzMsXG4gICAgICAgIHN0cmljdFBvcnQ6IHRydWUsXG4gICAgICAgIGhvc3Q6ICcwLjAuMC4wJyxcbiAgICAgICAgaG1yOiB7XG4gICAgICAgICAgICBob3N0OiAnbG9jYWxob3N0JyxcbiAgICAgICAgICAgIHBvcnQ6IDUxNzMsXG4gICAgICAgICAgICBvdmVybGF5OiBmYWxzZSxcbiAgICAgICAgfVxuICAgIH0sXG4gICAgZXNidWlsZDoge1xuICAgICAgICBzdXBwb3J0ZWQ6IHtcbiAgICAgICAgICAgICd0b3AtbGV2ZWwtYXdhaXQnOiB0cnVlIC8vYnJvd3NlcnMgY2FuIGhhbmRsZSB0b3AtbGV2ZWwtYXdhaXQgZmVhdHVyZXNcbiAgICAgICAgfVxuICAgIH0sXG4gICAgYnVpbGQ6IHtcbiAgICAgICAgcm9sbHVwT3B0aW9uczoge1xuICAgICAgICAgICAgb253YXJuOiBmdW5jdGlvbih3YXJuaW5nLCB3YXJuKSB7XG4gICAgICAgICAgICAgICAgaWYgKFZJVEVfTE9HX0JVSUxEX1dBUk5JTkdTKSB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IHRvZGF5ID0gbmV3IERhdGUoKS50b0lTT1N0cmluZygpLnNsaWNlKDAsIDEwKTtcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgbG9nRmlsZSA9IGAuL25vZGUvbnBtL2J1aWxkLWxvZ3MvJHt0b2RheX0ubG9nYDtcbiAgICBcbiAgICAgICAgICAgICAgICAgICAgZnMuYXBwZW5kRmlsZVN5bmMobG9nRmlsZSwgd2FybmluZy5tZXNzYWdlKTtcbiAgICAgICAgICAgICAgICB9O1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxufSk7XG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQXlOLFNBQVMsb0JBQW9CO0FBQ3RQLE9BQU8sYUFBYTtBQUNwQixPQUFPLFNBQVM7QUFDaEIsT0FBTyxRQUFRO0FBQ2YsT0FBTyxpQkFBaUI7QUFFeEIsSUFBTSxFQUFFLHdCQUF3QixJQUFJLFFBQVE7QUFFNUMsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsWUFBWTtBQUFBLElBQ1osSUFBSTtBQUFBLE1BQ0EsVUFBVTtBQUFBLFFBQ04saUJBQWlCO0FBQUEsVUFDYixpQkFBaUIsU0FBTyxJQUFJLFdBQVcsU0FBUztBQUFBLFFBQ3BEO0FBQUEsTUFDSjtBQUFBLElBQ0osQ0FBQztBQUFBLElBQ0QsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBLFFBQ0g7QUFBQSxRQUNBO0FBQUE7QUFBQSxRQUdBO0FBQUEsUUFDQTtBQUFBO0FBQUEsUUFJQTtBQUFBLFFBQ0E7QUFBQSxRQUVBO0FBQUEsUUFFQTtBQUFBLFFBQ0E7QUFBQTtBQUFBLFFBSUE7QUFBQSxRQUNBO0FBQUEsUUFFQTtBQUFBLFFBQ0E7QUFBQSxRQUVBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsSUFDRDtBQUFBLE1BQ0ksTUFBTTtBQUFBLE1BQ04sYUFBYTtBQUlULFdBQUcsY0FBYyxnQ0FBZ0MsS0FBSyxNQUFNLEtBQUssT0FBTyxJQUFJLEdBQU8sRUFBRSxTQUFTLENBQUM7QUFBQSxNQUNuRztBQUFBLElBQ0o7QUFBQSxFQUNKO0FBQUEsRUFDQSxTQUFTO0FBQUEsSUFDTCxPQUFPO0FBQUEsTUFDSCxLQUFLO0FBQUEsTUFDTCxNQUFNO0FBQUEsTUFDTixNQUFNO0FBQUEsSUFDVjtBQUFBLEVBQ0o7QUFBQSxFQUNBLFFBQVE7QUFBQSxJQUNKLE1BQU07QUFBQSxJQUNOLFlBQVk7QUFBQSxJQUNaLE1BQU07QUFBQSxJQUNOLEtBQUs7QUFBQSxNQUNELE1BQU07QUFBQSxNQUNOLE1BQU07QUFBQSxNQUNOLFNBQVM7QUFBQSxJQUNiO0FBQUEsRUFDSjtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsV0FBVztBQUFBLE1BQ1AsbUJBQW1CO0FBQUE7QUFBQSxJQUN2QjtBQUFBLEVBQ0o7QUFBQSxFQUNBLE9BQU87QUFBQSxJQUNILGVBQWU7QUFBQSxNQUNYLFFBQVEsU0FBUyxTQUFTLE1BQU07QUFDNUIsWUFBSSx5QkFBeUI7QUFDekIsZ0JBQU0sU0FBUSxvQkFBSSxLQUFLLEdBQUUsWUFBWSxFQUFFLE1BQU0sR0FBRyxFQUFFO0FBQ2xELGdCQUFNLFVBQVUseUJBQXlCLEtBQUs7QUFFOUMsYUFBRyxlQUFlLFNBQVMsUUFBUSxPQUFPO0FBQUEsUUFDOUM7QUFBQztBQUFBLE1BQ0w7QUFBQSxJQUNKO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
