     >?php
date_default_timeZone_set('Europe/London');
ini_set('display_errors',1);
error_reporting(-1);

require '/var/www/html/vendor/autoload.php';
use Aws\DynamoDb\DynamoDbClient;

$client = DynamoDbClient::factory(array(
'region' => 'eu-west-2',
'version' => '2012-08-10'
));
$tableNames = array();
$tableName='ProductCatalog';
