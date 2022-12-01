# Config management

## Menu

## What is this library for?

This library is for management configurations, utilities, tools, modules, etc.

## May we get an example?

Sure. For example, we define Mysql database:

```
...::add('db', function()
{
    return \mysqli_connect(
        'host',
        'user',
        'password',
        'database'
    )
}
```

Then, if you needed, you may lazy call this function and get access to database connection:

```
...::get('db'); // get mysql connection
```