import { defineConfig } from 'vite'
import { resolve } from 'path'
import { execSync } from 'child_process'

let gitHash
try {
  gitHash = execSync('git rev-parse --short HEAD').toString().trim()
} catch {
  gitHash = 'unknown'
}

export default defineConfig({
    define: {
    __GIT_HASH__: JSON.stringify(gitHash),
  },
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        bluescreen: resolve(__dirname, 'bluescreen.html'),
        guess_the_numver: resolve(__dirname, 'gratspiel.virus/guess-the-number/index.html'),
        kapselsecurity: resolve(__dirname, 'gratspiel.virus/kapselsecurity/index.html'),
        snake: resolve(__dirname, 'gratspiel.virus/snake/index.html')
      }
    }
  }
})
