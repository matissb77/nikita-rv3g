<?
$host='progpamati.lv';

$db='progpama_nlukasins';//mainīt

$user='progpama_nlukasins';//mainīt

$pasw='A-[Pia^%h7)z';//mainīt

$charset='utf8mb4';

$dsn="mysql:host=$host;dbname=$db;charset=$charset";$options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false,];

 

try {

$pdo = new PDO($dsn, $user, $pasw, $options);
// echo "savienojums izdevās<br>";

} catch (\PDOException $e) {

throw new \PDOException($e->getMessage(), (int)$e->getCode());

}