<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Layout $layout
  */
?>

<div class="layouts view">
    <h3><?= h($layout->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Layout'), ['action' => 'delete', $layout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layout->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Layout'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Layout'), ['action' => 'edit', $layout->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $layout->has('branch') ? $this->Html->link($layout->branch->name, ['controller' => 'Branches', 'action' => 'view', $layout->branch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $layout->has('position') ? $this->Html->link($layout->position->name, ['controller' => 'Positions', 'action' => 'view', $layout->position->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($layout->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Layout') ?></th>
            <td><?= $this->Number->format($layout->layout) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Layoutcategories') ?>">
        <h4><?= __('Related Layoutcategories') ?></h4>
        <?php if (!empty($layout->layoutcategories)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Itemcategory Id') ?></th>
                <th scope="col"><?= __('Layout Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Compare') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($layout->layoutcategories as $layoutcategories): ?>
            <tr>
                <td><?= h($layoutcategories->id) ?></td>
                <td><?= h($layoutcategories->itemcategory_id) ?></td>
                <td><?= h($layoutcategories->layout_id) ?></td>
                <td><?= h($layoutcategories->qty) ?></td>
                <td><?= h($layoutcategories->compare) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Layoutcategories', 'action' => 'view', $layoutcategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Layoutcategories', 'action' => 'edit', $layoutcategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Layoutcategories', 'action' => 'delete', $layoutcategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layoutcategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Layout'), ['action' => 'edit', $layout->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Layout'), ['action' => 'delete', $layout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layout->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layout'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['controller' => 'Layoutcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layoutcategory'), ['controller' => 'Layoutcategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>