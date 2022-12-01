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

**Sparkle interface:**

|Type|Name|Parameters|Result|Description|
|---|---|---|---|---|
|constructor|-|key:string f:callable|Add configuration unique key and lazy function to sparkle manager|
|method|getKey|-|string|Get tool unique key|
|method|setKey|key:string|string|Set tool unique key|
|method|get|-|string|Get tool lazy function|
|method|set|key:string|string|Set tool lazy function|
|method|execute|-|-|Execute lazy function|

**Pensieve interface:**

|Type|Name|Parameters|Result|Description|
|---|---|---|---|---|
|method|add|:Sparkle|void|Add sparkle to pensieve|
|method|remove|key:string|bool|Remove sparkle from pensieve|
|method|get|key:string|mixed|Get sparkle's execute result by key|