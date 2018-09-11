<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookmark Id'), ['controller' => 'BookmarkId', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmark Id'), ['controller' => 'BookmarkId', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tag->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tag->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bookmark Id') ?></h4>
        <?php if (!empty($tag->bookmark_id)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bookmark Id') ?></th>
                <th scope="col"><?= __('Tag Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->bookmark_id as $bookmarkId): ?>
            <tr>
                <td><?= h($bookmarkId->id) ?></td>
                <td><?= h($bookmarkId->bookmark_id) ?></td>
                <td><?= h($bookmarkId->tag_id) ?></td>
                <td><?= h($bookmarkId->created) ?></td>
                <td><?= h($bookmarkId->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BookmarkId', 'action' => 'view', $bookmarkId->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BookmarkId', 'action' => 'edit', $bookmarkId->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BookmarkId', 'action' => 'delete', $bookmarkId->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarkId->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
