# WordPress Plugin Boilerplate
This is simple WordPress plugin boilerplate that will help you to create a small plugin for your coding task during your interview time. You can use this as you want in your projects.

## Installation

1. Download the zip file from here. Go to `wp-content/plugins` folder and extract it.
2. Follow the Usage and Assets Pipeline sections.
3. Activate it from an admin.

## Usage
* Update the folder `wp-plugin-boilerplate` and `plugin-file.php` file name according your plugin naming.
* I've added some constants in `plugin-file.php` file with prefix of `WP_PLUGIN_*`. Search and replace it in the whole plugin folder with your plugin prefix(_There are no more occurrences of this_).
* See the plugin structure section. Add an admin code in the `admin` folder. There you can create you `classes/traits/interfaces` files. Same thing for public code in `public` folder.

## Assets Pipeline

In the plugin, I've used the NPM packages for SCSS and JS bundling. This will allow you to use SCSS in your plugin. You can build your SCSS and JS with single command. See the below steps.

1. Go to `assets` folder in plugin via cmd.
2. Run `npm install` to download all packages.
3. Add/Update the SCSS or JS files in the `src` folder. 
4. Run `npm run build` command to build the SCSS and JS. You will see that in `dist` folder in `assets`.

## Plugin Structure
Make sure you follow the below structure.
```
.
├── admin/
│   ├── classes/
│   │   ├── class-admin-ui.php
│   │   └── (All admin class files)
│   ├── traits/
│   │   └── (All admin trait files)
│   └── interfaces/
│       └── (All admin interface files)
├── public/
│   ├── classes/
│   │   ├── class-public-ui.php
│   │   └── (All public class files)
│   ├── traits/
│   │   └── (All public trait files)
│   └── interfaces/
│       └── (All public interface files)
├── assets/
│   ├── src/
│   │   ├── scss/
│   │   │   ├── admin.scss
│   │   │   └── public.scss
│   │   └── js/
│   │       ├── admin.js
│   │       └── public.js
│   ├── dist/
│   │   ├── css/
│   │   │   ├── admin.css
│   │   │   └── public.css
│   │   └── js/
│   │       ├── admin.js
│   │       └── public.js
│   ├── images/
│   │   └── All Images
│   ├── gulpfile.js
│   ├── package.json
│   └── package-lock.json
├── plugin-file.php
├── README.md
└── .gitignore
```

I hope you like this plugin boilerplate. If you feel, anything could be improved. Feel free to contact me.

```
C:krupal> Happy Coding!
```