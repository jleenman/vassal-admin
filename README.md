### Description

This plugin removes most of the WordPress branding and adds some customizations to the Back-end. 

### Installation
- Install into the WordPress plugins directory and activate.
- Edit php-variables where needed.

### What it does

##### Rebrand WordPress
- Removes WordPress branding from `<title>` tags in the back-end.
- Adds a custom `favicon.ico` to the back-end.

##### Customize Admin Bar
- Removes WordPress logo and submenu from the Admin Bar.
- Removes 'view site' submenu from site title in the Admin Bar.
- Removes comments from Admin Bar.
- Changes "Howdy" message into more professional "Welcome back".

##### Remove Unused Admin Sidebar Menu Items
- Removes Links from Admin Sidebar

*Optional: edit `$remove_menu_items` array to add/remove extra menu items from the sidebar*

##### Customize back-end developer & copyright footer
- Adds a custom copyright notice in the back-end footer.

*Edit `$developer`, `$dev_url` and `$releaseyear` to customize for your own project.*

*Choose from `$ccby`, `$ccbysa` and `$ccbynd` to display the corresponding license.*