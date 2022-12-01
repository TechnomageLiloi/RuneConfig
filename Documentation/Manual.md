# Config management

## Menu

## What is this library for?

This library is for management configurations, utilities, tools, modules, etc.

## May we get an example?

Sure. For example, we define Mysql database:

```
...::set('db', function()
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
...::exec('db'); // get mysql connection
```

## Can some parameters be transmitted to define function?

Sure:

```
...::exec('db', $parameters); // get mysql connection
```

```
...::set('db', function(array $parameners) {...
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
|method|exec|[parameters:array]|-|Execute lazy function|

**Pensieve interface:**

|Type|Name|Parameters|Result|Description|
|---|---|---|---|---|
|method|set|:Sparkle|void|Set sparkle to pensieve|
|method|get|-|Sparkle|Get sparkle from pensieve|
|method|remove|key:string|bool|Remove sparkle from pensieve|
|method|removeAdd|-|bool|Remove all sparkles from pensieve|
|method|exec|key:string [parameters:array]|mixed|Get sparkle's execute result by key|