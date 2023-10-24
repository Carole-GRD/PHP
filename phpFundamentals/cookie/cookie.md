# Cookie

## Setting a cookie

[setcookie()](https://www.php.net/setcookie)


 - **name**: The name of the cookie. You can store cookies as an array by adding square brackets to the end of the name.

cookie values as array

<pre>
setcookie('cookiename[]', 'value1');
setcookie('cookiename[]', 'value2');
</pre>

 - **value** : The value of the cookie. This value is stored on the clients computer. Values stored in a cookie are stored as strings. Do not store sensitive information.

<pre>
echo $_COOKIE['cookiename'][0];
echo $_COOKIE['cookiename'][1];
</pre>

Will display :
<pre>
value1value2
</pre>

- **expire (optional)**: default = 0

[time()](https://www.php.net/manual/en/function.time.php)

Set the cookie to expire in 30 days. 

60 seconds, multiplied by 60 minutes, multiplied by 24 hours, multiplied by 30 days
<pre>
setcookie('cookiename', 'value', time()+60*60*24*30);
</pre>

Set the cookie to expire with session
<pre>
setcookie('cookiename', 'value', 0);
</pre>

- **path (optional)**: default = the current directory in which the cookie is being set.

The path on the server in which the cookie will be available on. If set to /, the cookie will be available within the entire domain. If set to /foo/, the cookie will only be available within the /foo/ directory and all sub-directories such as /foo/bar/ of domain.

- **domain (optional)**: default = works for all subdomains as well

The (sub)domain that the cookie is available to. Older browsers may require a leading . to match all subdomains.

Available to a single subdomain :
<pre>
setcookie('cookiename', 'value', 0, 'www.example.com');
</pre>

Available to all subdomain :
<pre>
setcookie('cookiename', 'value', 0, '.example.com');
</pre>

- **secure (optional)**: default = FALSE

Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to TRUE, the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie only on secure connection (e.g. with respect to $_SERVER["HTTPS"]).

- **httponly (optional)**: default = FALSE

When TRUE the cookie will be made accessible only through the HTTP protocol. This means that the cookie won't be accessible by scripting languages, such as JavaScript.

## Deleting a Cookie

To delete a cookie, we set the cookie to an empty string that expires in the past. Making sure to use the same path we used for the original cookie.

Where $_GET['delete'] is the name of the cookie :
<pre>
setcookie($_GET['delete'], "", time() - 3600, '/');
</pre>


## ⚠️ Cookie vulnerability : CSRF

Learn more about [Cross Site Request Forgery (CSRF)](https://cheatsheetseries.owasp.org/cheatsheets/Cross-Site_Request_Forgery_Prevention_Cheat_Sheet.html)


