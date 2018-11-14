<nav class="navigation grid--row--1-2 grid--col--8-13" role="navigation">
  <div class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <div class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>" class ='menu-link'><?= $item->title()->html() ?></a>
    </div>
    <?php endforeach ?>
  </div>
</nav>