Code Completion for OSS projects in phpStorm
===========================================

#### These are helper files for code completion in phpStorm with some Open Source Software that I work with.

Its important that you read the comments in each file.
-------------------------------------------------------
<pre>
* CodeIgniter   CodeIgniter/
* phpBB3        phpBB3.php          Some phpBB3 CC fixes
* WordPress     WordPress/  
* OpenCart	    OpenCart/           Still in early stages, but should show example   
* WordPress     example.php         Some other fix examples
* Laravel       submodule laravel-helpers
</pre>

Laravel helpers https://github.com/danielboendergaard/laravel-helpers 

CodeIgniter source https://github.com/EllisLab/CodeIgniter  

Thought I would mention I checked NetBeans 7.1 with CI and the CI_phpStorm.php helps NetBeans with code completion as well .

## Basic Instructions
Fork and Clone or Clone to somewhere on your dev machine

***Get Laravel helpers***
<pre>
git submodule init
git submodule update
</pre>

***Loading in phpStorm***

Load your actual project, then you have 2 options, set include path or add content root (Your choice)

**Option 1 =**  
File > Settings > Directories > Add Content Root > Select the directory in phpStorm-CC-helpers that is relevant > mark Resource Root

**Option 2 =**  
In the project window right click External Libraries > Configure PHP Include Paths
Then add the path to the phpStorm-CC-helpers that is relevant

### CodeIgniter Specific
#### Mark as Plain Text
* /system/core/Controller.php
* /system/core/Model.php
* /system/database/DB_active_rec.php

You should now have code completion.

##### Using the my_models.php
Add your models to the docBlock

Example 

```php
	@property membership_model $membership_model
```

membership_model is the model class and $membership_model will be the property you use to instance it.

Example 

```php
	$this->membership_model->get_records();
```

This will give you code completion for your model methods.
