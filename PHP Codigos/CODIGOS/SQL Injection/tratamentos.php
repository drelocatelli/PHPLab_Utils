PREG_REPLACE:
$_POST['login'] = preg_replace('/[^[:alpha:]_]/', '',$_POST['login']);


OUTROS MEIOS:
$email = stripslashes($_POST['email']); // remove barras invertidas
$email = strip_tags($email); // apaga tags html
$email = mysqli_real_escape_string($db_conx, $email);
$password = preg_replace("[^A-Za-z0-9]", "", $_POST['password']);
$password = md5($password);


FILTER_VAR:
filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)

