UPDATE blog_options SET option_value = replace(option_value, 'https://blog.galaxyweblinks.com', 'https://php72.gwl.com/bloggalaxy') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE blog_posts SET guid = replace(guid, 'https://blog.galaxyweblinks.com','https://php72.gwl.com/bloggalaxy');
UPDATE blog_postmeta SET meta_value = replace(meta_value,'https://blog.galaxyweblinks.com','https://php72.gwl.com/bloggalaxy');
UPDATE blog_posts SET post_content = replace(post_content, 'https://blog.galaxyweblinks.com', 'https://php72.gwl.com/bloggalaxy');

update wp_users set user_email = concat('_', user_email, '_');
