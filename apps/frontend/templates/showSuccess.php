<?php use_stylesheet('jobs.css') ?>
 
<div class="category">
  <div class="feed">
    <a href="">Feed</a>
  </div>
  <h1><?php echo $category ?></h1>
</div>
 
<?php include_partial('job/list', array('jobs' => $pager->getResults())) ?>
 
<?php if ($pager->haveToPaginate()): ?>
  <div class="pagination">
    <a href="<?php echo url_for('category', $category) ?>?page=1">
    <img src="/uploads/jobs/<?php echo $job->getLogo() ?>" alt="<?php echo $job->getCompany() ?> logo" />
    </a>
 
    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getPreviousPage() ?>">
    <img src="/uploads/jobs/<?php echo $job->getLogo() ?>" alt="<?php echo $job->getCompany() ?> logo" />
    </a>
 
    <?php foreach ($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
      <img src="/uploads/jobs/<?php echo $job->getLogo() ?>" alt="<?php echo $job->getCompany() ?> logo" />
      <?php endif; ?>
    <?php endforeach; ?>
 
    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getNextPage() ?>">
     <a href="<?php echo url_for('job_edit', $job) ?>">Edit</a>
    </a>
 
    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getLastPage() ?>">
    <img src="/uploads/jobs/<?php echo $job->getLogo() ?>" alt="<?php echo $job->getCompany() ?> logo" />
    </a>
  </div>
<?php endif; ?>
 
<div class="pagination_desc">
  <strong><?php echo $pager->getNbResults() ?></strong> jobs in this category
 
  <?php if ($pager->haveToPaginate()): ?>
    - page <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
</div>