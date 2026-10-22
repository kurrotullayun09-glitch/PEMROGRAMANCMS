<aside>
    <?php
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        dynamic_sidebar( 'sidebar-1' );
    } else {
        echo '<h4 style="border-bottom:2px solid #3498db; padding-bottom:5px; margin-top:0;">Tentang Blog Ini</h4>';
        echo '<p style="color:#555; margin:0;">Selamat datang di blog pribadi Kurrotul. Blog ini berisi catatan harian dan pengalaman dari Kurrotul.</p>';
    }
    ?>
</aside>
