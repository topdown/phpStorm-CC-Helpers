Code Completion for OSS projects in phpStorm
===========================================

#### These are helper files for code completion in phpStorm with some Open Source Software that I work with.

Its important that you read the comments in each file.
-------------------------------------------------------
<pre>
* CodeIgniter   CI_phpStorm.php
* phpBB3        phpBB3.php          phpBB3 Instructions
* WordPress     wpdb_docs.php       
* WordPress     example.php         Some example fixes
</pre>

Thought I would mention I checked NetBeans 7.1 with CI and the CI_phpStorm.php helps NetBeans with code completion as well .

### Drop the CI_code_completion directory into your CodeIgniter project in phpStorm
#### Mark as Plain Text
* /system/core/Controller.php
* /system/core/Model.php
* /system/database/DB_active_rec.php

You should now have code completion.

##### Using the my_models.php
Add your models to the docBlock

Example 
<pre>
	@property membership_model $membership_model
</pre>

membership_model is the model class and $membership_model will be the propery you use to instance it.

Example 
<pre>
	$this->membership_model->get_records();
</pre>

This will give you code completion for your model methods.
