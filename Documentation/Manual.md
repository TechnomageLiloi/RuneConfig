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

## Can some parameters be transmitted to define function?

Sure:

```
...::get('db', $parameters); // get mysql connection
```

```
...::add('db', function(array $parameners)
```

## Can we see interface?

Sure.

Manager interface:

|Type|Name|Parameters|Result|Description|
|---|---|---|---|---|
|method|add|key:string f:callable|void|Add config to key|
|method|remove|key:string|bool|Remove config according to key|
|method|get|key:string|callable|Get config according to key|
|method|all|-|array|Get all configs|