# Elementor Editor Role for WordPress

This project adds a custom WordPress role called **Elementor Editor** with specific permissions tailored for working with Elementor and the media library.

## Features
- Allows editing and publishing pages.
- Provides access to the media library.
- Grants permission to edit with Elementor.
- Restricts the ability to delete media files.

## Installation

### Method 1: Add to `functions.php`
1. Go to your WordPress admin panel.
2. Navigate to **Appearance** → **Theme File Editor**.
3. Select your theme and open the `functions.php` file.
4. Copy the code from `elementor-editor-role.php` and paste it at the end of the file.
5. Click **Update File**.

### Method 2: Use the Code Snippets Plugin
1. Install the **Code Snippets** plugin from the WordPress plugin repository.
2. Go to **Snippets** → **Add New**.
3. Give your snippet a title (e.g., "Elementor Editor Role").
4. Paste the code into the code editor and click **Save Changes and Activate**.

## Usage
1. Go to **Users** → **Add New** or edit an existing user.
2. Assign the **Elementor Editor** role.
3. Log in as the new user and check access to Elementor and the media library.

## Capabilities
- `read` – Allows access to the admin panel.
- `edit_posts` – Required to access the media library.
- `edit_pages` – Allows editing pages.
- `edit_others_pages` – Allows editing other users' pages.
- `edit_published_pages` – Allows editing published pages.
- `publish_pages` – Allows publishing pages.
- `upload_files` – Allows uploading files to the media library.
- `edit_attachments` – Allows editing media files.
- `delete_attachments` – Prohibits deleting media files.
- `elementor_edit` – Allows editing with Elementor.

## Notes
- This code will not be removed when you update WordPress, but if you place it in your theme’s `functions.php`, it will be lost if you change themes.
- For long-term use, consider creating a custom plugin or using the **Code Snippets** plugin.

## License
This project is licensed under the MIT License.

---

Created with ❤️ for WordPress users.

