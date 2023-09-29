# Blog-CMS-PHP

<h3>This project use SQL and need following tables:</h3>
<br>
<br>
<pre>
   CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `post_image` text NOT NULL,
  `post_content` longtext NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(3) NOT NULL DEFAULT 0,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</pre>

<pre>
  CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</pre>
