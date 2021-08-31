<?php 
Class SumoLogger{

public function setLogger($key,$value){ ?>
	<script type='text/javascript' src='src/sumologic.logger.js'></script>
    <script type='text/javascript'>
    var logData = [
	 {'<?php echo $key;?>': "<?php echo $value;?>"}
	];
	SLLogger.log(logData);</script>
	<?php 
}

}
$obj = new SumoLogger;
$key ='test4';
$value ='Value4';
$obj->setLogger($key,$value);
?>
