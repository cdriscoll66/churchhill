<!-- < ?php

function colab_widgets_init() {

register_sidebar(
    array(
        'name'          => esc_html__( 'Archive Sidebar', 'colab-2021-child' ),
        'id'            => 'archive-sidebar',
        'description'   => esc_html__( 'Add widgets for sidebar here.', 'colab-2021-child' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    )
);
}
add_action( 'widgets_init', 'colab_widgets_init', 5 ); -->