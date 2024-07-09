import { defineConfig } from 'vite'
import { resolve } from 'path'

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        guess_the_numver: resolve(__dirname, 'gratspiel.virus/guess-the-number/index.html'),
        snake: resolve(__dirname, 'gratspiel.virus/snake/index.html')
      }
    }
  }
})
