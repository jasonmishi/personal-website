import { viteStaticCopy } from 'vite-plugin-static-copy'

export default {
  plugins: [
    viteStaticCopy({
      targets: [
        {
          src: '../node_modules/bootstrap-icons/bootstrap-icons.svg',
          dest: '/'
        }
      ]
    })
  ],
  root: 'src',
  build: {
    outDir: '../dist'
  }
}