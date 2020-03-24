# This project is an test usage [Wordpress codex](https://developer.wordpress.org/plugins/intro/)

## attempt implement:
  
   - [Header requirement]( https://developer.wordpress.org/plugins/plugin-basics/header-requirements/ )
   - [Uninstall Method]( https://developer.wordpress.org/plugins/plugin-basics/uninstall-methods/ )
   - [Checker Roles User]( https://developer.wordpress.org/plugins/security/checking-user-capabilities/ )
   - [Data checker]( https://developer.wordpress.org/plugins/security/data-validation/ )
   - [Use Hooks as Filter or/and Action]( https://developer.wordpress.org/plugins/hooks/ )
   - [Admin menu and Submenu]( https://developer.wordpress.org/plugins/administration-menus/ )
   - [Settings API]( https://developer.wordpress.org/plugins/settings/settings-api/ )

### Factory objectif:

- Define an valid header **Plugin**
- Added 2 pages Administration one page with factory data and one page with factory settings
- Factory settings should be access with *manage_options* as **ROLES_USER**
- Second page **readonly** should be access with: *any admin*
- **Settings page** should give data for build the second page.
- **Settings page** should have default values.
- The settings data should match with strict constraints.
- Minimum one data from **settings page** should be stock inside database.
- The **uninstall method** should clear data stock inside database.


#### Time objectif *2 days* , with start at *initial commit*.
