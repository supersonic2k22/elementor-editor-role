// Create or update the custom role "Elementor Editor" with specific capabilities
function create_elementor_editor_role() {
    add_role('elementor_editor', 'Elementor Editor', [
        'read'                   => true,  // Allows access to the admin panel
        'edit_posts'             => true,  // Required to access the media library
        'edit_pages'             => true,  // Allows editing pages
        'edit_others_pages'      => true,  // Allows editing other users' pages
        'edit_published_pages'   => true,  // Allows editing published pages
        'publish_pages'          => true,  // Allows publishing pages directly
        'upload_files'           => true,  // Allows uploading files to the media library
        'edit_attachments'       => true,  // Allows editing media files
        'delete_attachments'     => false, // Prohibits deleting media files
        'elementor_edit'         => true,  // Allows editing with Elementor
    ]);
}
add_action('init', 'create_elementor_editor_role');

// Ensure the Elementor Editor has all necessary capabilities (runs once)
function add_caps_to_elementor_editor() {
    $role = get_role('elementor_editor');
    if ($role) {
        $role->add_cap('upload_files');   // Allows uploading files
        $role->add_cap('edit_posts');     // Required to access the media library
        $role->add_cap('publish_pages');  // Allows publishing pages directly
        $role->add_cap('read');           // Allows access to the admin panel
    }
}
add_action('admin_init', 'add_caps_to_elementor_editor');
