<?php $this->title = 'Create new post'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post">
    <div>TItle:</div>
    <input type="text" name="post_title"/>
    <div>Content:</div>
    <textarea rows="10" , name="post_content"></textarea>
    <div>
        <input type="submit" value="Create"/>
        <a href="<?= APP_ROOT ?>/posts">[Cancel]</a>
    </div>
</form>
