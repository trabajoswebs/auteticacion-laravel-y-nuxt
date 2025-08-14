// https://nuxt.com/docs/api/configuration/nuxt-config
import Aura from "@primeuix/themes/aura";
import tailwindcss from "@tailwindcss/vite";

export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },

  modules: [
    "@nuxt/fonts",
    "@nuxt/image",
    "@nuxt/test-utils",
    "@nuxt/eslint",
    "@pinia/nuxt",
    "@primevue/nuxt-module",
  ],
  
  primevue: {
    options: {
      ripple: true,
      inputVariant: "filled",
      theme: {
        preset: Aura,
        options: {
          prefix: "p",
          darkModeSelector: "system",
          cssLayer: false,
        },
      },
    },
    autoImport: true,
  },
  
  css: ["~/assets/css/main.css"],
  
  vite: {
    plugins: [tailwindcss()],
  },

  // Configuración de seguridad
  nitro: {
    routeRules: {
      '/**': {
        headers: {
          'X-Frame-Options': 'DENY',
          'X-Content-Type-Options': 'nosniff',
          'X-XSS-Protection': '1; mode=block',
          'Referrer-Policy': 'strict-origin-when-cross-origin',
          'Permissions-Policy': 'geolocation=(), microphone=(), camera=(), payment=(), usb=(), magnetometer=(), gyroscope=()',
        }
      }
    }
  },

  // Configuración de seguridad de la aplicación
  app: {
    head: {
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { 'http-equiv': 'X-UA-Compatible', content: 'IE=edge' },
        { name: 'format-detection', content: 'telephone=no' }
      ]
    }
  },

  // Configuración de seguridad de runtime
  runtimeConfig: {
    public: {
      apiBase: process.env.NUXT_PUBLIC_API_BASE || 'http://localhost:8000'
    }
  }
});
