// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/shop_filament_module_phpunit_vue_vite_laravel/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/shop_filament_module_phpunit_vue_vite_laravel/node_modules/laravel-vite-plugin/dist/index.js";
import vue from "file:///C:/laragon/www/shop_filament_module_phpunit_vue_vite_laravel/node_modules/@vitejs/plugin-vue/dist/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js",
        "Modules/Front/resources/assets/css/app.css",
        "Modules/Front/resources/assets/js/app.js",
        "Modules/User/resources/assets/css/app.css",
        "Modules/User/resources/assets/js/app.js",
        "Modules/Admin/resources/assets/css/app.css",
        "Modules/Admin/resources/assets/js/app.js"
      ],
      refresh: true
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false
        }
      }
    })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxzaG9wX2ZpbGFtZW50X21vZHVsZV9waHB1bml0X3Z1ZV92aXRlX2xhcmF2ZWxcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkM6XFxcXGxhcmFnb25cXFxcd3d3XFxcXHNob3BfZmlsYW1lbnRfbW9kdWxlX3BocHVuaXRfdnVlX3ZpdGVfbGFyYXZlbFxcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vQzovbGFyYWdvbi93d3cvc2hvcF9maWxhbWVudF9tb2R1bGVfcGhwdW5pdF92dWVfdml0ZV9sYXJhdmVsL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCB2dWUgZnJvbSAnQHZpdGVqcy9wbHVnaW4tdnVlJ1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogW1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvYXBwLmpzJyxcbiAgICAgICAgICAgICAgICAnTW9kdWxlcy9Gcm9udC9yZXNvdXJjZXMvYXNzZXRzL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAnTW9kdWxlcy9Gcm9udC9yZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICAgICAgJ01vZHVsZXMvVXNlci9yZXNvdXJjZXMvYXNzZXRzL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAnTW9kdWxlcy9Vc2VyL3Jlc291cmNlcy9hc3NldHMvanMvYXBwLmpzJyxcbiAgICAgICAgICAgICAgICAnTW9kdWxlcy9BZG1pbi9yZXNvdXJjZXMvYXNzZXRzL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAnTW9kdWxlcy9BZG1pbi9yZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogdHJ1ZSxcbiAgICAgICAgfSksXG4gICAgICAgIHZ1ZSh7XG4gICAgICAgICAgICB0ZW1wbGF0ZToge1xuICAgICAgICAgICAgICAgIHRyYW5zZm9ybUFzc2V0VXJsczoge1xuICAgICAgICAgICAgICAgICAgICBiYXNlOiBudWxsLFxuICAgICAgICAgICAgICAgICAgICBpbmNsdWRlQWJzb2x1dGU6IGZhbHNlXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KSxcbiAgICBdLFxufSk7XG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQThXLFNBQVMsb0JBQW9CO0FBQzNZLE9BQU8sYUFBYTtBQUNwQixPQUFPLFNBQVM7QUFFaEIsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBLFFBQ0g7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsTUFDSjtBQUFBLE1BQ0EsU0FBUztBQUFBLElBQ2IsQ0FBQztBQUFBLElBQ0QsSUFBSTtBQUFBLE1BQ0EsVUFBVTtBQUFBLFFBQ04sb0JBQW9CO0FBQUEsVUFDaEIsTUFBTTtBQUFBLFVBQ04saUJBQWlCO0FBQUEsUUFDckI7QUFBQSxNQUNKO0FBQUEsSUFDSixDQUFDO0FBQUEsRUFDTDtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
