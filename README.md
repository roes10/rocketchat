# rocketchatchannel
It is a simple package for sending messages using rocket chat channels. This is very simple and without many dependencies.

How to install 
```php
composer require roestreich/rocketchatchannel
```

How to use 

# Create a new instance of Message
```php
$message = new Message();
$message->setImportant(false);
$message->setSuccess(false);
#name channel
$message->setChannel('test');
$message->setText(Markdown::table(['Country','City'],['Spain','Madri']));
```

# Create a new instance of RocketChat

```php
$clientRocketChat = new RocketChat('https://rocketchat.com.br/api/v1/','UGS45hIeD29u0SYmwAdVmdF7cNbOd0ydg4487S9zgw5','SJSGHJLKlhdds');
$clientRocketChat->sendMessage($message);
```
And is it very simple!

## Message types

Bold
```php
$message->setText(Markdown::bold('Spain'));
```

Result Bold

**Spain**

Headings h1 > h6
```php
$message->setText(Markdown::headings('Spain',1));
$message->setText(Markdown::headings('Spain',2));
$message->setText(Markdown::headings('Spain',3));
$message->setText(Markdown::headings('Spain',4));
$message->setText(Markdown::headings('Spain',5));
$message->setText(Markdown::headings('Spain',6));
```
Result Headings

  # Spain
  ## Spain
  ### Spain
  #### Spain
  #### Spain
  ###### Spain

List 
```php
$message->setText(Markdown::listItem(['Spain','Portugal','France']));
```
Result List
 
 - Spain
 - Portugal
 - France


Code Block

The second argument is optional and default is sh, but have many options for syntax highlighting code
some examples: 'js','php','ruby'
```php
$message->setText(Markdown::codeBlock('npm install --production
NODE_ENV=production node app','js'));

```

Result Code Block
```js
npm install --production
NODE_ENV=production node app
```

Table 
```php
$message->setText(Markdown::table(['Country','City'],['Spain','Madri']));
```

Result Table

|Country|City|
| --- | --- |
|Spain|Madri|
