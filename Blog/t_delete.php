<form action="treatment_delete.php" method="post">
    <input name="id" value="<?= $article['id'] ?>" type="hidden" />
    <button name="delete" class="btn btn-primary" type="submit"> Delete article </button>
</form>