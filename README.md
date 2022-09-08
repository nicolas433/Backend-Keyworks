# Desafio Keyworks (backend)

O propósito desse projeto era implementar um quadro KABAN ultilizando Laravel no backend e Vue no frondend.


## Execução do Projeto

Para fazer com que o projeto execute é necessário que seu ambiente local tenha Docker e, preferivelmente, WSL2 em caso de ambiente Windows.

### Instalar Dependências

Dentro da pasta do projeto, execute o seguinte comando:

```bash
docker run --rm \
    -v "$(pwd)":/opt \
    -w /opt \
    laravelsail/php81-composer:latest \
    bash -c "composer create-project --ignore-platform-reqs"
```

### Dar permissão ao seu usuário

```bash
sudo chown -R $USER: .
```

### Executar o ambiente local com Docker

```bash
./vendor/bin/sail up -d
```

-   Você pode criar um `alias` para o comando do `sail` adicionando a seguinte linha no seu arquivo `~/.bashrc`

```bash
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

-  Deixando o comando final assim:
```bash
sail up -d
```
