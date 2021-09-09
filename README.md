# go-zero grpc demo

```api
.
|-- README.md
|-- common
|-- docker-compose.yml （etcd）
|-- go.mod
|-- go.sum
|-- grpc_php_plugin (linux 可执行文件)
|-- php
|   |-- Grpc
|   |   |-- GPBMetadata
|   |   |   `-- Proto
|   |   |-- Rpc
|   |   |   |-- LoginRequest.php
|   |   |   |-- LoginResponse.php
|   |   |   `-- UserClient.php
|   |   |-- UserController.php
|   |   `-- composer.json
|   `-- proto
|       `-- user.proto
|-- protoc (linux 可执行文件)
`-- service
    `-- user
        |-- api
        |   |-- etc
        |   |-- internal
        |   |-- user.api
        |   `-- user.go
        |-- model
        |   |-- user.sql
        |   |-- usermodel.go
        |   `-- vars.go
        `-- rpc
            |-- etc
            |-- internal
            |-- rpc
            |-- user
            |-- user.go
            `-- user.proto
```