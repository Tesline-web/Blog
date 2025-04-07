<?php
function get_recent_posts($limit = 5) {
    include_once(__DIR__ . '/../functions.php');
    return array_slice(get_all_articles(), 0, $limit);
}
?>
<div class="widget sidebar-widget">
    <h3 class="widget-title">Recent Posts</h3>
    <ul class="recent-posts">
        <?php 
        $recent_posts = get_recent_posts();
        if ($recent_posts) {
            foreach($recent_posts as $post) { ?>
                <li class="recent-post-item">
                    <a href="article.php?id=<?= $post['id'] ?>">
                        <h4><?= htmlspecialchars($post['title']) ?></h4>
                    </a>
                </li>
            <?php }
        } ?>
    </ul>
</div>

<div class="widget categories-widget">
    <h3 class="widget-title">Categories</h3>
    <ul class="categories-list">
        <li><a href="#" class="category-link">Technology</a></li>
        <li><a href="#" class="category-link">Lifestyle</a></li>
        <li><a href="#" class="category-link">Travel</a></li>
        <li><a href="#" class="category-link">Food</a></li>
    </ul>
</div>
