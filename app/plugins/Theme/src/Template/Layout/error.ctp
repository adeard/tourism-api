<?php use Cake\Core\Configure; ?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title><?php echo Configure::read('app'); ?> - <?php echo Configure::read('company'); ?></title>  
	<?php echo $this->Html->css('login') ?>
</head>
<body>
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 cols-xs-12">
			<div class="container-login center-block">
				<?php echo $this->Html->image('synergix-ticket.jpg', ['width' => 320, 'alt' => 'Synergix Ticket', 'class' => 'front-logo img-responsive center-block client-logo']); ?>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 cols-xs-12">	
			<div class="panel panel-default">
				<div class="panel-body">
					<?php echo $this->fetch('content'); ?>
				</div>		
			</div>		
		</div>
		
	</body>
</html>