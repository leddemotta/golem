<?php /* O Ciclo — com comentários! */ ?>
<?php while ( have_posts() ) : the_post() ?>
<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php /* um título h2 */ ?>
     <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php /* Meta dados da postagem com possibilidade de tradução */ ?>
     <div class="entry-meta">
      <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
      <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
      <span class="meta-sep"> | </span>
      <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
      <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
      <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
     </div><!– .entry-meta –>
<?php /* O conteúdo da postagem */ ?>
     <div class="entry-content">
<?php the_content( __( 'Continue reading <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
     </div><!– .entry-content –>
<?php /* Categoria micro-formatada e links para tags junto com link para comentários */ ?>
     <div class="entry-utility">
      <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
      <span class="meta-sep"> | </span>
      <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
      <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
     </div><!– #entry-utility –>
    </div><!– #post-<?php the_ID(); ?> –>
<?php /* Encerrar a div e terminar o ciclo com endwhile */ ?>
<?php endwhile; ?>