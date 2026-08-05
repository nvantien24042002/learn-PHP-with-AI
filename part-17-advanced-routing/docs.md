# 1. CONCEPT

* Multi-level management
  * Module A
    * Action 1
    * Action 2
  * Module B
    * Action 3
    * Action 4
* Module - Action Structure

```html
<a href="?mod=product&act=main&cat_id=10"></a>
# LIMITATIONS
Limitations become apparent when the system has many modules:

  Causes confusion
  Difficult to manage the system
  Difficult to manage code
  Difficult to find files when processing/modifying

# CHECKLIST
1. Push request to URL
    + <a href="?mod=product&act=main&id=1">Computer</a>
    + <a href="?mod=product&act=main&id=2">Smartphone</a>
2. Retrieve data from URL
    + $mod = $_GET['mod'];
    + $act = $_GET['act'];
3. Create file path
    + $path = "modules/{$mod}/{$act}.php";
4. Include current handler file
    + require($path);x`