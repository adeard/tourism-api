<?php use Cake\Core\Configure; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<title><?php echo Configure::read('app'); ?> - <?php echo Configure::read('company'); ?></title>
		<?php echo $this->Html->css('style'); ?>
		<?php echo $this->Html->css('/vendor/parsley/css/parsley'); ?>
		<?php echo $this->fetch('style'); ?>		
	</head>
	<body>				
		<div class="content-wrapper">
			<div class="container">
				<?php echo $this->Flash->render() ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; <?php echo Configure::read('year'); ?> <?php echo Configure::read('copyright'); ?>
					</div>
				</div>
			</div>
		</footer>
		
        <div id="ticket_pending_modal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 90%;">
                <div class="modal-content">
				</div>
			</div>
		</div>
		
		<?php echo $this->Html->script('jquery-1.11.1'); ?>
		<?php echo $this->Html->script('bootstrap'); ?>
        <?php echo $this->Html->script('pending'); ?>
		<?php echo $this->fetch('script'); ?>	
	</body>
</html>