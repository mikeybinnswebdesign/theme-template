import dotenv from "dotenv";
import postcss from "rollup-plugin-postcss";
import { terser } from "rollup-plugin-terser";
import cleaner from "rollup-plugin-cleaner";
import static_files from "rollup-plugin-static-files";
dotenv.config();

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
			sourcemap: true,
		},
		{
			dir: process.env.theme_folder,
			format: "esm",
			entryFileNames: "[name].[hash].min.js",
			plugins: [terser()],
			sourcemap: true,
		},
	],
	plugins: [
		cleaner({
			targets: ["./build/", process.env.theme_folder],
		}),
		postcss({
			extract: "assets/css/style.css",
			sourceMap: true,
			config: {
				path: "./postcss.config.js",
			},
		}),
		static_files({
			include: ["./src/wordpress/theme", "./src/copy"],
			exclude: ["./src/wordpress/theme/phpcs.xml"],
		}),
	],
};
