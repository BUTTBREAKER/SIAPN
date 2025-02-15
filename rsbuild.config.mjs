import { defineConfig } from "@rsbuild/core";
import { pluginSvelte } from "@rsbuild/plugin-svelte";

export default defineConfig({
  plugins: [pluginSvelte()],
  html: {
    title: "SIPAN",
    template: "src/template.html",
  },
  environments: {
    php: {
      output: {
        assetPrefix: "./dist/",
      },
      html: {
        title: '<?= is_string($title) ? "$title ~ SIPAN" : "SIPAN" ?>',
        tags: [
          {
            tag: "base",
            append: false,
            attrs: {
              href: "<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>",
            },
          },
        ],
      },
    },
    dev: {},
  },
});
