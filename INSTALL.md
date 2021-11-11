# Install

## Requirements

- Node.js
- Composer
- A compatible code editor (VS Code)
- Git
- A way to host a wordpress site locally

## Steps to begin

1. Take a copy of this code and copy it into a folder outside of the Wordpress installation (excluding .git folder)
2. Set the theme_folder variable in `.env.example` to point the correct folder and then rename the file to `.env` (the placeholder will be replaced in the next step).
3. Use search and replace to change all placeholders as laid out below. When it's done, the table below should act as a helpful reference guide should you need it.
4. Run `npm install` and `composer install` to install all the npm and composer dependencies.
5. Update dependencies as required using `update` and `outdated` commands for both npm and composer. (be careful of breaking changes)
6. Perform code editor setup, instructions below.
7. Start a git repository for your theme.

## Placeholders

%%THEME_NAME%% - Sentence case theme name (presentational).
%%THEME_NAME_SLUG%% - all lowercase theme name, should match theme folder name.
%%THEME_NAMESPACE%% - Theme name with no spaces and in camel case for namespaces.
%%AUTHOR%% - Theme author name (visible in theme info)
%%AUTHOR_SLUG%% - Currently only used for composer name.
%%AUTHOR_URL%% - Web address of theme author (visible in theme info)
%%AUTHOR_EMAIL%% - email address of theme author (visible in theme info)
%%MIN_WP_VERSION%% - The minimum support wordpress version for this build (usually the most recent version unless specifically required)
%%MIN_PHP_VERSION%% - The minimum PHP version for this build (usually the most recent stable version unless specifically required)

## Code editor setup

### VS Code:

First, Find the file named "phpstan-vscode.neon". When you have found that, rename it to "phpstan.neon". You can either delete or ignore the other editor files, but make sure you leave phpstan.dist.neon as this is required.

Secondly, there is a folder of recommended extensions. You should have a dialog pop up to install / enable these, but if not, or you already dismissed it, go to the extensions tab, filter by recommendations and you should see the workspace recommendations there with an install all button. There is also some workspace setting in that folder, which will automatically set the correct settings for these extensions.

### Other editors

This is not currently set up for other editors. If you want to have another editor supported, please submit a pull request with the following considerations:

- Should show linting errors for ESLint, PHPStan, PHPCS and Stylelint using the code editors normal error display method.
- Should allow automatic formatting on type/save using Prettier, Stylelint and PHPCBF.
- Must follow the settings set out using .editorconfig
