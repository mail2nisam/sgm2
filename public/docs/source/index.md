---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_82ab82c01f059cc547cac8dd63678815 -->
## Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/api/v1/projects" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/projects",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/projects`

`HEAD api/v1/projects`


<!-- END_82ab82c01f059cc547cac8dd63678815 -->
<!-- START_f0a316955ca54c14ce67a60f6eb448b4 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/v1/projects/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/projects/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/projects/create`

`HEAD api/v1/projects/create`


<!-- END_f0a316955ca54c14ce67a60f6eb448b4 -->
<!-- START_e832cdeb3d8617c57febfca7405a7263 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/v1/projects" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/projects",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/projects`


<!-- END_e832cdeb3d8617c57febfca7405a7263 -->
<!-- START_f5d3ff042950a9f89f6070792eb542a9 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/v1/projects/{projects}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/projects/{projects}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/projects/{projects}`

`HEAD api/v1/projects/{projects}`


<!-- END_f5d3ff042950a9f89f6070792eb542a9 -->
<!-- START_02c26b8129852bf475f2fdf5325fe868 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/v1/projects/{projects}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/projects/{projects}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/projects/{projects}/edit`

`HEAD api/v1/projects/{projects}/edit`


<!-- END_02c26b8129852bf475f2fdf5325fe868 -->
<!-- START_e5e9bd3817c19e0b9930219cbd083b10 -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/v1/projects/{projects}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/projects/{projects}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/projects/{projects}`

`PATCH api/v1/projects/{projects}`


<!-- END_e5e9bd3817c19e0b9930219cbd083b10 -->
<!-- START_6371242aed610f6ece7d31b2f6744fca -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/v1/projects/{projects}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/projects/{projects}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/projects/{projects}`


<!-- END_6371242aed610f6ece7d31b2f6744fca -->
