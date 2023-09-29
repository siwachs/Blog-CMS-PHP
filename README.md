# Blog-CMS-PHP

This project use SQL and need following tables:
Categories ->
Field 	    Type 	        Null 	Key 	Default 	Extra 	
cat_id 	    int(3) 	      NO 	  PRI 	NULL 	    auto_increment
cat_title 	varchar(255) 	NO 		NULL 	

Posts ->
Field 	           Type 	        Null 	Key 	Default 	              Extra 	
post_id 	         int(3) 	      NO 	  PRI 	 	                      auto_increment
post_category_id 	 int(3) 	      NO 		NULL 	
post_title 	       varchar(255) 	NO 		NULL 	
post_author 	     varchar(255) 	NO 		NULL 	
post_date 	       datetime 	    NO 		      current_timestamp() 	
post_image 	       text 	        NO 		NULL 	
post_content 	     longtext 	    NO 		NULL 	
post_tags 	       varchar(255) 	NO 		NULL 	
post_comment_count int(3) 	      NO 		      0 	
post_status 	     varchar(255) 	NO 		      draft 	
