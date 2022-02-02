<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Projeto didático em PHP com Laravel
Projeto realizado através do curso da Dio na plataforma da Dio.

## Links úteis
https://www.dio.me/sign-in

https://laravel.com/

https://hub.docker.com/


## Sistema desenvolvido em PHP usando o framework Laravel para consultas de CEP 

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [Bootstrap](https://getbootstrap.com/)

### :warning: Pré-requisitos 
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Docker](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04-pt). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

#### Configuração ssh
Para não termos que digitar o usuário e a senha toda vez que fizermos uma alteração que interage com o GitHub, é necessário configurar as chaves.

#### Passo 1 - Setup de identidade

1 - Configurar a ssh localmente:
No terminal, digite ssh-keygen (caso ainda não possua nenhuma chave gerada na máquina). O comando irá solicitar um arquivo para gerar a chave:
```
ssh-keygen
Generating public/private rsa key pair.
Enter file in which to save the key (/Users/pasta/.ssh/id_rsa):
```
2 - Pressione a tecla Enter para aceitar o local padrão.
> É recomendável que mantenha o nome da chave padrão, a menos que tenha um motivo para alterá-lo. Para criar uma chave com um nome ou caminho diferente do padrão, especifique o caminho completo para a chave. Por exemplo, para criar uma chave chamada minha-nova-chave-ssh, digite um caminho diferente como mostrado no prompt:
```
ssh-keygen
Generating public/private rsa key pair.
Enter file in which to save the key (/Users/pasta/.ssh/id_rsa): /Users/pasta/.ssh/minha-nova-chave-ssh
```
3 - Digite e re-digite novamente uma senha se for solicitado. O comando irá criar a identidade padrão com as suas chaves públicas e privadas. Toda a interação será semelhante à seguinte:
```
ssh-keygen
Generating public/private rsa key pair.
Enter file in which to save the key (/Users/pasta/.ssh/id_rsa): 
Created directory '/Users/pasta/.ssh'.
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /Users/pasta/.ssh/id_rsa.
Your public key has been saved in /Users/pasta/.ssh/id_rsa.pub.
The key fingerprint is:
4c:80:61:2c:00:3f:9d:dc:08:41:2e:c0:cf:b9:17:69 pasta@myhost.local
The key's randomart image is:
+--[ RSA 2048]----+
|*o+ooo.          |
|.+.=o+ .         |
|. *.* o .        |
| . = E o         |
|    o . S        |
|   . .           |
|     .           |
|                 |
|                 |
+-----------------+

```
4 - Liste o conteúdo de ```~/.ssh``` para visualizar os arquivos de chave
```
ls ~/.ssh
id_rsa id_rsa.pub
```
O comando irá exibir todos os arquivos gerados, no exemplo acima um será a chave pública (id_rsa.pub) e o outro será a chave privada (id_rsa).


#### Passo 2 - Adicionar a chave ao ssh-agent
> Se você não quiser digitar sua senha toda vez que usar a chave, precisará adicioná-la ao ssh-agent

1 - Para iniciar o agent, execute o comando seguinte:
```
eval `ssh-agent`
Agent pid 1943
```

2 - Digite `ssh-add` seguido pelo caminho para o arquivo de chave privada:

Linux / Windows (git-bash)
```
ssh-add ~/.ssh/<private_key_file>
```

macOS
```
ssh-add -K ~/.ssh/<private_key_file>
```

3 - (somente macOS) Para que seu computador se lembre da sua senha toda vez que reiniciar, abra (ou crie) o arquivo `~/.ssh/config` e adicione estas linhas ao arquivo:
```
Host *
  UseKeychain yes
```


#### Passo 3 - Adicionar a chave à conta GitHub

No GitHub em https://github.com/settings/keys iremos colar o conteúdo do arquivo id_rsa.pub (se tiver trocado o nome na criação, substitua).

Para obter o conteúdo do arquivo:

`cat ~/.ssh/id_rsa.pub`

Depois de ter copiado o conteúdo da chave, clique no botão  **New SSH key**, em seguida insira um **Title** de sua preferência e cole o conteúdo no campo **Key**.

Pronto! já podemos clonar os repositórios com tranquilidade.

#### Clone de repositórios 

```
# Clone este repositório
$ git clone git@github.com:lucascercal2512/laravel-cep-project.git

# Acesse a pasta do projeto no terminal/cmd
$ cd laravel-cep-project

# Acesse o código no VSCode através do comando code .
$ code .

# Faça uma cópia do arquivo .env.example e renomeie a cópia como .env

# Configure seu .env de acordo com a sua configuração local
```

### 🎲 Rodando o projeto

```bash
