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
[
    {
        "id": 1,
        "name": "Project X",
        "description": "XYZ description",
        "user_id": "1",
        "status": "active",
        "deadline": "2018-05-29",
        "created_at": "2017-02-23 15:16:13",
        "updated_at": "2017-02-23 15:16:13",
        "deleted_at": "-0001-11-30 00:00:00",
        "owner": {
            "id": 1,
            "name": "NIsam",
            "email": "mail2nisam@gmail.com",
            "created_at": "2017-02-22 17:44:07",
            "updated_at": "2017-02-28 15:02:26",
            "dob": "2017-02-13",
            "avatar": "logo.png"
        }
    },
    {
        "id": 2,
        "name": "Project Y",
        "description": "XYZ description",
        "user_id": "1",
        "status": "active",
        "deadline": "2018-05-29",
        "created_at": "2017-02-23 15:20:25",
        "updated_at": "2017-02-23 15:20:25",
        "deleted_at": "-0001-11-30 00:00:00",
        "owner": {
            "id": 1,
            "name": "NIsam",
            "email": "mail2nisam@gmail.com",
            "created_at": "2017-02-22 17:44:07",
            "updated_at": "2017-02-28 15:02:26",
            "dob": "2017-02-13",
            "avatar": "logo.png"
        }
    }
]
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
<!-- START_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
## Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
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
`GET api/v1/users`

`HEAD api/v1/users`


<!-- END_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
<!-- START_516efe68800340987a961f28f13fffbd -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/v1/users/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/create",
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
`GET api/v1/users/create`

`HEAD api/v1/users/create`


<!-- END_516efe68800340987a961f28f13fffbd -->
<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
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
`POST api/v1/users`


<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->
<!-- START_6009228d11b4f239545bce3d25ae263a -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/v1/users/{users}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{users}",
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
`GET api/v1/users/{users}`

`HEAD api/v1/users/{users}`


<!-- END_6009228d11b4f239545bce3d25ae263a -->
<!-- START_d949d72f25fd0e4f683c1c100bdc5084 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/v1/users/{users}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{users}/edit",
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
`GET api/v1/users/{users}/edit`

`HEAD api/v1/users/{users}/edit`


<!-- END_d949d72f25fd0e4f683c1c100bdc5084 -->
<!-- START_3bfeaa634c69a02818adfc890d6d52b9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/v1/users/{users}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{users}",
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
`PUT api/v1/users/{users}`

`PATCH api/v1/users/{users}`


<!-- END_3bfeaa634c69a02818adfc890d6d52b9 -->
<!-- START_cc25fea2e0f88e6523eecfd5e172802f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/v1/users/{users}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{users}",
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
`DELETE api/v1/users/{users}`


<!-- END_cc25fea2e0f88e6523eecfd5e172802f -->
<!-- START_8515037be07bcb443a14691ac62822fe -->
## Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/api/v1/tasks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks",
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
`GET api/v1/tasks`

`HEAD api/v1/tasks`


<!-- END_8515037be07bcb443a14691ac62822fe -->
<!-- START_98a574bde7ccec933b33435531bfdfc2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/v1/tasks/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/create",
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
`GET api/v1/tasks/create`

`HEAD api/v1/tasks/create`


<!-- END_98a574bde7ccec933b33435531bfdfc2 -->
<!-- START_930d0ef44833bc7192b1e31cbd94fd87 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/v1/tasks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks",
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
`POST api/v1/tasks`


<!-- END_930d0ef44833bc7192b1e31cbd94fd87 -->
<!-- START_1411c13ad43c3aa0483793c22fd49e28 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/v1/tasks/{tasks}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/{tasks}",
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
`GET api/v1/tasks/{tasks}`

`HEAD api/v1/tasks/{tasks}`


<!-- END_1411c13ad43c3aa0483793c22fd49e28 -->
<!-- START_f686cedf355d3fdfe48e954a108b1021 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/v1/tasks/{tasks}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/{tasks}/edit",
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
`GET api/v1/tasks/{tasks}/edit`

`HEAD api/v1/tasks/{tasks}/edit`


<!-- END_f686cedf355d3fdfe48e954a108b1021 -->
<!-- START_b03e50073d56a8005867821d162f2f27 -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/v1/tasks/{tasks}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/{tasks}",
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
`PUT api/v1/tasks/{tasks}`

`PATCH api/v1/tasks/{tasks}`


<!-- END_b03e50073d56a8005867821d162f2f27 -->
<!-- START_cf91871986cc11def8ae726341ef4a55 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/v1/tasks/{tasks}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tasks/{tasks}",
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
`DELETE api/v1/tasks/{tasks}`


<!-- END_cf91871986cc11def8ae726341ef4a55 -->
<!-- START_b15e57f72948eee842aedee524a93292 -->
## All tasks under a user

> Example request:

```bash
curl "http://localhost/api/v1/users/{id}/tasks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{id}/tasks",
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
`GET api/v1/users/{id}/tasks`

`HEAD api/v1/users/{id}/tasks`


<!-- END_b15e57f72948eee842aedee524a93292 -->
