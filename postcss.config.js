const postcss_preset_env = require("postcss-preset-env"), // contains autoprefixer
	cssnano = require("cssnano");

module.exports = {
	plugins: [
		postcss_preset_env({ stage: 0 }),
		cssnano({
			preset: "default",
		}),
	],
};
