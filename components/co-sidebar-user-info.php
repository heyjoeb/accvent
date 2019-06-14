<div class="user-info text-center">
          <h2 class="user-info-title">Welcome!</h2>
          <div class="user-info-info">
            <?php global $current_user;
              get_currentuserinfo();    
            ?>
            <div class="user-info-image">
              <?php
              $avatar_image= get_field('imagen_perfil', 'user_'. $current_user->ID );
              ?> 
              <img src="<?php echo $avatar_image['url']; ?>" alt="<?php echo $avatar_image['alt']; ?>" />
            </div>
            <div class="user-info-name">
              <?php echo $current_user->display_name; ?>
            </div>
            <div class="user-info-posts-number">
              <?php echo 'Published: ' . count_user_posts( $current_user->ID ); ?>
            </div>
            <div class="user-info-comments">
             <a class="d-flex justify-content-center align-items-center" target="_blank" href="/wp-admin/edit-comments.php?comment_status=mine&user_id=<?php echo $current_user->ID ?>">Comments</a>
            </div>
            <div class="user-info-links">
              <ul>
                <li class="user-info-links__add-new-item"><a target="_blank" href="/wp-admin/post-new.php">Add new item</a></li>
                <li class="user-info-links__my-page"><a href="<?php echo get_author_posts_url($current_user->ID) ?>">My Page</a></li>
                <li class="user-info-links__my-account"><a target="_blank" href="/wp-admin/profile.php" class="user-info-links__my-account">My Account</a></li>
                <li class="user-info-links__moderate-comments"><a target="_blank" href="/wp-admin/edit-comments.php?comment_status=moderated">Moderate comments</a></li>
              </ul>
            </div>
            <div class="user-info-logout">
              <a href="/wp-login.php?action=logout" class="btn btn-blue">Logout</a>
            </div>
          </div>
        </div>