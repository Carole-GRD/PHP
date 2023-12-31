# Form

When the form is submitted by the user, the form data is sent to the script specified in the action attribute :
```
<form method="post" action="form.php"></form>
```

Choose the right variable names :
```
<form method="post" action="form.php">
    <textarea name="biography">I was born in...</textarea>
    <input name="fullname" type="text" value="Jeanne Maes">
    <input name="age" type="number" value="18">
</form>
```

In PHP, the command

```
echo '<pre>';
print_r($_POST);
echo '</pre>';
```

returns :
```
Array
(
    [name] => Lou Reed
    [biography] => I was born in...
    [age] => 68
)
```


We initiate an array that will contain any potential errors.
```
$errors = array();
```

1. Sanitisation
```
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
```

[See the doc : filter_var](https://www.php.net/manual/en/filter.filters.sanitize.php) 



2. Validation
```
if (false === filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "This address is invalid."
}
```

3. execution
```
if (count($errors)> 0){
    echo "There are mistakes!";
    print_r($errors);
    exit;
}
```


If we get here, it's because everything's fine, we can record
```
$bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
//...
```

4. Display the response interface.

As the system has changed, the interface presented to the user must reflect this change.

For example: return html displaying confirmation message or error message) or via redirection (in PHP, via  header("Location: file.extension");).


</pre>
