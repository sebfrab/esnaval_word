SET @url_actual = "http://localhost/escuela_naval_web";
SET @url_nueva = "http://172.18.21.211/escuela_naval_web";

UPDATE wp_posts    SET  post_content  = REPLACE(post_content, @url_actual, @url_nueva);
UPDATE wp_postmeta SET  meta_value    = REPLACE(meta_value, @url_actual, @url_nueva);
UPDATE wp_options  SET  option_value  = @url_actual WHERE option_name="siteurl";
UPDATE wp_options  SET  option_value  = @url_actual WHERE option_name="home";
