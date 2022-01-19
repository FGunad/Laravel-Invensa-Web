@props(['link'=>'#', 'label'=>'', 'icon'=>''])

<li class="nav-item">
    <a href="<?= $link ?>" class="nav-link">
      <i class="nav-icon <?= $icon ?>"></i>
      <p><?= $label ?></p>
    </a>
  </li>
