<?php
function basepath() (string $path ): string {
    return BASE_PATH . '/' . $path;
}
/**
 * load a partial view from the views/partials folder
 * 
 * @param string $name
 * @return void
 * 
 */
function load(string $name): void {
    require basePath("views/partials/$name.php");
$partialPath = basePath("views/partials/$name.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial view '$name' not found.";
    }
}