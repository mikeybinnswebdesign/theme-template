import postcss from "rollup-plugin-postcss";
import { terser } from "rollup-plugin-terser";
import cleaner from "rollup-plugin-cleaner";
import static_files from "rollup-plugin-static-files";
const wordpress_files = "./../server/app/public/",
	theme_location = `${wordpress_files}wp-content/themes/%%THEME_NAME_SLUG%%/`;

export default {
	input: {
		"assets/js/site": "./src/js/site.js",
	},
	output: [
		{
			dir: "./build/",
			format: "esm",
			entryFileNames: "[name].[hash].min.js",
			plugins: [terser()],
		},
		{
			dir: theme_location,
			format: "esm",
			entryFileNames: "[name].[hash].min.js",
			plugins: [terser()],
		},
	],
	plugins: [
		cleaner({
			targets: ["./build/", theme_location],
		}),
		postcss({
			extract: "css/style.css",
			sourceMap: true,
			config: {
				path: "./postcss.config.js",
			},
		}),
		static_files({
			include: ["./src/wordpress/theme", "./src/copy"],
		}),
	],
};
