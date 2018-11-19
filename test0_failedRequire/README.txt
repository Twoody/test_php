Run command:
	clear & php -S localhots:8000 index.php

Usage and Procedure:
	1. Open browser
	2. Navigate to `http://localhost:8000/`
	3. Observe ERROR messages when files that are `require`d are not present.

For correction:
	Visit test2_successfulRequire/

Expectations:
	Warning: require(./helloworld.php): failed to open stream: No such file or directory in /Users/tannerleewoody/Workspace/weedmaps/test_php/helloworld/public_html/index.php on line 5
	Fatal error: require(): Failed opening required './helloworld.php' (include_path='.:') in /Users/tannerleewoody/Workspace/weedmaps/test_php/helloworld/public_html/index.php on line 5
