<?PHP
$data = '';

$user = 'user';
$pass = 'pass';

if (!empty($_REQUEST) ) {
  if (!empty($_REQUEST[$user]) && !empty($_REQUEST[$pass])) {
    if ($_REQUEST[$user] == 'munai44' && $_REQUEST[$pass] == 'munai44') {
      $data = '1|'.md5($_REQUEST[$user] . $_REQUEST[$pass]).'|User: ' . $_REQUESTT[$user] .' successfully logged in!';
    }
    else{
      $data = '0|'.md5(date('Y-m-d h:i:s').rand(1,9999)).'|Incorrect username or password!';
    }
    else{
      $data = '0|'.md5(date('Y-m-d h:i:s').rand(1,9999)).'|Fill in username and password!';
  }
}
header('Content-Type: text/plain');
echo $data;
    
      
