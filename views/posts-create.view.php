<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Create</h1>

<form>
<label >
    <span>Tittle:</span>
    <input name="tittle" />
</label>
</form>

<br>

<form>
<label >
    <span>Category ID:</span>
    <select name="category_id">
        <option value="1">sport</option>
        <option value="2">music</option>
        <option value="3">food</option>
</label>
<button>Save</button>
</form>



<?php require "components/footer.php " ?>