module.exports = {
	ignoreFiles: ["node_modules", "vendor", "**/*.js"],
	plugins: ["stylelint-no-unsupported-browser-features"],
	extends: [
		"stylelint-config-sass-guidelines",
		"stylelint-config-idiomatic-order",
		"stylelint-config-prettier",
	],
	rules: {
		"order/properties-alphabetical-order": null,
		"color-hex-length": "long",
		"declaration-property-value-disallowed-list": [
			{
				"/^border/": "0", // Use "none" instead for consistency.
				overflow: "scroll", // "scroll" shows the scrollbar on windows even if it's not needed, consider using "auto" instead.
			},
		],
		"declaration-no-important": [
			true,
			{
				severity: "warning",
			},
		],
		"alpha-value-notation": "percentage",
		"font-weight-notation": "numeric",
		"declaration-block-no-duplicate-custom-properties": true,
		"declaration-block-no-duplicate-properties": true,
		"font-family-no-duplicate-names": true,
		"no-duplicate-selectors": true,
		"unit-disallowed-list": ["mm", "in", "cm", "pt", "pc", "ex", "ch"],
		"plugin/no-unsupported-browser-features": [
			true,
			{
				severity: "warning",
			},
		],
	},
};
